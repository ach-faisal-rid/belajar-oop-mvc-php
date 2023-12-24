<?php 

class Siswa extends Controller {
    public function index() {
        $data['judul'] = 'Siswa';
        $data['siswa'] = $this->model('siswa_model')->getAllSiswa();
        $this->view('theme/header-custom', $data);
        $this->view('siswa/index', $data);
        $this->view('theme/footer-custom');
    }
    public function detail($id) {
        $data['judul'] = 'Detail';
        $data['siswa'] = $this->model('siswa_model')->getSiswaById($id) ;
        $this->view('theme/header-custom', $data);
        $this->view('siswa/detail', $data);
        $this->view('theme/footer-custom');

    }
    public function tambah () {
        if($this->model('siswa_model')->tambahDataSiswa($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/siswa');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/siswa');
            exit;
        }
    }
    public function hapus($id) {
        if($this->model('siswa_model')->hapusDataSiswa($id) > 0 ) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/siswa');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/siswa');
            exit;
        }
    }
    public function getubah() {
        echo json_encode($this->model('siswa_model')->getSiswaById($_POST['id']));
    }
    public function ubah() {
        if($this->model('siswa_model')->ubahDataSiswa($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'diperbaharui', 'success');
            header('Location: ' . BASEURL . '/siswa');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diperbaharui', 'danger');
            header('Location: ' . BASEURL . '/siswa');
            exit;
        }
    }
    public function cari()
    {
        $data['judul'] = 'Daftar Siswa';
        $data['siswa'] = $this->model('siswa_model')->cariDataSiswa();
        $this->view('theme/header-custom', $data);
        $this->view('siswa/index', $data);
        $this->view('theme/footer-custom');
    }
}