<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		// $data['judul'] = 'Home';

		$data = [
			'judul' => 'Home',
			'kos' => $this->ModelKos->getKos()->result(),
			'kota' => $this->ModelKos->kota(),
			'kategori' => $this->ModelKos->getKategori()->result(),
			'kost' => $this->ModelKos->getKos()->result()
		];

		if ($this->session->userdata('email')) {
			$user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
			$data['user'] = $user['nama'];
			$this->load->view('templates/templates-user/header', $data);
			$this->load->view('home/index', $data);
			$this->load->view('templates/footer');
		} else {
			$data['user'] = 'Pengunjung';
			$this->load->view('templates/templates-user/header', $data);
			$this->load->view('home/index', $data);
			$this->load->view('templates/templates-user/footer');
		}

		// $this->load->view('welcome_message');
		// $this->load->view('welcome_message');
	}
	public function detailkos()
	{
		// cek_login_pencari();
		$data = [
			'judul' => 'Detail Kos',
			'kos' => $this->ModelKos->kosFasilitas(['id_kos' => $this->uri->segment(3)])->result_array(),
			'sewa' => $this->ModelKos->userKos(['email' => $this->session->userdata('email')])->result_array(),
		];

		if ($this->session->userdata('email')) {
			$user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
			$data['user'] = $user['nama'];
			$this->load->view('templates/templates-user/header', $data);
			$this->load->view('home/detailkos', $data);
			$this->load->view('templates/footer');
		} else {
			$data['user'] = 'Pengunjung';
			$this->load->view('templates/templates-user/header', $data);
			$this->load->view('home/detailkos', $data);
			$this->load->view('templates/templates-user/footer');
		}
	}

	public function sewa_kos()
	{
		// cek_login_pencari();
		$user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();

		$data = [
			'judul' => 'Sewa Kos',
			'kos' => $this->ModelKos->kosWhere(['id_kos' => $this->uri->segment(3)])->result_array(),
			'sewa' => $this->ModelKos->userKos(['email' => $this->session->userdata('email')])->result_array(),
			'user' => $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->result_array()
		];


		$this->form_validation->set_rules('lama_sewa', 'Lama Sewa', 'required', [
			'required' => 'Lama Sewa Harus diisi',

		]);
		$this->form_validation->set_rules('alamat', 'Alamat', 'required', [
			'required' => 'Alamat Harus diisi',

		]);
		if ($this->form_validation->run() == false) {
			// if ($this->session->userdata('email')) {
			// 	// $user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
			// 	// $data['user'] = $user['nama'];
			$this->load->view('templates/templates-user/header_sewa', $data);
			$this->load->view('home/form_sewa', $data);
			$this->load->view('templates/footer');
			// } else {
			// 	$data['user'] = 'Pengunjung';
			// 	$this->load->view('templates/templates-user/header', $data);
			// 	$this->load->view('form_sewa', $data);
			// 	$this->load->view('templates/templates-user/footer');

			// }
		} else {
			$sewa = $this->ModelKos->sewaUser(['id_sewa' => $this->uri->segment(3)])->result_array();
			$harga = $this->input->post('harga', true);
			$lama = $this->input->post('lama_sewa', true);
			$total = $harga * $lama;
			$data = [
				// 'id_sewa' => $this->ModelKos->kodeOtomatis('sewa', 'id_sewa'),
				'id_user' => $this->input->post('id_user', true),
				'id_kos' => $this->input->post('id_kos', true),
				'nama' => $this->input->post('nama', true),
				'email' => $this->input->post('email', true),
				'alamat' => $this->input->post('alamat', true),
				'no_hp' => $this->input->post('no_hp', true),
				'harga' => $this->input->post('harga', true),
				'lama_sewa' => $this->input->post('lama_sewa', true),
				'total_harga' => $total
			];
			$this->ModelKos->sewa($data);
			$this->session->set_userdata($data);
			redirect('home/invoice');
		}
	}
	public function invoice()
	{
		// $is = $this->uri->segment(3);
		$data = [
			'judul' => 'Sewa Kos',
			'user' => $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->result_array(),
			'sewa' => $this->ModelKos->getsewa(['id_user' => $this->session->userdata('id_user')])->result()
			// 'sewa' => $this->db->get('sewa')
		];
		$this->load->view('templates/templates-user/header_sewa', $data);
		$this->load->view('sewa/invoice', $data);
		// $this->load->view('templates/footer');
	}
	public function detail_invoice()
	{
		// $is = $this->uri->segment(3);
		$data = [
			'judul' => 'Sewa Kos',
			'user' => $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->result_array(),
			'sewa' => $this->ModelKos->sewaUser(['id_sewa' => $this->uri->segment(3)])->result()
			// 'sewa' => $this->db->get('sewa')
		];
		$this->load->view('templates/templates-user/header_sewa', $data);
		$this->load->view('sewa/index', $data);
		$this->load->view('templates/footer');
	}
	public function lihatkos()
	{
		$data = [
			'judul' => 'Lihat Kost',
			'kos' => $this->ModelKos->getKos()->result(),
			'kota' => $this->ModelKos->kota(),
			'kategori' => $this->ModelKos->getKategori()->result(),
			'kost' => $this->ModelKos->getKosLimit()->result()
		];
		if ($this->session->userdata('email')) {
			$user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
			$data['user'] = $user['nama'];
		}
		$this->load->view('templates/templates-user/header', $data);
		$this->load->view('home/lihatkos', $data);
		$this->load->view('templates/templates-user/footer');
	}
	public function exportToPdf()
	{
		$id_user = $this->session->userdata('id_user');
		$data['user'] = $this->session->userdata('nama');
		$data['judul'] = "Cetak Bukti Booking";
		$data['useraktif'] = $this->ModelUser->cekData(['id_user' => $this->session->userdata('id_user')])->result();
		$data['items'] = $this->ModelKos->sewaKos(['id_sewa' => $this->uri->segment(3)])->result_array();

		// $this->load->library('dompdf_gen');
		$sroot = $_SERVER['DOCUMENT_ROOT'];
		include $sroot . "/bapakos1/application/third_party/dompdf/autoload.inc.php";
		$dompdf = new Dompdf\Dompdf();
		$this->load->view('sewa/bukti-pdf', $data);
		$paper_size = 'A4'; // ukuran kertas
		$orientation = 'potrait'; //tipe format kertas potrait atau landscape
		$html = $this->output->get_output();
		$dompdf->set_paper($paper_size, $orientation);
		//Convert to PDF
		$dompdf->load_html($html);
		$dompdf->render();
		$dompdf->stream("bukti-booking-$id_user.pdf", array('Attachment' => 0));
		// nama file pdf yang di hasilkan

	}
}
