<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_user','user');       
    }
    
    public function index()
    {
        if($this->session->userdata('login') == NULL){
        $data['title']="Login | PPOB";
        $this->load->view('v_login', $data);
        }
        else{
            redirect('home','refresh');
        }
    }

    public function reg()
    {
        $data['title']="Register | PPOB";
        $this->load->view('v_reg', $data);
    }

    public function login()
    {
        $this->form_validation->set_rules('username', 'username', 'trim|required');
        $this->form_validation->set_rules('password', 'password', 'trim|required');

        if ($this->form_validation->run() == TRUE) {
            if($this->user->login_user()->num_rows()){
                $data=$this->user->login_user()->row();
                if($data->id_level == 1)
                {
                $array = array(
                    'login' =>"admin",
                    'nama' =>$data->username
                );
                }
                else if($data->id_level == 2)
                {
                $array = array(
                    'login' =>"user",
                    'nama' =>$data->username
                );
                }
                $this->session->set_userdata($array);
                redirect('home','refresh');               
            }
            else{
                $this->session->set_flashdata('pesan', "Username and Password doesn't exist");
                redirect('user','refresh');
            }
        } else {
            $this->session->set_flashdata('pesan', "Username and Password must be filled");
            redirect('user','refresh');
        }
        
    }

    public function register()
    {
        $this->user->reg();
        redirect('user','refresh');        
    }


    public function logout()
    {
        $this->session->sess_destroy();
        redirect('user','refresh');
    }

}

/* End of file Controllername.php */
?>