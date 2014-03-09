<?php
/**
 * Created by PhpStorm.
 * User: MohammadSadjad
 * Date: 3/8/14
 * Time: 4:48 PM
 *
 * Description:
 * This controller is created to present a demo to the users to get more familiar with our product
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Demo extends CI_Controller{

    /**
     * the default function that is called whenever the user calls the help
     */
    public function index()
    {
        $user_id = $this->checkLogin();
        $this->load->helper('url');
        $this->lang->load('fa','persian');
        $passedArray = array(
            "title" => $this->lang->line('welcome_title'),
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
        $this->load->view('header',$passedArray);
        $this->load->view('demo');
        $this->load->view('footer');
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
} 