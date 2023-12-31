<?php

class LaguController extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Lagu_M');
        $this->load->model('Genre_M');
    }

    function index()
    {
        $data['judul'] = "List Data Lagu";
        $data['lagu'] = $this->Lagu_M->get_lagu();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('lagu/v_lagu', $data);
        $this->load->view('template/footer');
    }

    function insert()
    {
        if ($this->input->post()) {
            $data_input_user = $this->input->post();
            $this->Lagu_M->insert_lagu($data_input_user);
            redirect('/');
        } else {
            $data['judul'] = "Input Data Lagu";
            $data['genre'] = $this->Genre_M->get_genre();
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('lagu/v_form', $data);
            $this->load->view('template/footer');
        }
    }

    public function update($idLagu)
    {
        if ($this->input->post()) {
            $update_data = $this->input->post();
            $this->Lagu_M->update($idLagu, $update_data);
            redirect('/');
        } else {
            $data['judul'] = "Update Data Lagu";
            $data['lagu'] = $this->Lagu_M->get_one($idLagu);
            $data['genre'] = $this->Genre_M->get_genre();
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('lagu/v_update', $data);
            $this->load->view('template/footer');
        }
    }

    function delete($idLagu)
    {
        $this->Lagu_M->delete($idLagu);
        redirect('/');
    }
}
