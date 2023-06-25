<?php

class MarriageApplication extends Controller{

    public function index(){

        if(isset($_SESSION['user_id'])){
            $data['title'] = 'Marriage Application';
            $this->view('/Template/header', $data);
            $this->view('Manage MarriageApplication/UserApplyMarriageApplicationInterface1', $data);
            $this->view('/Template/footer');
        } else {
            header('Location: ' . BASEURL . '/LogIn');
        }
 
    }

    public function page2(){

        if(isset($_SESSION['user_id'])){
            $data['title'] = 'Marriage Application';
            $this->view('/Template/header', $data);
            $this->view('Manage MarriageApplication/UserApplyMarriageApplicationInterface2', $data);
            $this->view('/Template/footer');
        } else {
            header('Location: ' . BASEURL . '/LogIn');
        }


    }

    public function page3(){

        if(isset($_SESSION['user_id'])){
            $data['title'] = 'Marriage Application';
            $this->view('/Template/header', $data);
            $this->view('Manage MarriageApplication/UserApplyMarriageApplicationInterface3', $data);
            $this->view('/Template/footer');
        } else {
            header('Location: ' . BASEURL . '/LogIn');
        }

    }

    public function page4(){

        if(isset($_SESSION['user_id'])){
            $data['title'] = 'Marriage Application';
            $this->view('/Template/header', $data);
            $this->view('Manage MarriageApplication/UserApplyMarriageApplicationInterface4', $data);
            $this->view('/Template/footer');
        } else {
            header('Location: ' . BASEURL . '/LogIn');
        }



    }


}


?>