<?php
/**
 * Created by PhpStorm.
 * User: MohammadSadjad
 * Date: 3/3/14
 * Time: 9:21 PM
 * Description: This file is the controller for the login module and is created to handle the login events
 */

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
    /**
     * the index function that is called by default by the codeigniter when the login controller is accessed
     */
    function index(){
        $this->load->helper("url");
        $this->load->view("login");

    }
}