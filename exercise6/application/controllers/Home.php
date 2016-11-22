<html>
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller {
	public function index()
	{
	$this->load->model('home_model');
	$data['images'] = $this->home_model->get_images();
	$this->load->view('home_view', $data);
		
	}
}

?>


</html>