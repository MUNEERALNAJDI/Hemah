<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Home_controller
 *
 * @author ahmed
 */
class Home_controller extends CI_Controller{
    //put your code here
    public function index(){
        if ($this->session->userdata('logged_in')) {
//            print_r('logged Home_controller');
            
            $this->load->model("Tasks_model");
            $data['active_tasks']=$this->Tasks_model->get_active_tasks(1);
            $data['detail_task']=$this->Tasks_model->get_detail_task(1)[0];
            
            $this->load->view('Home_view',$data);
        } else {
            redirect('Login_controller', 'refresh');
        }
    }
    
    
}