<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Futsal_model extends CI_Model {

    function __construct(){
        parent::__construct();
    }
	
	public function list_futsal(){
		$query = $this->db->query('select * from operator WHERE status="confirmed"');
		return $query->result_array();
	}

	public function profile_futsal($id_futsal){
		$query = "SELECT * FROM operator WHERE id_futsal='$id_futsal'";
		$data = $this->db->query($query);
		return $data->result_array();
	}

	public function list_lapangan($id_futsal){
    	$query = "SELECT * FROM lapangan WHERE id_futsal='$id_futsal'";
    	$data = $this->db->query($query);
    	return $data->result_array();
    }

    public function cari_futsal($keyword){
		$query = "SELECT * FROM operator WHERE status='confirmed' AND nama_futsal LIKE '%$keyword%'";
		$data = $this->db->query($query);
		return $data->result_array();
	}

	public function filter_futsal($id_kota){
		$query = "SELECT * FROM operator WHERE status='confirmed' AND id_kota='$id_kota'";
		$data = $this->db->query($query);
		return $data->result_array();	
	}

}