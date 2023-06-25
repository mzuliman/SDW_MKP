<?php

class Home extends Controller{

    public function index(){

        if(isset($_SESSION['user_id'])){
            $data['title'] = 'Homepage';
            $this->view('/Template/headerHomepage', $data);
            $this->view('Home/index', $data);
            $this->view('/Template/footer');
        } else {
            header('Location: ' . BASEURL . '/LogIn');
        }

    }

}
?>