<?php

class Mahasiswa extends Controller {
    public function index(){
        $data['title'] = 'Mahasiswa page';
        $data['mhs'] = $this->model('Mahasiswa_Model')->getAllMahasiswa();
        $this->view('/Template/header', $data);
        $this->view('Mahasiswa/index', $data);
        $this->view('/Template/footer');
    } 

    public function detail($ID){
        $data['title'] = 'Details Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_Model')->getMahasiswaByID($ID);
        $this->view('/Template/header', $data);
        $this->view('Mahasiswa/detail', $data);
        $this->view('/Template/footer');
    }

    public function AddInfo(){

        if ( $this->model('Mahasiswa_model')->addMahasiswa($_POST) > 0){
            header('Location: ' . BASEURL . '/Mahasiswa');
            exit;
        }
    }
    
}
    
?>