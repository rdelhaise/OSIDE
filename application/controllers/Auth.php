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

            $username = $this->input->post('mail');
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
                        $users = $this->DatabaseOside->selectQuery('id, email', 'auth', 'email="' . $username . '" AND password="' . $password . '"');
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

    /**
     * @return null
     */
    public function signInProcess(){
        $name = $this->input->post('name');
        $firstname = $this->input->post('firstname');
        $email = $this->input->post('mail');
        $password = $this->input->post('password');
        $adress = $this->input->post('adress');
        $city = $this->input->post('city');
        $zip =  $this->input->post('zip');
        $mobile = $this->input->post('mobile');
        $tel =  $this->input->post('tel');
        if(isset($name) or isset($firstname) or isset($email) or isset($password) or isset($mobile) ){
            $data = array($name, $firstname, $email, $password, $adress, $city, $zip,  $mobile, $tel);
            print_r($data);
            $res = $this->DatabaseOside->insertQuery('name, firstname, email, password, adress, city, zip, mobile, tel', 'auth', $data);
        }else{
            print('NTM');
        }
    }
    public function disconnect(){
        $this->session->sess_destroy();
        $data['user'] =  FALSE;
        $this->load->view('header', $data);
        $this->load->view('acceuil');
        $this->load->view('footer');
    }

    public function inscription(){
        $this->load->view('header');
        $this->load->view('inscription');
        $this->load->view('footer');
    }
}