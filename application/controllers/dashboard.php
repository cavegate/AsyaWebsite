<?php
/**
 * Created by PhpStorm.
 * User: Ehsanh
 * Date: 3/17/14
 * Time: 12:41 PM
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    /**
     * the index function that is called by default by the codeigniter when the login controller is accessed
     */
    function index(){
        $this->load->helper("url");
        $this->load->view("login");

    }
}