<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller 
{
	public function index()
	{
       
        
        $this->load->model('model_usuario');
        $result = $this->model_usuario->consultar();
        $datos = array('registros'=>$result);

        $this->load->view('header');
        $this->load->view('usuario/perfil',$datos);
        $this->load->view('footer');
    }

    public function formulario()
    {
        $this->load->view('header');
        $this->load->view('usuario/formulario');
        $this->load->view('footer');
    }
    public function ejemplar(){

        $this->load->model('model_usuario');
        $result = $this->model_usuario->consultar();
        $datos = array('registros'=>$result);
        $this->load->view('header');
        $this->load->view('usuario/ejemplar',$datos);
        $this->load->view('footer');

       // redirect('usuario/perfil');
    }
    public function regresar(){

        redirect('usuario');

    }


    public function guardar()
    {
        $ejem_id = $this->input->post('ejem_id');
        $ejem_titulo = $this->input->post('ejem_titulo');
        $ejem_editorial = $this->input->post('ejem_editorial');
        $ejem_paginas = $this->input->post('ejem_paginas');
        $ejem_isbn = $this->input->post('ejem_isbn');
        $ejem_idioma = $this->input->post('ejem_idioma');
        $ejem_portada = $this->input->post('ejem_portada');
        $ejem_digital = $this->input->post('ejem_digital');
        $ejem_audio = $this->input->post('ejem_audio');
        $ejem_resumen = $this->input->post('ejem_resumen');
        $ejem_tipo_id = $this->input->post('ejem_tipo_id');
        $ejem_cate_id = $this->input->post('ejem_cate_id');
        $ejem_valoracion = $this->input->post('ejem_valoracion');
        $ejem_anio = $this->input->post('ejem_anio');
        $ejem_nprestamos= $this->input->post('ejem_nprestamos');

       $this->load->model('model_usuario');

        $data = array(
    
           'ejem_id'=>$ejem_id,
            'ejem_titulo'=>$ejem_titulo,
            'ejem_editorial'=>$ejem_editorial,
            'ejem_paginas'=>$ejem_paginas,
            'ejem_isbn'=>$ejem_isbn,
            'ejem_idioma'=>$ejem_idioma,
            'ejem_portada'=>$ejem_portada,
            'ejem_digital'=>$ejem_digital,
            'ejem_audio'=>$ejem_audio,
            'ejem_resumen'=>$ejem_resumen,
            'ejem_tipo_id'=>$ejem_tipo_id,
            'ejem_cate_id'=>$ejem_cate_id,
            'ejem_valoracion'=>$ejem_valoracion,
            'ejem_anio'=>$ejem_anio,
            'ejem_nprestamos'=>$ejem_nprestamos
        );
        $this->model_usuario->guardar($data);
        
        redirect('usuario/ejemplar');
    }

    public function eliminar($ejem_id){
        $this->load->model('model_usuario');
        $this->model_usuario->eliminar($ejem_id);
        redirect('usuario/ejemplar');
     }

     public function edit($ejem_id){
     
        $this->load->view('header');
        $this->load->view('editar');
        $this->load->view('footer'); 
        
}  

public function actualizar($ejem_id) {
    $this->model_usuario->updateData($ejem_id);
    redirect('usuario/ejemplar');
}
 
   
}
