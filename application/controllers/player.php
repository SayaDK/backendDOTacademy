<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Player extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_player');
    }
    
    public function index()
    {
        $data['konten']="v_player";
        $data['title']="Player";
        $data['count']=$this->m_player->player_count();
        $data['national']=$this->m_player->get_national();
        $data['team']=$this->m_player->get_team();
        $data['position']=$this->m_player->get_position();
        $data['player']=$this->m_player->get_player();
        $data['aktif']=["","","active",""];
        $this->load->view('index', $data);

    }

    public function addPlayer()
    {
        $this->m_player->addPlayer();
        redirect('player','refresh');        
    }

    public function editPlayer($id)
    {
        $this->m_player->editPlayer($id);
        redirect('player','refresh');        
    }

    public function deletePlayer($id)
    {
        $this->m_player->deletePlayer($id);
        redirect('player','refresh');        
    }
}

/* End of file player.php */
?>