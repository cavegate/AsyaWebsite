<?php
/**
 * Created by PhpStorm.
 * User: Ehsanh
 * Date: 3/11/14
 * Time: 8:18 PM
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {
    /**
     * the index function that is called by default by the codeigniter when the login controller is accessed
     */
    function index(){
        $this->load->helper("url");
        $this->load->view("register");

    }
}