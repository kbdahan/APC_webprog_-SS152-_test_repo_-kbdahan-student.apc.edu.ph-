<html>
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class PhotoGallery extends CI_Controller {
	public function index()
	{
	$this->childhood();
	}
	public function childhood(){
		$this->load->view('childhoodgallery')
	}
	public function family(){
		$this->load->view('FamilyGallery')
	}
	public function elementary(){
		$this->load->view('elementarygallery')
	}
	public function highschool(){
		$this->load->view('highschoolgallery')
	}
	public function college(){
		$this->load->view('collegegallery')
	}
}

?>


</html>