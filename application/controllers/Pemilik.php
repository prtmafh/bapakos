<?php
class Pemilik extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        // $this->load->model('Pemilik_model');
    }
    public function index()
    {
        //jika statusnya sudah login, maka tidak bisa mengakses halaman login alias dikembalikan ke tampilan user
        if ($this->session->userdata('email')) {
            redirect('pemilik/pemilik');
        }
        $this->form_validation->set_rules('email', 'Alamat Email', 'required|trim|valid_email', [
            'required' => 'Email Harus diisi!!',
            'valid_email' => 'Email Tidak Benar!!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim', [
            'required' => 'Password Harus diisi'
        ]);
        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Login';
            $data['user'] = '';
            //kata 'login' merupakan nilai dari variabel judul dalam array $data dikirimkan ke view aute_header
            $this->load->view('autentifikasi/pemilik/header', $data);
            $this->load->view('autentifikasi/pemilik/login');
            $this->load->view('autentifikasi/pemilik/footer');
        } else {
            $this->_login();
        }
    }
    private function _login()
    {
        $email = htmlspecialchars($this->input->post('email', true));
        $password = $this->input->post('password', true);
        $user = $this->ModelUser->cekData(['email' => $email])->row_array();
        //jika usernya ada
        if ($user) {
            //jika user sudah aktif
            if ($user['is_active'] == 1) {
                //cek password
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'id_role' => $user['id_role'],
                        'id_user' => $user['id_user']
                    ];
                    $this->session->set_userdata($data);
                    redirect('pemilik/pemilik');
                } else {
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">Password salah!!</div>');
                    redirect('pemilik');
                }
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">User belum diaktifasi!!</div>');
                redirect('pemilik');
            }
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">Email tidak terdaftar!!</div>');
            redirect('pemilik');
        }
    }
    public function registrasi()
    {
        if ($this->session->userdata('email')) {
            redirect('pemilik');
        }
        //membuat rule untuk inputan nama agar tidak boleh kosong dengan membuat pesan error dengan 
        //bahasa sendiri yaitu 'Nama Belum diisi'
        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required', [
            'required' => 'Nama Belum diis!!'
        ]);
        //membuat rule untuk inputan email agar tidak boleh kosong, tidak ada spasi, format email harus valid
        //dan email belum pernah dipakai sama user lain dengan membuat pesan error dengan bahasa sendiri 
        //yaitu jika format email tidak benar maka pesannya 'Email Tidak Benar!!'. jika email belum diisi,
        //maka pesannya adalah 'Email Belum diisi', dan jika email yang diinput sudah dipakai user lain,
        //maka pesannya 'Email Sudah dipakai'
        $this->form_validation->set_rules('email', 'Alamat Email', 'required|trim|valid_email|is_unique[user.email]', [
            'valid_email' => 'Email Tidak Benar!!',
            'required' => 'Email Belum diisi!!',
            'is_unique' => 'Email Sudah Terdaftar!'
        ]);
        //membuat rule untuk inputan password agar tidak boleh kosong, tidak ada spasi, tidak boleh kurang dari
        //dari 3 digit, dan password harus sama dengan repeat password dengan membuat pesan error dengan 
        //bahasa sendiri yaitu jika password dan repeat password tidak diinput sama, maka pesannya
        //'Password Tidak Sama'. jika password diisi kurang dari 3 digit, maka pesannya adalah 
        //'Password Terlalu Pendek'.
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password Tidak Sama!!',
            'min_length' => 'Password Terlalu Pendek'
        ]);
        $this->form_validation->set_rules('password2', 'Repeat Password', 'required|trim|matches[password1]');
        //jika jida disubmit kemudian validasi form diatas tidak berjalan, maka akan tetap berada di
        //tampilan registrasi. tapi jika disubmit kemudian validasi form diatas berjalan, maka data yang 
        //diinput akan disimpan ke dalam tabel user
        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Registrasi Member';
            $this->load->view('autentifikasi/pemilik/header', $data);
            $this->load->view('autentifikasi/pemilik/registrasi');
            $this->load->view('autentifikasi/pemilik/footer');
        } else {
            $email = $this->input->post('email', true);
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($email),
                'gambar' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'id_role' => 2,
                'is_active' => 1,
                'tanggal_input' => time(),
            ];
            $this->ModelUser->simpanData($data); //menggunakan model
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Selamat!! akun member anda sudah dibuat. Silahkan Aktivasi Akun anda</div>');
            redirect('pemilik');
        }
    }
    public function pemilik()
    {
        cek_login_pemilik();
        $data = [
            'judul' => 'Data Kos',
            'user' => $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array(),
            'kos' => $this->ModelKos->getKosWhere('kos', ['user_id' => $this->session->userdata('id_user')])->result_array(),
            // 'kos' => $this->ModelKos->dataKos()->result_array(),
            'kategori' => $this->ModelKos->getKategori()->result_array(),
        ];

        $this->load->view('pemilik/header', $data);
        $this->load->view('pemilik/sidebar', $data);
        $this->load->view('pemilik/topbar', $data);
        $this->load->view('pemilik/daftar_kos', $data);
        $this->load->view('pemilik/footer');
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
            $this->load->view('pemilik/sidebar', $data);
            $this->load->view('templates/templates-admin/topbar', $data);
            $this->load->view('pemilik/index', $data);
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
            redirect('pemilik/fasilitas');
        }
    }
    public function fasilitas()
    {

        $data['judul'] = 'Data Fasilitas';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['kos'] = $this->ModelKos->getKosWhere('kos', ['user_id' => $this->session->userdata('id_user')])->result_array();
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
            $this->load->view('pemilik/sidebar', $data);
            $this->load->view('templates/templates-admin/topbar', $data);
            $this->load->view('pemilik/fasilitas', $data);
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
            redirect('pemilik/pemilik');
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('id_role');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Anda telah logout!!</div>');
        redirect('home');
    }
    public function blok()
    {
        $this->load->view('autentifikasi/blok');
    }
    public function gagal()
    {
        $this->load->view('autentifikasi/gagal');
    }
}
