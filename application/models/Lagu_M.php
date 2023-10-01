<?php

class Lagu_M extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function get_lagu()
    {
        $query = $this->db->get('okky_lagu');
        return $query->result();
    }

    function insert_lagu($data)
    {
        $sql = "INSERT INTO okky_lagu VALUES ('',?,?,?,?,?,?)";
        $this->db->query($sql, array($data['judul'], $data['penyanyi'], $data['tahun'], $data['genre'], $data['album'], $data['durasi']));
    }

    function get_one($idLagu)
    {
        $sql = "SELECT * FROM okky_lagu WHERE idLagu = ?";
        $data = $this->db->query($sql, array($idLagu));
        return $data->result();
    }

    function update($idLagu, $data)
    {
        $sql = "UPDATE okky_lagu 
                SET judul = ?, penyanyi = ?, tahun = ? ,genre = ?, album = ?, durasi = ?
                WHERE idLagu = ?";
        $this->db->query($sql, array($data['judul'], $data['penyanyi'], $data['tahun'], $data['genre'], $data['album'], $data['durasi'], $idLagu));
    }

    function delete($idLagu)
    {
        $sql = "DELETE FROM okky_lagu WHERE idLagu = ?";
        $this->db->query($sql, array($idLagu));
    }
}
