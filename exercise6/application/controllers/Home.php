<html>
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller {
	public function index()
	{
	$this->load->view('Home');
	}
	public function about()
	{
	$this->load->view('about');
	}
	public function PhotoGallery()
	{
	$this->load->controller('PhotoGallery');
	}
	public function Favorites()
	{
	$this->load->controller('Favorites');
	}
	public function Links()
	{
	$this->load->controller('Links');
	}
	public function Main()
	{
	$this->load->view('Main');
	}


}

?>


</html>