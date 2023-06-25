<?php

class MarriageCard extends Controller{

    public function index(){

        if(isset($_SESSION['user_id'])){
            $data['title'] = 'Marriage Card & Certificate';
            $this->view('/Template/header', $data);
            $this->view('Manage MarriageCard/UserApplyMarriageCardCertificate', $data);
            $this->view('/Template/footer');
        } else {
            header('Location: ' . BASEURL . '/LogIn');
        }
    }
}


?>