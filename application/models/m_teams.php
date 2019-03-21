<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class m_teams extends CI_Model {

    public function team_count()
  {
      return $this->db->get('team')->num_rows();
  }

  public function get_team()
  {
      return $this->db->join('team', 'team.id_conf = conference.id_conf')->get('conference')->result();   
  }

  public function get_conf()
  {
     return $this->db->get('conference')->result();
      
  }

    public function addTeam()
  {
      $object= array(
          "nama_team" => $this->input->post('team_name'),
          "abbr_team" => $this->input->post('abbr'),
          "id_conf" => $this->input->post('conf')
      );
      
      return $this->db->insert('team', $object);
  }

  public function editTeam($id)
  {
    $object= array(
        "nama_team" => $this->input->post('team_name'),
        "abbr_team" => $this->input->post('abbr'),
        "id_conf" => $this->input->post('conf')
    );
    
    return $this->db->where('id_team',$id)->update('team', $object);
  }

  public function deleteTeam($id)
  {
     return $this->db->where('id_team',$id)->delete('team');
  }
  
}

/* End of file m_teams.php */
?>