<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class national extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_national');
    }

    public function index()
    {
        $data['konten']="v_national";
        $data['title']="national";
        $data['count']=$this->m_national->national_count();
        $data['national']=$this->m_national->get_national();
        $data['aktif']=["","","","active"];
        $this->load->view('index', $data);
    }

    public function addNational()
    {
        $this->m_national->addNational();
        redirect('national','refresh');        
    }

    public function editNational($id)
    {
        $this->m_national->editNational($id);
        redirect('national','refresh');        
    }

    public function deleteNational($id)
    {
        $this->m_national->deleteNational($id);
        redirect('national','refresh');        
    }
}

/* End of file national.php */
?>