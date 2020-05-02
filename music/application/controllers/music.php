
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class music extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('music_model');
    }

    public function index()
    {
		$data["list_music"] = $this->music_model->view_all_data();
        $this->load->view('home',$data);
    }
    public function home()
    {
		$data["list_music"] = $this->music_model->view_all_data();
		$this->load->view('home', $data);
    }
    public function filter()
    {
        $genre              = (html_escape($this->input->post('genre')));
        if ($genre == 'all' || $genre == '') {
            $data["list_music"] = $this->music_model->view_all_data();
            $this->load->view('home', $data);
        }else{
            $data["list_music"] = $this->music_model->filter('music', 'id_genre', $genre);
            $this->load->view('home', $data);
        }
        
    }

    // buat admin manage berita
    public function master_data_music()
    {
        $data["list_music"] = $this->music_model->view_all_data();
        $this->load->view('music_view_music', $data);
    }
    public function tambah_data_music()
    {
        $this->load->view('tambah_data_music');
    }

    public function tambah_music()
    {
        // upload
        $configurasi['upload_path']          = './file-upload/';
        $configurasi['allowed_types']        = 'png|jpg|gif|jpeg|mp3|wav|mp4|mpeg|webm';
        $configurasi['max_size']             = 2000000;
        $configurasi['max_width']            = 40000;
        $configurasi['max_height']           = 40000;

        $this->load->library('upload', $configurasi);

        if (!$this->upload->do_upload('userfile')) {
            $filegambar = 'no-image.jpg';
        } else {
            $upload_data = $this->upload->data();
            $filegambar = $upload_data['file_name'];
        }

        if (!$this->upload->do_upload('userfilemusic')) {
            $filemusic = 'novideo';
        } else {
            $upload_data_music = $this->upload->data();
            $filemusic = $upload_data_music['file_name'];
        }

        $id				= (trim(html_escape($this->input->post('id'))));
        // menerima data kiriman dari fomr_tambah_data dan di simpan di berbagai variabel
        $durasi 			= (trim(html_escape($this->input->post('durasi'))));
        $genre 			= (trim(html_escape($this->input->post('genre'))));
        $singer 		= (trim(html_escape($this->input->post('singer'))));
        $deskripsi 		= (trim(html_escape($this->input->post('deskripsi'))));
        // simpan insert dengan query
        $this->music_model->tambahbarumusic($id, $filemusic, $durasi, $genre, $singer, $filegambar, $deskripsi);
        redirect('music/master_data_music');
    }

    public function arah_edit_data_music()
    {
        $id = $this->uri->segment(3);
        // untuk mengambil hasil query dari model view_per_data
        $data['data_edit'] = $this->music_model->view_per_data('music', 'id', $id);

        // lalu akan di tembak ke view form edit
        $this->load->view('edit_data_music', $data);
    }
    public function edit_music()
    {
        // upload gambar
        $configurasi['upload_path']          = './file-upload/';
        $configurasi['allowed_types']        = 'png|jpg|gif|jpeg|mp3|wav|mp4|mpeg';
        $configurasi['max_size']             = 2000000;
        $configurasi['max_width']            = 40000;
        $configurasi['max_height']           = 40000;

        $this->load->library('upload', $configurasi);

        if (!$this->upload->do_upload('userfile')) {
            $filegambar = $this->input->post('gambar');
        } else {
            $upload_data = $this->upload->data();
            $filegambar = $upload_data['file_name'];
        }

        if (!$this->upload->do_upload('userfilemusic')) {
            $filemusic = $this->input->post('musik');
        } else {
            $upload_data_music = $this->upload->data();
            $filemusic = $upload_data_music['file_name'];
        }
        $id				= (trim(html_escape($this->input->post('id'))));
        // menerima data kiriman dari fomr_tambah_data dan di simpan di berbagai variabel
        $durasi 			= (trim(html_escape($this->input->post('durasi'))));
        $genre 			= (trim(html_escape($this->input->post('genre'))));
        $singer 		= (trim(html_escape($this->input->post('singer'))));
        $deskripsi 		= (trim(html_escape($this->input->post('deskripsi'))));

        //langsung kasih ke model buat di eksekusi
        $this->music_model->editmusic($id, $filemusic, $durasi, $genre, $singer, $filegambar, $deskripsi);

        //balikin kemode crud
        redirect("music/master_data_music");
    }
    public function hapus_music()
    {
        // untuk mengambil data dari url setelah site_url lalu garing ke 3
        $id = $this->uri->segment(3);

        //eksekusi sama model
        $this->music_model->hapus('music', 'id', $id);

        //alihkan ke master data
        redirect('music/master_data_music');
    }



	// buat admin manage berita
	public function master_data_genre()
	{
		$data["list_genre"] = $this->music_model->view_all('genre');
		$this->load->view('genre_view_genre', $data);
	}
	public function tambah_data_genre()
	{
		$this->load->view('tambah_data_genre');
	}

	public function tambah_genre()
	{
		$id				= (trim(html_escape($this->input->post('id'))));
		$genre 			= (trim(html_escape($this->input->post('genre'))));
		$this->music_model->tambahbarugenre($id, $genre);
		redirect('music/master_data_genre');
	}

	public function arah_edit_data_genre()
	{
		$id = $this->uri->segment(3);
		// untuk mengambil hasil query dari model view_per_data
		$data['data_edit'] = $this->music_model->view_per_id('genre', 'id', $id);

		// lalu akan di tembak ke view form edit
		$this->load->view('edit_data_genre', $data);
	}
	public function edit_genre()
	{
		$id				= (trim(html_escape($this->input->post('id'))));
		// menerima data kiriman dari fomr_tambah_data dan di simpan di berbagai variabel
		$name 			= (trim(html_escape($this->input->post('name'))));
		//langsung kasih ke model buat di eksekusi
		$this->music_model->editgenre($id, $name);
		//balikin kemode crud
		redirect("music/master_data_genre");
	}
	public function hapus_genre()
	{
		// untuk mengambil data dari url setelah site_url lalu garing ke 3
		$id = $this->uri->segment(3);

		//eksekusi sama model
		$this->music_model->hapus('genre', 'id', $id);

		//alihkan ke master data
		redirect('music/master_data_genre');
	}


	// buat admin manage berita
	public function master_data_singer()
	{
		$data["list_singer"] = $this->music_model->view_all('singers');
		$this->load->view('singer_view_singer', $data);
	}
	public function tambah_data_singer()
	{
		$this->load->view('tambah_data_singer');
	}

	public function tambah_singer()
	{
		$id				= (trim(html_escape($this->input->post('id'))));
		$singer 			= (trim(html_escape($this->input->post('singer'))));
		$this->music_model->tambahbarusinger($id, $singer);
		redirect('music/master_data_singer');
	}

	public function arah_edit_data_singer()
	{
		$id = $this->uri->segment(3);
		// untuk mengambil hasil query dari model view_per_data
		$data['data_edit'] = $this->music_model->view_per_id('singers', 'id', $id);

		// lalu akan di tembak ke view form edit
		$this->load->view('edit_data_singer', $data);
	}
	public function edit_singer()
	{
		$id				= (trim(html_escape($this->input->post('id'))));
		// menerima data kiriman dari fomr_tambah_data dan di simpan di berbagai variabel
		$name 			= (trim(html_escape($this->input->post('name'))));
		//langsung kasih ke model buat di eksekusi
		$this->music_model->editsinger($id, $name);
		//balikin kemode crud
		redirect("music/master_data_singer");
	}
	public function hapus_singer()
	{
		// untuk mengambil data dari url setelah site_url lalu garing ke 3
		$id = $this->uri->segment(3);

		//eksekusi sama model
		$this->music_model->hapus('singers', 'id', $id);

		//alihkan ke master data
		redirect('music/master_data_singer');
	}
}
?>