<?php 
require('../fpdf/fpdf.php');
header('Access-Control-Allow-Origin: *'); 
header('Access-Control-Allow-Headers: Content-Type');


$datos = json_decode($_POST['json']);
$datoscolumna = json_decode($_POST['jsoncol']);


$new_datoscolumna = objectToArray($datoscolumna);
$new_datos = objectToArray($datos);

$GLOBALS['datos'] = $new_datos;
$GLOBALS['datoscolumna'] = $new_datoscolumna;


function objectToArray($d) 
{
    if (is_object($d)) {
        // Gets the properties of the given object
        // with get_object_vars function
        $d = get_object_vars($d);
    }

    if (is_array($d)) {
        /*
        * Return array converted to object
        * Using __FUNCTION__ (Magic constant)
        * for recursive call
        */
        return array_map(__FUNCTION__, $d);
    } else {
        // Return array
        return $d;
    }
}

//echo "<pre>";
//print_r($new_datos);
//echo "</pre>";

//var_dump($_POST['json']);
//var_dump($_POST['jsoncol']);


class PDF extends FPDF {
// Cabecera de página
    function Header() {
    // Logo
        $this->Image('../images/inventario.png',20,10, 30);
    // Arial bold 15
        $this->SetFont('Arial','',11);
        $this->SetTextColor(0);
        $this->Cell(500,10, date('d M Y H:i:s') ,10,0,'C');
    // Salto de línea
        $this->Ln(20);
    }

// Pie de página
    function Footer() {
    // Posición: a 1,5 cm del final
        $this->SetY(-15);
    // Arial italic 8
        $this->SetFont('Arial','I',8);
        $this->SetTextColor(0);
    // Número de página
        $this->Cell(180,10,'Inventario C.I.F.P. Santa Catalina',0,0,'C');
        $this->Cell(30,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
    }

    function FancyTable($header, $datos) {
    // Colores, ancho de línea y fuente en negrita
        $this->SetFillColor(0,60,0);
        $this->SetTextColor(255);
        $this->SetDrawColor(0,60,0);
        $this->SetLineWidth(.3);
        $this->SetFont('','B');
    // Cabecera
        $w=array();
        foreach ($GLOBALS['datoscolumna'] as $key => $value) {
            if ($value=='desc') {
                $w[]=160;
            } else {
                $w[]=40;
            }
        }
           for($i=0;$i<count($header);$i++)
            $this->Cell($w[$i],7,$header[$i],1,0,'C',true);
        $this->Ln();
    // Restauración de colores y fuentes
        $this->SetFillColor(224,235,255);
        $this->SetTextColor(0);
        $this->SetFont('');
    // Datos
        $fill = false;

    //initialize counter de lineas
        $i = 0;
    //Set maximum rows per page
        $max = 25;
        foreach($GLOBALS['datos'] as $row)
        {
            if ($i==$max) {
            // Colores, ancho de línea y fuente en negrita
                $this->SetFillColor(0,60,0);
                $this->SetTextColor(255);
                $this->SetDrawColor(0,60,0);
                $this->SetLineWidth(.3);
                $this->SetFont('','B');
				
                $i=0;
                for($j=0;$j<count($header);$j++)
                    $this->Cell($w[$j],7,$header[$j],1,0,'C',true);
                $this->Ln();
            // Restauración de colores y fuentes
                $this->SetFillColor(224,235,255);
                $this->SetTextColor(0);
                $this->SetFont('');
                $i--;
				// Última línea de datos
            } elseif ($i==24) {
               
                $pos=0;
                foreach ($w as $key => $value) {
                    $this->Cell($w[$pos],6,$row[$pos],'LRB',0,'L',$fill);
                    $pos++;
                }
                $this->Ln();
                $fill = !$fill;
            } else {
                
                $pos=0;
                foreach ($w as $key => $value) {
				  
                    $this->Cell($w[$pos],6,$row[$pos],'LR',0,'L',$fill);
                    $pos++;
                }
                $this->Ln();
                $fill = !$fill;
            }

            $i++;
        }
    // Línea de cierre
        $this->Cell(array_sum($w),0,'','T');
    }

}

$pdf = new PDF('L','mm','A4');
$pdf->AliasNbPages();

$pdf->SetFont('Arial','',8);

$pdf->Ln(15);

// Títulos de las columnas
$header=array();
foreach ($GLOBALS['datoscolumna'] as $key => $value) {
    $header[]=$value[0];
}

$pdf->AddPage();
$pdf->FancyTable($header,$datos);
$pdf->Output();

?>