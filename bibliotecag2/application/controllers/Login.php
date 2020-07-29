<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
        $this->load->view('header');
        $this->load->view('login');
        $this->load->view('footer');
    }
    
    public function evaluar()
    {
        $usuario=$this->input->post('usuario');
        $password=$this->input->post('password');

        $result=$this->db->query("SELECT * FROM usuario WHERE usua_login='{$usuario}' AND  usua_password='{$password}'");
        
        if($result->num_rows()>0){
            $row=$result->row();
            echo "bienvenido {$row->usuario}";
            $data=array('user'=>$row->usuario,'id'=>$row->id,'auth'=>true); 
            $this->session->set_userdata($data);
            redirect();
        }
        else{
            echo "eres un impostor alv ";
            redirect('Login');
        }
    }

    public function salir()
	{
        $this->session->sess_destroy();
        redirect();
    }

    public function mostrar()
	{
        if($this->session->userdata('auth')==true){
           echo "uwu si puedes ver esto"; 
        }else{
            echo "eres un impostor alv ";
        }
        

    }


}