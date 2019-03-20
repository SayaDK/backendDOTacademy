<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

    public function index()
    {
        $data['konten']="v_dashboard";
        $data['title']="Dashboard";
        $data['aktif']=["active","","",""];
        $this->load->view('index', $data);
        
    }

}

/* End of file Index.php */
?>