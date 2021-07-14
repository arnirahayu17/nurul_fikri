<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Login extends CI_Controller {  
      
    public function index()  
    {  
        $this->load->view('layouts/header');
        $this->load->view('login/index'); 
        $this->load->view('layouts/footer'); 
    }  
    public function process()  
    {  
        $user = $this->input->post('user');  
        $pass = $this->input->post('pass');  
        if ($user=='adminloker' && $pass=='admin')   
        {  
            //declaring session  
            $this->session->set_userdata(array('user'=>$user)); 
            $this->load->view('layouts/header'); 
            $this->load->view('admin/index');  
            $this->load->view('layouts/footer'); 
        }  
        else{  
            $data['error'] = 'Username atau Password Salah ! ';
            $this->load->view('layouts/header');
            $this->load->view('login/index', $data);  
            $this->load->view('layouts/footer'); 
        }  
    }  
    public function logout()  
    {  
        //removing session  
        $this->session->unset_userdata('user');  
        redirect("login/index");  
    }  
  
}  
?>  