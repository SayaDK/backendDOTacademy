<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Player extends CI_Controller {

    public function index()
    {
        $data['konten']="v_player";
        $data['title']="Player";
        $data['aktif']=["","","active",""];
        $this->load->view('index', $data);

    }

}

/* End of file player.php */
?>