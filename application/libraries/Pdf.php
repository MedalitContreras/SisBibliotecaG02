<?php

include(APPPATH."libraries/fpdf/fpdf.php");

class PDF extends FPDF
{
    function Header()
    {
        // Logo
        $this->Image(FCPATH.'assets/logo.jpg',10,05,180,30);
        // Arial bold 15
        $this->SetFont('Arial','B',15);
        // Movernos a la derecha
        $this->Cell(75);
        // Título
        $this->Cell(30,20,'REPORTE DE EJEMPLARES',0,0,'C');
        // Salto de línea
        $this->Ln(35);

        $this->Cell(90,10,utf8_decode('TÍTULO') ,1,0,'C',0);
        $this->Cell(45,10, 'EDITORIAL',1,0,'C',0);
        $this->Cell(45,10, 'PORTADA',1,1,'C',0);
    }
    

    
    // Pie de página
    function Footer()
    {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Número de página
        $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
    }

}

?>