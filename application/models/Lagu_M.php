<?php

class Lagu_M extends CI_Model
{
    function get_lagu()
    {
        // $sql = "SELECT * FROM okky_lagu";
        // $data = $this->db->query($sql);
        // return $data->result();
        $this->db->select('*');
        $this->db->from('okky_lagu');
        $this->db->join('okky_genre_lagu', 'okky_genre_lagu.idGenre = okky_lagu.genre');
        return $this->db->get()->result();
    }

    function insert_lagu($data)
    {
        // $sql = "INSERT INTO okky_lagu VALUES ('',?,?,?,?,?,?)";
        // $this->db->query($sql, array($data['judul'], $data['penyanyi'], $data['tahun'], $data['genre'], $data['album'], $data['durasi']));
        $this->db->insert('okky_lagu', $data);
    }

    function get_one($idLagu)
    {
        // $sql = "SELECT * FROM okky_lagu WHERE idLagu = ?";
        // $data = $this->db->query($sql, array($idLagu));
        // return $data->result();
        $this->db->select('*');
        $this->db->from('okky_lagu');
        $this->db->join('okky_genre_lagu', 'okky_genre_lagu.idGenre = okky_lagu.genre');
        $this->db->where('idLagu', $idLagu);
        return $this->db->get()->result();
    }

    function update($idLagu, $data)
    {
        // $sql = "UPDATE okky_lagu 
        //         SET judul = ?, penyanyi = ?, tahun = ? ,genre = ?, album = ?, durasi = ?
        //         WHERE idLagu = ?";
        // $this->db->query($sql, array($data['judul'], $data['penyanyi'], $data['tahun'], $data['genre'], $data['album'], $data['durasi'], $idLagu));
        $this->db->where('idLagu', $idLagu);
        $this->db->update('okky_lagu', $data);
    }

    function delete($idLagu)
    {
        // $sql = "DELETE FROM okky_lagu WHERE idLagu = ?";
        // $this->db->query($sql, array($idLagu));
        $this->db->where('idLagu', $idLagu);
        $this->db->delete('okky_lagu');
    }
}
