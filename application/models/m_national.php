<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class m_national extends CI_Model {

    public function national_count()
    {
        return $this->db->get('nationality')->num_rows();
    }
  
    public function get_national()
    {
        return $this->db->get('nationality')->result();   
    }
    
    public function addnational()
    {
        $object= array(
            "nationality" => $this->input->post('national'),
            "abbr" => $this->input->post('abbr')
        );
        
        return $this->db->insert('nationality', $object);
    }
  
    public function editnational($id)
    {
      $object= array(
          "nationality" => $this->input->post('national'),
          "abbr" => $this->input->post('abbr'),
      );
      
      return $this->db->where('id_nat',$id)->update('nationality', $object);
    }
  
    public function deletenational($id)
    {
       return $this->db->where('id_nat',$id)->delete('nationality');
    }  

}

/* End of file m_national.php */

?>