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
        $this->Cell(0, 6, "Pedidos", 0, 0, "C");
    }

}

$pdf = new PDF('P', 'mm', 'Letter');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 12);

$pdf->Cell(70);
$pdf->Cell(200, 6, 'Ver Todos los Pedidos', 0, 1, 'J');
$pdf->Cell(200, 6, '', 0, 1, 'J');

$inst = mysqli_query($conexion, 'select p.pedido_id as pid, p.fecha as fe,p.comentario as pc, u.nombre as un, pr.nombre as pn from pedidos as p join usuarios as u on u.user_id= p.user_id join productos as pr on p.producto_id= pr.producto_id
    ');

$pdf->Cell(200, 6, 'Id del Pedido' . " - " . 'Fecha y hora' . " - " . 'Comentario' . " - " . 'Usuario'. " - " . 'Producto', 1, 1, 'J');

while ($rs = mysqli_fetch_array($inst)) {
    $pdf->Cell(200, 6, $rs['pid'] . " - " . $rs['fe'] . " - " . $rs['pc'] . " - " . $rs['un'] . " - " . $rs['pn'], 1, 1, 'J');
}

$pdf->Output();
?>