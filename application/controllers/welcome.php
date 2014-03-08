<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        $user_name = $this->checkLogin();
        $this->load->helper('url');
        $this->load->view("header",array
        (
                "title" => "Asanchap khane", //TODO: Must change persian
                "username" => $user_name
         ));
        $this->load->library('form_validation');
        $this->form_validation->set_rules(array(
           array(
               'field' => 'number_of_licence',
               'label' => 'tedade licenceha', //TODO: Must change persian
               'rules' => 'required|is_numeric'
           )
        ));
        $this->form_validation->set_error_delimiters('<div class="alert alert-error">','</div>');
        if(!$this->form_validation->run() || !$user_name)
        {
            $this->load->view('welcome_message');
        }
        else
        {
            $this->load->model('');
        }
	}

    /**
     * this function checks whether a user is logged in or not
     * @return string(the name of the user) or FALSE(not logged in)
     */
    public function checkLogin()
    {
        $this->load->library('session');
        return $this->session->userdata('username');
    }

    public function calculatePrice()
    {

    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */