<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reportes extends CI_Controller 
{
    public function __construct() {
        parent:: __construct();
}
	 function index(){

      $this->load->library('Pdf');

        $pdf = new PDF();
        $pdf->AliasNbPages();//crea numeración de página
        $pdf->AddPage();//crea nueva página
        $pdf->SetFont('Times','',12);//define tipo de letra
        /*for($i=1;$i<=40;$i++)
            $pdf->Cell(0,10,'Imprimiendo línea número '.$i,0,1);//bucle de 40 líneas*/
   $rows = $this->db->query("SELECT * FROM ejemplar")->result();
   foreach($rows as $row){
   $pdf->Cell(90,10,utf8_decode($row->ejem_titulo) ,1,0,'C',0);
   $pdf->Cell(45,10, $row->ejem_editorial,1,0,'C',0);
   $pdf->Cell(45,10, $row->ejem_portada,1,1,'C',0);
   }


        $pdf->Output();

     }
}
?>