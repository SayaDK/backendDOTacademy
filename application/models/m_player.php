<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class m_player extends CI_Model {

    public function player_count()
  {
      return $this->db->get('player')->num_rows();
  }

  public function get_team()
  {
    return $this->db->get('team')->result();
  }

  public function get_ppg()
  {
    return $this->db->order_by('ppg','desc')->get('player', 5)->result(); 
  }

  public function get_apg()
  {
    return $this->db->order_by('apg','desc')->get('player', 5)->result(); 
  }

  public function get_rpg()
  {
    return $this->db->order_by('rpg','desc')->get('player', 5)->result(); 
  }

  public function get_player()
  {
    return $this->db->join('team', 'team.id_team = player.id_team')
                    ->join('nationality', 'nationality.id_nat = player.id_nat')
                    ->join('position', 'position.id_pos = player.id_pos')
                    ->get('player')->result();   
  }

  public function get_national()
  {
     return $this->db->get('nationality')->result();
      
  }
  
  public function get_position()
  {
    return $this->db->get('position')->result();
  }

    public function addPlayer()
  {
      $object= array(
          "number" => $this->input->post('number'),
          "nama_player" => $this->input->post('player_name'),
          "id_nat" => $this->input->post('nat'),
          "id_team" => $this->input->post('team'),
          "ppg" => $this->input->post('ppg'),
          "apg" => $this->input->post('apg'),
          "rpg" => $this->input->post('rpg'),
          "id_pos" => $this->input->post('pos')
      );
      
      return $this->db->insert('player', $object);
  }

  public function editPlayer($id)
  {
    $object= array(
      "number" => $this->input->post('number'),
      "nama_player" => $this->input->post('player_name'),
      "id_nat" => $this->input->post('nat'),
      "id_team" => $this->input->post('team'),
      "ppg" => $this->input->post('ppg'),
      "apg" => $this->input->post('apg'),
      "rpg" => $this->input->post('rpg'),
      "id_pos" => $this->input->post('pos')
  );    
    return $this->db->where('id_player',$id)->update('player', $object);
  }

  public function deletePlayer($id)
  {
     return $this->db->where('id_player',$id)->delete('player');
  }
  
}

/* End of file m_player.php */
?>