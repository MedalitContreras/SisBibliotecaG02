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
   $rows = $this->db->query("SELECT * FROM categoria")->result();
   foreach($rows as $row){
    $pdf->Cell(0,10, $row->cate_nombre,0,1);
   }
        $pdf->Output();

     }
}
?>