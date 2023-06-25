<?php

class MarriageRegistration extends Controller{

    public function index(){

        if(isset($_SESSION['user_id'])){
            $data['title'] = 'Marriage Register';
            $this->view('/Template/header', $data);
            $this->view('Manage MarriageRegistration/UserViewMarriageRegistration', $data);
            $this->view('/Template/footer');
        } else {
            header('Location: ' . BASEURL . '/LogIn');
        }
    }

    public function ApplyMarriageRegistration(){

        if(isset($_SESSION['user_id'])){
        $data['title'] = 'Marriage Register';
        $this->view('/Template/header', $data);
        $this->view('Manage MarriageRegistration/UserApplyMarriageRegistration', $data);
        $this->view('/Template/footer');
        } else {
            header('Location: ' . BASEURL . '/LogIn');
        }
    }


    public function EditMarriageRegistration(){

        if(isset($_SESSION['user_id'])){
        $data['title'] = 'Marriage Register';
        $this->view('/Template/header', $data);
        $this->view('Manage MarriageRegistration/UserEditMarriageRegistration', $data);
        $this->view('/Template/footer');
        } else {
            header('Location: ' . BASEURL . '/LogIn');
        }
    }
}


?>