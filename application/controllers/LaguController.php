<?php

class LaguController extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Lagu_M');
    }

    function index()
    {
        $data['judul'] = "List Data Lagu";
        $data['lagu'] = $this->Lagu_M->get_lagu();
        $this->load->view('v_lagu', $data);
    }

    function insert()
    {
        if ($this->input->post()) {
            $data_input_user = $this->input->post();
            $this->Lagu_M->insert_lagu($data_input_user);
            redirect('/');
        } else {
            $data['judul'] = "Input Data Lagu";
            $this->load->view('v_form', $data);
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
            $this->load->view('v_update', $data);
        }
    }

    function delete($idLagu)
    {
        $this->Lagu_M->delete($idLagu);
        redirect('/');
    }
}
