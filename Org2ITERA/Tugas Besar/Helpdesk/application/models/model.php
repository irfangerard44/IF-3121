<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model extends CI_Model {
	
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function login($username,$password){
		//$koneksi=mysqli_connect('localhost', 'root', '', 'isd');
		//$q = mysqli_query($koneksi, "select * from user where username='$username' and password='$password'");
		//return $q;
 
		$hasil=$this->db->select("*")->from("user")->where("username='$username' and password='$password'")->get();
		return $hasil;
	}
	public function gettiketopen(){
		$tiketopen=$this->db->select("*")->from("tiket")->where("status='open'")->get()->row_array();
		return $tiketopen;
	}
	public function gettiketclose(){
		$tiketclose=$this->db->select("*")->from("tiket")->where("status='close'")->get()->row_array();
		return $tiketclose;
	}
	public function gettikettotal(){
		$gettikettotal=$this->db->select("*")->from("tiket")->order_by("id_tiket")->get()->row_array();
		return $gettikettotal;
	}
	public function getlisttiketopen(){
		$getlisttiketopen=$this->db->select("*")->from("tiket")->where("status='open'")->limit("7")->get()->row_array();
		return $getlisttiketopen;
	}
	public function getlisttiketclose(){
		$getlisttiketclose=$this->db->select("*")->from("tiket")->where("status='close'")->limit("7")->get()->row_array();
		return $getlisttiketclose;
	}
	public function getdatatable(){
		$sql = "SELECT id_tiket, tanggal, pc_no, nama, email, departemen, problem, status FROM tiket;";
		$hasil = $this->db->query($sql);
		return $hasil->result();
	}
	public function getdata(){
		$ambil = $this->db->get('tiket');
		if($ambil->num_rows() > 0){
			foreach($ambil->result() as $baris){
			$hasil[] = $baris;
			}
		return $hasil;
		}
	}
	public function searchticket($id_tiket){
	$ambil=$this->db->select("*")->from("tiket")->where("id_tiket='$id_tiket'")->get();
	if($ambil->num_rows() > 0){
			foreach($ambil->result() as $baris){
			$hasil[] = $baris;
			}
		return $hasil;
		}
	}
	
	
}
?>