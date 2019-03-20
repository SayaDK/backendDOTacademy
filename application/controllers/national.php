<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class national extends CI_Controller {

    public function index()
    {
        $data['konten']="v_teams";
        $data['title']="Teams";
        $data['aktif']=["","","","active"];
        $this->load->view('index', $data);
        
    }

}

/* End of file national.php */
?>