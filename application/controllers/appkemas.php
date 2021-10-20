<?php 

class Appkemas Extends CI_Controller {
    public function __contruct() {
        parent::__construct();
        $this->load->helper('url');
    }


    public function admin() {
        $data['title'] = 'Admin Page';
        $data['tbpesan'] = $this->Appmodel->tampil_pesan()->result();
        $this->load->view('template/head', $data);
        $this->load->view('template/index', $data);
        $this->load->view('template/footer', $data);
    }

    public function user() {
        $data['title'] = 'User Page';
        $data['tbevent'] = $this->Appmodel->tampil_event()->result();
        $this->load->view('template/head', $data);
        $this->load->view('user', $data);
        $this->load->view('template/footer');
    }

    public function lihat_event() {
        
        $data['title'] = 'List Acara';
        $data['tbevent'] = $this->Appmodel->tampil_event()->result();
        $this->load->view('template/head', $data);
        $this->load->view('tampil_event', $data);
        $this->load->view('template/footer', $data);
    }

    public function lihat_eventuser() {
        $data['title'] = 'List Acara';
        $data['tbevent'] = $this->Appmodel->tampil_event()->result();
        $this->load->view('template/head', $data);
        $this->load->view('tampil_user', $data);
        $this->load->view('template/footer', $data);
    }

    public function buat_event() {
        $data['title'] = 'Buat Acara';
        $this->load->view('template/head', $data);
        $this->load->view('buat_event');
        $this->load->view('template/footer');
    }


    public function tambah_event() {
        $config['upload_path']          = 'assets/gambar/'; // folder upload
        $config['allowed_types']        = 'gif|jpg|jpeg|png|JPG|JPEG'; // jenis file
        $config['max_size']             = 130000; 
        $config['max_width']            = 10000; 
        $config['max_height']           = 10000; 
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('gambar')) {
            echo 'Kamu gagal upload';
        } else {
            // menampung data dari form
            $ketua_pelaksana    = $this->input->post('ketua_pelaksana');
            $penanggung_jawab      = $this->input->post('penanggung_jawab');
            $nama_kegiatan          = $this->input->post('nama_kegiatan');
            $tempat          = $this->input->post('tempat');
            $hari          = $this->input->post('hari');
            $tanggal          = $this->input->post('tanggal');
            $waktu          = $this->input->post('waktu');
            $anggaran          = $this->input->post('anggaran');
            $deskripsi          = $this->input->post('deskripsi');
            $file           = $this->upload->data();
            $gambar         = $file['file_name'];

            $this->Appmodel->input_data(array(
                            'ketua_pelaksana'   => $ketua_pelaksana,
                            'penanggung_jawab'   => $penanggung_jawab,
                            'nama_kegiatan'   => $nama_kegiatan,
                            'tempat'   => $tempat,
                            'hari'   => $hari,
                            'tanggal'   => $tanggal,
                            'waktu'   => $waktu,
                            'anggaran'   => $anggaran,
                            'deskripsi'   => $deskripsi,
                            'gambar'   => $gambar
                            ));
            redirect ('appkemas/lihat_event');
        }
    }

    public function input_pesan() {
        $data=array(
            'nama'=>$this->input->post('nama', true),
            'email'=>$this->input->post('email', true),
            'subjek'=>$this->input->post('subjek', true),
            'pesan'=>$this->input->post('pesan', true)
        );
        $insert=$this->Appmodel->insert_pesan('tbpesan', $data);
        if($insert>0) {
            redirect('appkemas/user');
        }
        else {
            echo "Menyimpan Gagal!";
        }
    }

    public function hapus($id) {
        $this->Appmodel->hapus($id);
        redirect('appkemas/lihat_event');
    }

    public function edit_event($id) {
        $data['title'] = 'Edit Acara';
        $where = array ('id' => $id);
        $data['tbevent'] = $this->Appmodel->edit_data($where, 'tbevent')->result();
        $this->load->view('template/head', $data);
        $this->load->view('edit_event', $data);
        $this->load->view('template/footer');
    }

    public function update() {
        $config['upload_path']          = 'assets/gambar/'; // folder upload
        $config['allowed_types']        = 'gif|jpg|jpeg|png|JPG|JPEG'; // jenis file
        $config['max_size']             = 130000; 
        $config['max_width']            = 10000; 
        $config['max_height']           = 10000; 
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('gambar')) {
            echo 'Kamu gagal upload';
        } else {
            // menampung data dari form
            $id = $this->input->post('id');
            $ketua_pelaksana    = $this->input->post('ketua_pelaksana');
            $penanggung_jawab      = $this->input->post('penanggung_jawab');
            $nama_kegiatan          = $this->input->post('nama_kegiatan');
            $tempat          = $this->input->post('tempat');
            $hari          = $this->input->post('hari');
            $tanggal          = $this->input->post('tanggal');
            $waktu          = $this->input->post('waktu');
            $anggaran          = $this->input->post('anggaran');
            $deskripsi          = $this->input->post('deskripsi');
            $file           = $this->upload->data();
            $gambar         = $file['file_name'];

            $data = array(
                            'ketua_pelaksana'   => $ketua_pelaksana,
                            'penanggung_jawab'   => $penanggung_jawab,
                            'nama_kegiatan'   => $nama_kegiatan,
                            'tempat'   => $tempat,
                            'hari'   => $hari,
                            'tanggal'   => $tanggal,
                            'waktu'   => $waktu,
                            'anggaran'   => $anggaran,
                            'deskripsi'   => $deskripsi,
                            'gambar'   => $gambar
                            );

            $where = array ('id' => $id);
            $this->Appmodel->update_data($where,$data,'tbevent');
            redirect ('appkemas/lihat_event');
        }
    }

    public function detail($id) {
        $data['title'] = 'Detail Acara';
        $this->load->model('Appmodel');
        $detail = $this->Appmodel->detail_data($id);
        $data['detail'] = $detail;
        $where = array ('id' => $id);
        $data['tbevent'] = $this->Appmodel->edit_data($where, 'tbevent')->result();
        $this->load->view('template/head', $data);
        $this->load->view('detail_event', $data);
        $this->load->view('template/footer');
    }

    public function detail_user($id) {
        $data['title'] = 'Detail Acara';
        $this->load->model('Appmodel');
        $detail = $this->Appmodel->detail_data($id);
        $data['detail'] = $detail;
        $where = array ('id' => $id);
        $data['tbevent'] = $this->Appmodel->edit_data($where, 'tbevent')->result();
        $this->load->view('template/head', $data);
        $this->load->view('detail_event2', $data);
        $this->load->view('template/footer');
    }

    public function detail_pesan($id) {
        $data['title'] = 'Detail Pesan&Saran';
        $this->load->model('Appmodel');
        $detail_pesan = $this->Appmodel->detail_pesan($id);
        $data['detail_pesan'] = $detail_pesan;
        $where = array ('id' => $id);
        $this->load->view('template/head', $data);
        $this->load->view('detail_pesan', $data);
        $this->load->view('template/footer');
    }

    public function hapus_pesan($id) {
        $this->Appmodel->hapus_pesan($id);
        redirect('appkemas/admin');
    }



}