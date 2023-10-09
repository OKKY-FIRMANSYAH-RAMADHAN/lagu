<?php

class Genre_M extends CI_Model
{
    function get_genre()
    {
        return $this->db->get('okky_genre_lagu')->result();
    }

    function insert_genre($data)
    {
        $this->db->insert('okky_genre_lagu', $data);
    }

    function get_one($idGenre)
    {
        return $this->db->get_where('okky_genre_lagu', array('idGenre' => $idGenre))->result();
    }

    function update($idGenre, $data)
    {
        $this->db->where('idGenre', $idGenre);
        $this->db->update('okky_genre_lagu', $data);
    }

    function delete($idGenre)
    {
        $this->db->where('idGenre', $idGenre);
        $this->db->delete('okky_genre_lagu');
    }
}
