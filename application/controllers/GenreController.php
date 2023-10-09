<?php

class GenreController extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Genre_M');
    }

    function index()
    {
        $data['judul'] = "List Data Genre";
        $data['genre'] = $this->Genre_M->get_genre();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('genre/v_genre', $data);
        $this->load->view('template/footer');
    }

    function insert()
    {
        if ($this->input->post()) {
            $data_input_user = $this->input->post();
            $this->Genre_M->insert_genre($data_input_user);
            redirect('/genre');
        } else {
            $data['judul'] = "Input Data Genre";
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('genre/v_form', $data);
            $this->load->view('template/footer');
        }
    }

    public function update($idGenre)
    {
        if ($this->input->post()) {
            $update_data = $this->input->post();
            $this->Genre_M->update($idGenre, $update_data);
            redirect('/genre');
        } else {
            $data['judul'] = "Update Data Genre";
            $data['genre'] = $this->Genre_M->get_one($idGenre);
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('genre/v_update', $data);
            $this->load->view('template/footer');
        }
    }

    function delete($idGenre)
    {
        $this->Genre_M->delete($idGenre);
        redirect('/genre');
    }
}
