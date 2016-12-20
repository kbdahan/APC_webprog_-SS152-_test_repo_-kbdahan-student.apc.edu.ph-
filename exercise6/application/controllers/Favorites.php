<html>
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Favorites extends CI_Controller {

	public function pets(){
		$this->load->view('pets')
	}
	public function song(){
		public function Rock(){
			$this->load->view('Rock')
		}
		public function pop(){
			$this->load->view('pop')
		}
		public function mellow(){
			$this->load->view('mellow')
		}
	}

?>


</html>