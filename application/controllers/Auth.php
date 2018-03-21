<?php
/**
 * Created by PhpStorm.
 * User: remy
 * Date: 21/02/2018
 * Time: 20:54
 */


class Auth extends CI_Controller
{
    public $model = NULL ;
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url'); //Loading url helper
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('DatabaseOside');
    }

    public function login_process(){

            $username = $this->input->post('username');
            $password = $this->input->post('password');
            error_log($username.' '.$password);
            $is_loggued = $this->session->get_userdata();
            if(isset($is_loggued)) {
                if (empty($username) or empty($password)) {
                    $this->load->view('header');
                    $this->load->view('login');
                    $this->load->view('footer');
                } else {

                    try {
                        $users = $this->DatabaseOside->selectQuery('id, username', 'auth', 'username="' . $username . '" AND password="' . $password . '"');
                        if ($users != FALSE) {
                            $data = array();

                            foreach ($users as $user) {
                                $data['id'] = $user[0];
                                $data['username'] = $username;
                                $this->session->set_userdata($data);
                            }
                            $userData['user'] = $data;
                            $this->load->view('header_log', $userData);
                            $this->load->view('acceuil');
                            $this->load->view('footer');
                        } else {
                            echo 'Vos identifiants sont incorrects';
                        }
                    } catch (Exception $e) {
                        echo $e->getMessage();
                    }
                }
            }else{
                $this->load->view('header');
                $this->load->view('acceuil');
                $this->load->view('footer');
                $this->session->sess_destroy();
            }
    }
    public function disconnect(){
        $this->session->sess_destroy();
        $data['user'] =  FALSE;
        $this->load->view('header', $data);
        $this->load->view('acceuil');
        $this->load->view('footer');
    }
}