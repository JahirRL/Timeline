<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('modelo');
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('nav');
		$data["posts"]=$this->modelo->getPosts();
		$data["comentarios"]=$this->modelo->getComentarios();
		$this->load->view('linea',$data);
		$this->load->view('footer');
	}

	//---------------Funciones para manejar sesiones----------//
	public function validaUsuario()
	{
		$usuario=$this->input->post('usuario',TRUE);
		$password=$this->input->post('password',TRUE);

		$data = [
			'usuario' => $usuario,
			'password' => $password
		];

		$data["user"]=$this->modelo->validaUsuario($data);

		if ($data["user"]==FALSE) {
			//$this->session->set_flashdata("msg", "Ha ocurrido un error.");
			redirect("Principal/index", 'location');
		}
		else{
			
			$usuario=$data["user"]->row_array(0);

			$datasession =  [
				'idUsuario' => $usuario["idUsuario"],
				'nombre' => $usuario["nombre"],
				'correo' => $usuario["correo"]
			];

			$this->session->set_userdata($datasession);
			//$this->session->set_flashdata("msg", "Ha iniciado sesi&oacute;n correctamente.");
			redirect("Principal/index", 'location');
		}
	}

	public function cerrarSesion()
	{
		$datasession = [
				'idUsuario' => "",
				'nombre' => "",
				'correo' => ""
			];
		$this->session->unset_userdata($datasession);
		$this->session->sess_destroy();
		redirect('Principal/index/', 'refresh');
	}
	//--------------------------------------------------------//

	//---------------Funciones para agregar contenido---------//
	public function publicar(){
		$contenido=$this->input->post('post',TRUE);

		$data = [
			'contenido' => $contenido,
			'fecha' => date('Y-m-d H:i:s'),
			'idUsuario' => $this->session->userdata('idUsuario')//$this->session->idUsuario
		];

		$this->modelo->agregarPost($data);
		redirect("Principal/index", 'location');
	}

	public function comentar(){
		$idPost = $this->uri->segment(3);
		$contenido=$this->input->post('comentario',TRUE);

		$data = [
			'contenido' => $contenido,
			'idPost' => $idPost,
			'idUsuario' => $this->session->userdata('idUsuario')
		];

		$this->modelo->agregarComentario($data);
		redirect("Principal/index", 'location');
	}
	//--------------------------------------------------------//
}
