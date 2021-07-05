<?php
require('fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{

    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(45,10,'Lista Clientes',1,0,'C');
    // Salto de línea
    $this->Ln(20);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}
$pdf=new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);

$conexion = mysqli_connect("localhost","root","","ejemplo.db");
$consulta = "SELECT * FROM cliente";
$resultado = mysqli_query($conexion,$consulta);

while(($row=$resultado->fetch_assoc()) !== null ){
$pdf->cell(5,10,$row['idcliente'], 1, 0, 'C', 0);
$pdf->cell(25,10,$row['Nombre_cliente'], 1, 0, 'C', 0);
$pdf->cell(25,10,$row['rut'], 1, 0, 'C', 0);
$pdf->cell(25,10,$row['telefono'], 1, 0, 'C', 0);
$pdf->cell(55,10,$row['corre_electronico'], 1, 0, 'C', 0);
$pdf->cell(5,10,$row['usuario_idusuario'], 1, 0, 'C', 0);
$pdf->cell(55,10,$row['direccion'], 1, 1, 'C', 0);
} 
$pdf->Output();
?>