
<?php

include('conex.php');

$objeConexion = new Conexion();
require('./fpdf/fpdf.php');
$pdf = new FPDF();

$pdf->AddPage();
$pdf->SetFont('Arial','',11);
$pdf->SetFillColor(0,255,127);
$fill=true;
$pdf->Ln();
$pdf->Cell(180,10,"LISTA DE USUARIOS",0,0,'c');
$pdf->Ln();
$pdf->Cell(45,10,"usuario",1,0,'c',$fill);
$pdf->Cell(45,10,"password",1,0,'c',$fill);
$pdf->Cell(45,10,"departamento",1,0,'c',$fill);
$pdf->Cell(45,10,"permisos",1,0,'c',$fill);

$sql="select * from user";
$result = mysqli_query($objeConexion->conectarse(), $sql);;

while($row = mysqli_fetch_array($result))
{
$pdf->ln();
$pdf->Cell(45,10,$row['username'],1,0,'c');
$pdf->Cell(45,10,$row['password'],1,0,'c');
$pdf->Cell(45,10,$row['depart'],1,0,'c');
$pdf->Cell(45,10,$row['permisos'],1,0,'c');

}

$pdf->Output();
?>















