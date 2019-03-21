<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

	public function login_user()
	{
		return $this->db
					->where('username',$this->input->post('username'))
					->where('password',md5($this->input->post('password')))
					->get('user');
    }
    
    public function reg()
    {
        $object= array(
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('password')),
            'id_level' => 2
        );

        return $this->db->insert('user', $object);
    }

}

/* End of file M_user.php */
/* Location: ./application/models/M_user.php */