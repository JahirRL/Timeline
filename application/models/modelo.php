<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class modelo extends CI_Model{
	
	function __construct(){
		parent::__construct();
	}

	//---------------Consultas en la base de datos------------//
	public function validaUsuario($data){

		$cadena="select * from Usuario where nombre='".$data['usuario']."' and contraseña='".$data['password']."'";
		
		$query = $this->db->query($cadena);
		
		if ($query->num_rows() > 0){
			return $query;
		}
		else{
			return FALSE;
		}
	}

	public function getPosts(){

		$cadena="select p.idPost, p.contenido, p.idUsuario, p.fecha, u.idUsuario, u.nombre, u.correo from Post as p inner join Usuario as u on p.idUsuario=u.idUsuario order by p.fecha desc";
		
		$query = $this->db->query($cadena);
		
		if ($query->num_rows() > 0){
			return $query;
		}
		else{
			return FALSE;
		}
	}

	public function getComentarios(){

		$cadena="select c.contenido, c.idPost, c.idUsuario, u.idUsuario, u.nombre, u.correo from Comentario as c inner join Usuario as u on c.idUsuario=u.idUsuario";
		
		$query = $this->db->query($cadena);
		
		if ($query->num_rows() > 0){
			return $query;
		}
		else{
			return FALSE;
		}
	}
	//--------------------------------------------------------//


	//------------Añadir contenido a la base de datos---------//
	public function agregarPost($data){
		$cadena="insert into Post(contenido,fecha,idUsuario) values('".$data["contenido"]."', '".$data["fecha"]."', ".$data["idUsuario"].")";

		$this->db->query($cadena);
	}

	public function agregarComentario($data){
		$cadena="insert into Comentario(contenido,idPost,idUsuario) values('".$data["contenido"]."', ".$data["idPost"].", ".$data["idUsuario"].")";
		
		$this->db->query($cadena);
	}
	//--------------------------------------------------------//

	public function get($table, $select = "*", $where = [], $join = [], $order_by = [], $limit = []){
		$this->db->select($select);
		if (!empty($where))
			foreach($where as $component)
				$this->db->where($component["column"], $component["value"]);
		if (!empty($join))
			foreach($join as $component)
				$this->db->join($component["table"], $component["reference"]);
		if (!empty($order_by))
			foreach($order_by as $component)
				$this->db->order_by($component["column"], $component["method"]);
		if (!empty($limit))
				$this->db->limit($limit["count"], $limit["offset"]);
		$query = $this->db->get($table);
		if ($query->num_rows() > 0)
			return $query;
		else 
			return null;
	}

	public function insert($table, $data = null, $escape = true){
		if ($data === null) {
			return false;
		}
		$this->db->trans_start();
		$this->db->set($data);
		$this->db->insert($table);
		$this->db->trans_complete();
		if($this->db->trans_status() === false) {
			$this->db->trans_rollback();
			return false;
		} else {
			$this->db->trans_commit();
			return true;
		}
	}

}