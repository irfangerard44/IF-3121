<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

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
	public function index()
	{
		$this->load->view('login');
	}
	public function proclogin(){
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		

		if (empty($username) && empty($password)) {
			header('');
		} else if (empty($username)) {
			header('');
		} else if (empty($password)) {
		header('');
}

$q = $this->model->login($username,$password);
if ($q) {
	/*$tiketopen=$this->model->gettiketopen();
	//$tiketopen=mysqli_num_rows($tiketopen);
	
	$tiketclose=$this->model->gettiketclose();
	//$tiketclose=mysqli_num_rows($tiketclose);
	
	$gettikettotal=$this->model->gettikettotal();
	//$gettikettotal=mysqli_num_rows($gettikettotal);
	
	$getlisttiketopen=$this->model->getlisttiketopen();
	//$getlisttiketopen=mysqli_num_rows($getlisttiketopen);
	
	$getlisttiketclose=$this->model->getlisttiketclose();
	//$getlisttiketclose=mysqli_num_rows($getlisttiketclose);
	$data=array('total'=>$tiketopen,'total1'=>$tiketclose,'total2'=>$gettikettotal,'tampil'=>$getlisttiketopen,'tampil2'=>$getlisttiketclose);*/
	
	$this->load->view('admin/index.php');
	
}
	}
	public function index1(){
		$this->load->view('admin/index.php');
	}
	public function tiket(){
		$this->load->model('model');
		$data['isi'] = $this->model->getdata();
		$this->load->view('admin/tiket.php',$data);
	}

}
?>