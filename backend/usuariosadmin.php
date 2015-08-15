<?php

include('../lib/fpdf/fpdf.php');
include("conexion.php");
session_start();
class PDF extends FPDF {

    // Cabecera de página
    function Header() {
        // Logo
        //$this->Image('images/Reporte.jpg',10,8,270);
        // Arial bold 15
        $this->SetFont('Arial', 'B', 15);
        // Movernos a la derecha
        $this->Cell(80);
        // Título    
        // Salto de línea
        $this->Ln(30);
    }

    // Pie de página
    function Footer() {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        // Número de págin
        $this->Cell(0, 6, "Clientes", 0, 0, "C");
    }

}

$pdf = new PDF('P', 'mm', 'Letter');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 12);

$pdf->Cell(70);
$pdf->Cell(200, 6, 'Ver Todos los Clientes', 0, 1, 'J');
$pdf->Cell(200, 6, '', 0, 1, 'J');

$inst = mysqli_query($conexion, 'select * from usuarios where perfil="cliente"');

 $pdf->Cell(200, 6, 'Id del Usuario' . " - " . 'Email' . " - " . 'Nombre' . " - " . 'Apellido'. " - " . utf8_decode('Teléfono'). " - " . utf8_decode('País'). " - " . 'Estado'. " - " . 'Ciudad'. " - " . utf8_decode('Dirección'), 1, 1, 'J');

while ($rs = mysqli_fetch_array($inst)) {
    $pdf->Cell(200, 6, $rs['user_id'] . " - " . $rs['email'] . " - " . $rs['nombre'] . " - " . $rs['apellido'] . " - " . $rs['telefono']. " - " . $rs['pais']. " - " . $rs['estado']. " - " . $rs['ciudad']. " - " . $rs['direccion'], 1, 1, 'J');
}

$pdf->Output();
?>