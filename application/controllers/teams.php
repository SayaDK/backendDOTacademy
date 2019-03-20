<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class teams extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_teams');
    }

    public function index()
    {
        $data['konten']="v_teams";
        $data['title']="Teams";
        $data['count']=$this->m_teams->team_count();
        $data['conf']=$this->m_teams->get_conf();
        $data['teams']=$this->m_teams->get_team();
        $data['aktif']=["","active","",""];
        $this->load->view('index', $data);
    }

    public function addTeam()
    {
        $this->m_teams->addTeam();
        redirect('teams','refresh');        
    }

    public function editTeam($id)
    {
        $this->m_teams->editTeam($id);
        redirect('teams','refresh');        
    }

    public function deleteTeam($id)
    {
        $this->m_teams->deleteTeam($id);
        redirect('teams','refresh');        
    }



}

/* End of file teams.php */
?>