<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
        $this->load->view('header');
        $this->load->view('login/login');
        $this->load->view('footer');
    }
    
    public function evaluar()
    {
        $usuario=$this->input->post('usuario');
        $password=$this->input->post('password');

        $result=$this->db->query("SELECT * FROM usuario WHERE usua_login='{$usuario}' AND  usua_password='{$password}'");
        
        if($result->num_rows()>0){
            $row=$result->row();
            echo "Bienvenido {$row->usuario}";
            $data=array('user'=>$row->usuario,'id'=>$row->id,'auth'=>true); 
            $this->session->set_userdata($data);
            redirect();
        }
        else{
            echo "Acceso denegado";
            redirect('Login');
        }
    }

    public function salir()
	{
        $this->session->sess_destroy();
        redirect();
    }

    public function registro()
    {
        $this->load->view('header');
        $this->load->view('login/registro');
        $this->load->view('footer');
    }

    public function guardar()
	{

        $usua_login = $this->input->post('usua_login');
        $usua_password = $this->input->post('usua_password');
        $usua_codigo = $this->input->post('usua_codigo');
        $usua_nombres = $this->input->post('usua_nombres');
        $usua_apellidos = $this->input->post('usua_apellidos');
        $usua_direccion = $this->input->post('usua_direccion');
        $usua_email = $this->input->post('usua_email');
        $usua_telefono=$this->input->post('usua_telefono');

        $this->load->model('model_login');

        $data = array(
            'usua_login'=>$usua_login,
            'usua_password'=>$usua_password,
            'usua_codigo'=>$usua_codigo,
            'usua_nombres'=>$usua_nombres,
            'usua_apellidos'=>$usua_apellidos,
            'usua_direccion'=>$usua_direccion,
            'usua_email'=>$usua_email,
            'usua_telefono'=>$usua_telefono

        );
        $this->model_login->guardar($data);
        
        redirect('login');
    }

    public function mostrar()
	{
        if($this->session->userdata('auth')==true){
           echo "uwu si puedes ver esto"; 
        }else{
            echo "eres un impostor :v";
        }
        

    }


}