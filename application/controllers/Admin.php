<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        cek_login();
    }
    public function index()
    {

        $data = [
            'judul' => 'Data Kos',
            'user' => $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array(),
            'kos' => $this->ModelKos->getKosWhere('kos', ['user_id' => $this->session->userdata('id_user')])->result_array(),
            'kategori' => $this->ModelKos->getKategori()->result_array(),


        ];

        $this->load->view('templates/templates-admin/header', $data);
        $this->load->view('templates/templates-admin/sidebar', $data);
        $this->load->view('templates/templates-admin/topbar', $data);
        $this->load->view('admin/dashboard', $data);
        $this->load->view('templates/templates-admin/footer');
    }
    public function dataKos()
    {


        $data = [
            'judul' => 'Data Kos',
            'user' => $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array(),
            // 'kos' => $this->ModelKos->getKosWhere('kos', ['user_id' => $this->session->userdata('id_user')])->result_array(),
            'kos' => $this->ModelKos->dataKos()->result_array(),
            'kategori' => $this->ModelKos->getKategori()->result_array(),
        ];

        $this->load->view('templates/templates-admin/header', $data);
        $this->load->view('templates/templates-admin/sidebar', $data);
        $this->load->view('templates/templates-admin/topbar', $data);
        $this->load->view('admin/daftar_kos', $data);
        $this->load->view('templates/templates-admin/footer');
    }
    public function tambahKos()
    {
        $data['judul'] = 'Dashboard';
        $data['judul'] = 'Data Kos';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['kos'] = $this->ModelKos->getKos()->result_array();
        $data['kategori'] = $this->ModelKos->getKategori()->result_array();
        $data['id_user'] = $this->ModelUser->getUser()->result_array();
        $data['fasilitas'] = $this->ModelKos->getFasilitas()->result_array();



        $this->form_validation->set_rules('headline', 'Headline', 'required|min_length[3]', [
            'required' => 'Judul Buku harus diisi',
            'min_length' => 'Judul buku terlalu pendek'
        ]);


        // konfigurasi sebelum gambar diupload
        $config['upload_path'] = './assets/image/upload/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '300000';
        $config['max_width'] = '102400';
        $config['max_height'] = '100000';
        $config['file_name'] = 'img' . time();

        $this->load->library('upload', $config);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/templates-admin/header', $data);

            $this->load->view('templates/templates-admin/sidebar', $data);
            $this->load->view('templates/templates-admin/topbar', $data);
            $this->load->view('admin/index', $data);
            $this->load->view('templates/templates-admin/footer');
        } else {
            if ($this->upload->do_upload('gambar')) {
                $gambar = $this->upload->data();
                $gambar = $gambar['file_name'];
            } else {
                $gambar = 'logo.png';
            }

            $data = [
                'kategori' => $this->input->post('kategori', true),
                'user_id' => $this->input->post('user_id', true),
                'headline' => $this->input->post('headline', true),
                'kota' => $this->input->post('kota', true),
                'alamat' => $this->input->post('alamat', true),
                'harga' => $this->input->post('harga', true),
                'deskripsi' => $this->input->post('deskripsi', true),
                'tersedia' => $this->input->post('tersedia', true),
                'gambar' => $gambar
            ];

            $this->ModelKos->simpanKos($data);
            redirect('admin/fasilitas');
        }
    }
    public function fasilitas()
    {

        $data['judul'] = 'Data Fasilitas';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['kos'] = $this->ModelKos->getKos()->result_array();
        $data['kategori'] = $this->ModelKos->getKategori()->result_array();
        $data['id_user'] = $this->ModelUser->getUser()->result_array();
        $data['fasilitas'] = $this->ModelKos->getFasilitas()->result_array();


        $this->form_validation->set_rules('kos_id', 'Kos_id', 'required|min_length[0]', [
            'required' => 'Judul Buku harus diisi',
            'min_length' => 'Judul buku terlalu pendek'
        ]);


        //konfigurasi sebelum gambar diupload
        // $config['upload_path'] = './assets/image/upload/';
        // $config['allowed_types'] = 'jpg|png|jpeg';
        // $config['max_size'] = '3000';
        // $config['max_width'] = '1024';
        // $config['max_height'] = '1000';
        // $config['file_name'] = 'img' . time();

        // $this->load->library('upload', $config);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/templates-admin/header', $data);
            $this->load->view('templates/templates-admin/sidebar', $data);
            $this->load->view('templates/templates-admin/topbar', $data);
            $this->load->view('admin/fasilitas', $data);
            $this->load->view('templates/templates-admin/footer');
        } else {


            $data = [
                'kos_id' => $this->input->post('kos_id', true),
                'wifi' => $this->input->post('wifi', true),
                'ac' => $this->input->post('ac', true),
                'kasur' => $this->input->post('kasur', true),
                'dapur' => $this->input->post('dapur', true),
                'kipas' => $this->input->post('kipas', true),

            ];

            $this->ModelKos->simpanFasilitas($data);
            redirect('admin/dataKos');
        }
    }
    public function pemilik()
    {
        $data = [
            'judul' => 'Data Pemilik',
            'pemilik' => $this->ModelUser->getUserWhere(['id_role' => 2])->result_array(),
            'user' => $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array()
        ];
        $this->load->view('templates/templates-admin/header', $data);
        $this->load->view('templates/templates-admin/sidebar', $data);
        $this->load->view('templates/templates-admin/topbar', $data);
        $this->load->view('admin/daftar_pemilik', $data);
        $this->load->view('templates/templates-admin/footer');
    }
    public function pencari()
    {
        $data = [
            'judul' => 'Data Pemilik',
            'pencari' => $this->ModelUser->getUserWhere(['id_role' => 3])->result_array(),
            'user' => $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array()
        ];
        $this->load->view('templates/templates-admin/header', $data);
        $this->load->view('templates/templates-admin/sidebar', $data);
        $this->load->view('templates/templates-admin/topbar', $data);
        $this->load->view('admin/daftar_pencari', $data);
        $this->load->view('templates/templates-admin/footer');
    }
    public function hapusKos()
    {
        $where = ['id_kos' => $this->uri->segment(3)];
        $this->ModelKos->deleteKos($where);
        redirect('admin/dataKos');
    }
    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('id_role');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Anda telah logout!!</div>');
        redirect('home');
    }
}
