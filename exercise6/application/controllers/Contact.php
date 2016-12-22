<?php
class Contact extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('contact_model');
    }
 
    public function index()
    {
        $data['records'] = $this->contact_model->get_record();
        $data['title'] = 'All Contact';
 
        $this->load->view('Head', $data);
        $this->load->view('crud_index', $data);

    }
    
    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
 
         $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $city_name = $_POST['city_name'];
        $email = $_POST['email'];
        $comment = $_POST['comment'];
 
        $this->form_validation->set_rules('first_name', 'Title', 'required');
        $this->form_validation->set_rules('text', 'Text', 'required');
 
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('news/create');
            $this->load->view('templates/footer');
 
        }
        else
        {
            $this->news_model->set_news();
            $this->load->view('templates/header', $data);
            $this->load->view('news/success');
            $this->load->view('templates/footer');
        }
    }
    
    public function edit()
    {
        $id = $this->uri->segment(3);
        
        if (empty($id))
        {
            show_404();
        }
        
        $this->load->helper('form');
        $this->load->library('form_validation');
        
        $data['title'] = 'Edit a news item';        
        $data['news_item'] = $this->news_model->get_news_by_id($id);
        
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('text', 'Text', 'required');
 
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('news/edit', $data);
            $this->load->view('templates/footer');
 
        }
        else
        {
            $this->news_model->set_news($id);
            //$this->load->view('news/success');
            redirect( base_url() . 'index.php/news');
        }
    }
    
    public function delete()
    {
        $id = $this->uri->segment(3);
        
        if (empty($id))
        {
            show_404();
        }
                
        $news_item = $this->news_model->get_news_by_id($id);
        
        $this->news_model->delete_news($id);        
        redirect( base_url() . 'index.php/news');        
    }
}