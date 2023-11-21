<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Presiden extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Presiden_model');
        // $this->load->model('Prodi_model');
    }
    public function index()
    {
        $data['judul'] = 'Halaman Calon Presiden';
        $data['presiden'] = $this->Presiden_model->get();
        $this->load->view("layout/header");
        $this->load->view("presiden/vw_presiden", $data);
        $this->load->view("layout/footer");
    }
    public function tambah()
    {
        $data['judul'] = 'Halaman Tambah Data Presiden';
        // $data['prodi'] = $this->Prodi_model->get();
        $this->load->view("layout/header");
        $this->load->view("presiden/vw_tambah_presiden", $data);
        $this->load->view("layout/footer");

    }
    public function detail($id)
    {
        $data['judul'] = 'Halaman detail Calon Presiden';
        $data['presiden'] = $this->Presiden_model->getbyid($id);
        $this->load->view("layout/header");
        $this->load->view("presiden/vw_detail_presiden", $data);
        $this->load->view("layout/footer");

    }

    public function hapus($id)
    {
        $this->Presiden_model->delete($id);
        redirect('presiden');
    }

    function upload()
    {
        $data = [
            'nama_lengkap' => $this->input->post('nama_lengkap'),
            'nik' => $this->input->post('nik'),
            'asal' => $this->input->post('asal'),
            'partai_pendukung' => $this->input->post('partai_pendukung'),
            'riwayat_pekerjaan' => $this->input->post('riwayat_pekerjaan'),
            'umur' => $this->input->post('umur'),
        ];
        $this->Presiden_model->insert($data);
        redirect("presiden", "refresh");
    }

    public function edit($id)
    {
        $data['judul'] = "Halaman Edit Mahasiswa";
        // $data['prodi'] = $this->Prodi_model->get();
        $data['presiden'] = $this->Presiden_model->getbyid($id);
        $this->load->view("layout/header");
        $this->load->view("presiden/vw_ubah_presiden", $data);
        $this->load->view("layout/footer");
    }

    public function update()
    {
        $data = [
            'nama_lengkap' => $this->input->post('nama_lengkap'),
            'nik' => $this->input->post('nik'),
            'asal' => $this->input->post('asal'),
            'partai_pendukung' => $this->input->post('partai_pendukung'),
            'riwayat_pekerjaan' => $this->input->post('riwayat_pekerjaan'),
            'umur' => $this->input->post('umur'),
        ];
        $id = $this->input->post('Id');
        $this->Presiden_model->update(['Id' => $id], $data);
        redirect('presiden');
    }
}