<html>
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Song extends CI_Controller {
	public function index()
	{
	$this->rock();
	}
	public function rock(){
		$this->load->view('Head');
		$this->load->view('Rock');
	}
	public function pop(){
		$this->load->view('Head');
		$this->load->view('pop');
	}
	public function mellow(){
		$this->load->view('Head');
		$this->load->view('mellow');
	}
	}

?>


</html>