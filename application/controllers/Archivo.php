<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Archivo extends CI_Controller 
{
    public function __construct() {
        parent:: __construct();
        $this->load->helper(array('form', 'url'));
}
	 function index(){
     $this->load->view("img/subirarchivo",array('error'=>''));
     }
function listar(){
    $data['ejemplares'] = $this->db->get("ejemplar")->result();;
    $this->load->view("img/listararchivos",$data);

}
     function subir(){
         $titulo = $this->input->post('titulo');
         $file = uniqid();
         $data = $this->do_upload('./uploads/',$file);
         $archivo = $data['file_name'];

         $data = array(
             'ejem_titulo'=>$titulo,
           
             'ejem_portada'=>$archivo
         );
         $this->db->insert('ejemplar',$data);
         
 }

     public function do_upload($path,$name)
     {
             $config['upload_path']          = $path;
             $config['allowed_types']        = 'gif|jpg|png|docx|xls|xlsx|pdf';
             $config['file_name']        = $name;
             $config['max_size']             = 1024;
             $config['max_width']            = 1024;
             $config['max_height']           = 768;

             $this->load->library('upload', $config);

             if ( ! $this->upload->do_upload('userfile'))
             {
                     return false;
             }
             else
             {
                     $data = $this->upload->data();
                     return $data;
             }
     }
}
?> 