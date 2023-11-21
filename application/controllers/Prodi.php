<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prodi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Prodi_model');
    }
    function index()
    {
        $data['judul'] = "Halaman Prodi";
        $data['user'] = $this->db->get_where("user", ['email' => $this->session->userdata('email')])->row_array();
        $data['prodi'] = $this->Prodi_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("prodi/vw_prodi", $data);
        $this->load->view("layout/footer", $data);
    }

    public function tambahP()
    {
        $data['judul'] = "Halaman Tambah Prodi";
        $data['user'] = $this->db->get_where("user", ['email' => $this->session->userdata('email')])->row_array();
        $data["prodi"] = $this->Prodi_model->get();

        $this->form_validation->set_rules('nama', 'Nama Prodi', 'required', ['required' => 'Nama Prodi Wajib di isi']);
        $this->form_validation->set_rules('ruangan', 'Ruangan', 'required|integer', ['integer' => 'Ruangan Prodi Wajib di isi']);
        $this->form_validation->set_rules('jurusan', 'Jurusan', 'required', ['required' => 'Jurusan Wajib di isi']);
        $this->form_validation->set_rules('akreditasi', 'Akreditasi', 'required', ['required' => 'Akreditasi Wajib di isi']);
        $this->form_validation->set_rules('nama_kaprodi', 'Nama Kaprodi', 'required', ['required' => 'Nama Kaprodi Wajib di isi']);
        $this->form_validation->set_rules('tahun_berdiri', 'Tahun Berdiri', 'required', ['required' => 'Tahun Berdiri Wajib di isi Angka']);
        $this->form_validation->set_rules('output_lulusan', 'Output Lulusan', 'required', ['required' => 'Output Lulusan Wajib Di Isi']);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("prodi/vw_tambah_prodi", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'ruangan' => $this->input->post('ruangan'),
                'jurusan' => $this->input->post('jurusan'),
                'akreditasi' => $this->input->post('akreditasi'),
                'nama_kaprodi' => $this->input->post('nama_kaprodi'),
                'tahun_berdiri' => $this->input->post('tahun_berdiri'),
                'output_lulusan' => $this->input->post('output_lulusan')
            ];

            $this->Prodi_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Prodi Berhasil Ditambah!</div>');
            redirect("Prodi");
        }
    }
    public function detail($id)
    {
        $data['judul'] = 'Halaman detail Mahasiswa';
        $data['Prodi'] = $this->Prodi_model->getById($id);
        $this->load->view("layout/header");
        $this->load->view("prodi/vw_detail_prodi", $data);
        $this->load->view("layout/footer");

    }
    public function hapus($id)
    {
        $error = $this->Prodi_model->delete($id);

        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon fas fa-info-circle"></i> Data Prodi tidak dapat dihapus (sudah berelasi)!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-check-circle"></i> Data Prodi Berhasil Dihapus!</div>');
        }

        redirect('Prodi');
    }


    public function edit($id)
    {
        $data['judul'] = "Halaman Edit Prodi";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['prodi'] = $this->Prodi_model->getById($id);

        $this->form_validation->set_rules('nama', 'Nama Mahasiswa', 'required', ['required' => 'Nama Prodi Wajib di isi']);
        $this->form_validation->set_rules('ruangan', 'Ruangan', 'required', ['required' => 'Ruangan Prodi Wajib di isi']);
        $this->form_validation->set_rules('jurusan', 'jurusan', 'required', ['required' => 'Jurusan Wajib di isi']);
        $this->form_validation->set_rules('akreditasi', 'Akreditasi', 'required', ['required' => 'Akreditasi Prodi Wajib di isi']);
        $this->form_validation->set_rules('nama_kaprodi', 'Nama Kaprodi', 'required', ['required' => 'Nama Kaprodi Wajib di isi']);
        $this->form_validation->set_rules('tahun_berdiri', 'Tahun Berdiri', 'required|numeric', ['required' => 'Tahun Berdiri Prodi Wajib di isi', 'numeric' => 'Tahun harus Angka']);
        $this->form_validation->set_rules('output_lulusan', 'Output Lulusan', 'required', ['required' => 'Output Lulusan Prodi Wajib di isi']);


        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("prodi/vw_ubah_prodi", $data);
            $this->load->view("layout/footer");
        } else {
            $update_data = [
                'nama' => $this->input->post('nama'),
                'ruangan' => $this->input->post('ruangan'),
                'jurusan' => $this->input->post('jurusan'),
                'akreditasi' => $this->input->post('akreditasi'),
                'nama_kaprodi' => $this->input->post('nama_kaprodi'),
                'tahun_berdiri' => $this->input->post('tahun_berdiri'),
                'output_lulusan' => $this->input->post('output_lulusan')
            ];

            $this->Prodi_model->update(['id' => $id], $update_data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Prodi Berhasil Diubah!</div>');
            redirect("Prodi");
        }
    }
}