<?php
/**
 * Created by PhpStorm.
 * User: remy
 * Date: 19/02/2018
 * Time: 20:08
 */

class Pages extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url'); //Loading url helper
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

    public function index(){
        $this->load->view('header');
        $this->load->view('acceuil');
        $this->load->view('footer');
    }


    public function login(){
        $this->load->view('header');
        $this->load->view('login');
        $this->load->view('footer');
    }

}