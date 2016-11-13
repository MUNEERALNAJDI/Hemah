<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login_controller extends CI_Controller {
//
//    public function index() {
//        header("Location: Login_controller/main", false);
//    }
//
    function __construct() {
        parent::__construct();
        $this->load->model('Employees_model', '', TRUE);
        $this->load->helper('security');
    }

    public function index(){
        $this->load->helper(array('form'));
        $this->load->view('Login_view');
    }
    
    function verify_login() {
        //This method will have the credentials validation
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');

        if ($this->form_validation->run() == FALSE) {
            //Field validation failed.  User redirected to login page
//            $this->load->view('Login_view');
            redirect('Login_controller', 'refresh');
        } else {
            //Go to private area
            redirect('Home_controller', 'refresh');
//            print_r('passed');
            
        }
    }

    function check_database($password) {
        //Field validation succeeded.  Validate against database
        $email = $this->input->post('email');

        //query the database
        $result = $this->Employees_model->is_valid($email, $password);

        if ($result) {
            $sess_array = array();
            foreach ($result as $row) {
                $sess_array = array(
                    'id' => $row->id,
                    'email' => $row->email
                );
                $this->session->set_userdata('logged_in', $sess_array);
            }
            return TRUE;
        } else {
            $this->form_validation->set_message('check_database', 'Invalid email or password');
            return false;
        }
    }

    function logout() {
        $this->session->unset_userdata('logged_in');
        session_destroy();
        redirect('Home_controller', 'refresh');
    }

}

?>