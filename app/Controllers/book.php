<?php

class book extends Controller {
    public function index() {
        $data['judul'] = 'Bookshelf';
        $data['book'] = $this->model('book_model')->getAllBook();
        $this->view('theme/header-custom', $data);
        $this->view('book/index', $data);
        $this->view('theme/footer-custom');
    }
    public function detail($id) {
        $data['judul'] = 'Detail';
        $data['book'] = $this->model('book_model')->getBookById($id) ;
        $this->view('theme/header-custom', $data);
        $this->view('book/detail', $data);
        $this->view('theme/footer-custom');
    }
    public function tambah() {
        if($this->model('book_model')->tambahDataBook($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/book');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/book');
            exit;
        }
    }
    public function hapus($id) {
        if($this->model('book_model')->hapusDataBook($id) > 0 ) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/book');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/book');
            exit;
        }
    }
}