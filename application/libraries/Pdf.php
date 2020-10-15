<?php

include(APPPATH."libraries/fpdf/fpdf.php");

class PDF extends FPDF
{
    function Header()
    {
        // Logo
        $this->Image(FCPATH.'assets/logo.jpg',4,01,55,33);
        $this->Image(FCPATH.'assets/logo1.png',168,06,25,17);
        $this->Image(FCPATH.'assets/logo2.jpg',10,25,180,25);
        // Arial bold 15
        $this->SetFont('Arial','B',15);
        $this->Cell(180,55,'REPORTE DE EJEMPLARES',0,0,'C');
        // Movernos a la derecha
        $this->Cell(75);
        // Título
        $this->SetFont('Arial','I',11);
        $this->Cell(-320,15,utf8_decode('"Año de la universalización de la salud"'),0,0,'C');
        
      
        // Salto de línea
        $this->Ln(40);
        $this->SetFont('Arial','B',15);
        $this->SetFillColor(223,223,223); 
        $this->Cell(90,10,utf8_decode('TÍTULO') ,1,0,'C',1);
        $this->Cell(45,10, 'EDITORIAL',1,0,'C',1);
        $this->Cell(45,10, 'PORTADA',1,1,'C',1);
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