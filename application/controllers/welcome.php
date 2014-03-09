<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: MohammadSadjad
 * Date: 3/3/14
 * Time: 9:21 PM
 *
 * Description:
 * This file is the controller of the main website public page
 */

class Welcome extends CI_Controller
{
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
        $user_id = $this->checkLogin();
        $this->load->helper('url');
        $this->lang->load('fa','persian');
        $passedArray = array(
            "title" => $this->lang->line('welcome_title'),
            "welcome_content_header" => $this->lang->line("welcome_content_header"),
            "welcome_content_description" => $this->lang->line("welcome_content_description"),
            "welcome_content" =>$this->lang->line("welcome_content"),
            "welcome_button_buy" => $this->lang->line("welcome_button_buy"),
            "welcome_button_product" => $this->lang->line("welcome_button_product"),
            "welcome_or" => $this->lang->line("welcome_or"),
            "welcome_button_learnmore" => $this->lang->line("welcome_button_learnmore"),
            "header_meta_description" => $this->lang->line("header_meta_description"),
            "header_login" => $this->lang->line("header_login"),
            "header_register" => $this->lang->line("header_register")
        );
        $user = null;
        if($user_id != false)
        {
            $this->load->model("users");
            $user = new Users();
            $user->load($user_id);
            $user_name = $user->first_name . " " . $user->last_name;
            $passedArray["user_name"] = $user_name;
        }
        else
        {
            $passedArray["user_name"] = FALSE;
        }
        $this->load->view("header",$passedArray);
        $this->load->library('form_validation');
        $this->form_validation->set_rules(array(
           array(
               'field' => 'number_of_licence',
               'label' => $this->lang->line('number_of_licence'),
               'rules' => 'required|is_numeric'
           )
        ));
        $this->form_validation->set_error_delimiters('<div class="alert alert-error">','</div>');
        if(!$this->form_validation->run() || !$user_id)
        {
            $this->load->view('welcome_page');
            $this->load->view('footer');
        }
        else
        {
            $this->load->model('userfactors');
            $newUserFactor = new Userfactors();
            $newUserFactor->user_id = $user_id;
            $licenceCount = (int)$this->input->post('number_of_licenece');
            $this->load->model('factors');
            $this->load->model('licences');
            for($i = 0 ; $i<$licenceCount ; $i++)
            {
                //TODO: Must add a licence as much as the user wanted and then add a factor for him and send it to the factorsettings controller
                //$newLicence = ;
            }
        }
	}

    /**
     * this function checks whether a user is logged in or not
     * @return mixed (int(the id of the user) or FALSE(not logged in))
     */
    public function checkLogin()
    {
        $this->load->library('session');
        return $this->session->userdata('userid');
    }

    public function calculatePrice()
    {
        //TODO: must write the function to calculate the price
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */