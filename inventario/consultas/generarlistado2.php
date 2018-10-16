<?php 
require('../fpdf/fpdf.php');
header('Access-Control-Allow-Origin: *'); 
header('Access-Control-Allow-Headers: Content-Type');

$datos = json_decode($_POST['json']);
//$parametro = $_POST['param'];
/*
var_dump($_POST['json']);

foreach ($datos as $key => $value) {
    echo $value['0'] . " - " . $value['1'] . " - " . $value['2'] . " - " . $value['3'] . " - " . $value['4'] . " - " . $value['5'] . "<br />";
}
*/

//var_dump($_POST['param']);
//echo $parametro;

class PDF extends FPDF {
// Cabecera de página
function Header() {
    // Logo
    $this->Image('../images/inventario.png',20,10, 30);
    // Arial bold 15
    $this->SetFont('Arial','',11);
    $this->SetTextColor(0);
    // Movernos a la derecha
    // Título
    $this->Cell(230,10, utf8_decode($_POST['param']) ,0,0,'C');
    $this->Cell(40,10, date('d M Y H:i:s') ,10,0,'C');
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

function FancyTable($header, $data) {
    // Colores, ancho de línea y fuente en negrita
    $this->SetFillColor(0,60,0);
    $this->SetTextColor(255);
    $this->SetDrawColor(0,60,0);
    $this->SetLineWidth(.3);
    $this->SetFont('','B');
    // Cabecera
    $w = array(40, 8, 60, 47, 85, 25);
    for($i=0;$i<count($header);$i++)
        $this->Cell($w[$i],7,$header[$i],1,0,'C',true);
    $this->Ln();
    // Restauración de colores y fuentes
    $this->SetFillColor(224,235,255);
    $this->SetTextColor(0);
    $this->SetFont('');
    // Datos
    $fill = false;

    //initialize counter
    $i = 0;
    //Set maximum rows per page
    $max = 25;
    foreach($data as $row)
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
        } elseif ($i==24) {
            $this->Cell($w[0],6,$row[0],'LRB',0,'L',$fill);
            $this->Cell($w[1],6,$row[1],'LRB',0,'R',$fill);
            $this->Cell($w[2],6,$row[2],'LRB',0,'R',$fill);
            $this->Cell($w[3],6,$row[3],'LRB',0,'L',$fill);
            $this->Cell($w[4],6,$row[4],'LRB',0,'L',$fill);
            $this->Cell($w[5],6,$row[5],'LRB',0,'R',$fill);
            $this->Ln();
            $fill = !$fill;
        } else {
            $this->Cell($w[0],6,$row[0],'LR',0,'L',$fill);
            $this->Cell($w[1],6,$row[1],'LR',0,'R',$fill);
            $this->Cell($w[2],6,$row[2],'LR',0,'R',$fill);
            $this->Cell($w[3],6,$row[3],'LR',0,'L',$fill);
            $this->Cell($w[4],6,$row[4],'LR',0,'L',$fill);
            $this->Cell($w[5],6,$row[5],'LR',0,'R',$fill);
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
//$pdf->AddPage();

$pdf->SetFont('Arial','',8);

//$pdf->Ln(15);


// Títulos de las columnas
$header = array(utf8_decode('Código de barras'), utf8_decode('Uds'), utf8_decode('Número de serie'), utf8_decode('Elemento'), utf8_decode('Descripción'), utf8_decode('Fecha alta'));
$pdf->AddPage();
$pdf->FancyTable($header,$datos);


$pdf->Output();

?>