<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('usuario/perfil');
		$this->load->view('footer');
	}
	public function confidencial()
	{
		if($this->session->userdata('auth')!=true) die('ACCESO DENEGADO');
		$ip=$this->session->userdata('id');
		$data['usuario']=$this->db->query("SELECT * FROM usuario WHERE usua_id='{$ip}'")->row();
		$this->load->view('header');
		$this->load->view('usuario/perfil');
		$this->load->view('login/confidencial',$data);
		$this->load->view('footer');  
		
    }
}