<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_player');
        
    }

    public function index()
    {
        if($this->session->userdata('login') != NULL){
        $data['konten']="v_dashboard";
        $data['title']="Dashboard";
        $data['count']=$this->m_player->player_count();
        $data['ppg']=$this->m_player->get_ppg();
        $data['apg']=$this->m_player->get_apg();
        $data['rpg']=$this->m_player->get_rpg();
        $data['aktif']=["active","","",""];
        $this->load->view('index', $data);
        }
        else{
            redirect('user','refresh');
        }
        
    }

}

/* End of file Index.php */
?>