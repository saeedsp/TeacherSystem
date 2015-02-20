
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function index()
	{
            
            $this->load->model('university_model');
            $universities = $this->university_model->getAllUniversity();
            
            $data = array('universities' => $universities);
            $content = $this->load->view('home',$data,true);//NULL->data , true is to load into varible

            $this->load->view('master_view',array('content' => $content));
	}
}
