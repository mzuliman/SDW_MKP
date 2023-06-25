<?php

class PreCourse extends Controller{

    public function index(){

        if(isset($_SESSION['user_id'])){
            $data['title'] = 'Kursus Pra-Perkahwinan';
            $this->view('/Template/header', $data);
            $this->view('Manage PreCourse/UserPreCourseMainpageInterface', $data);
            $this->view('/Template/footer');
        } else {
            header('Location: ' . BASEURL . '/LogIn');
        }



    }

    public function PreCourseApply(){


        if(isset($_SESSION['user_id'])){
            $data['title'] = 'Daftar Kursus';
            $this->view('/Template/header', $data);
            $this->view('Manage PreCourse/UserApplyPreCourseInterface', $data);
            $this->view('/Template/footer');
        } else {
            header('Location: ' . BASEURL . '/LogIn');
        }



    }

    public function PreCourseView(){

        if(isset($_SESSION['user_id'])){
            $data['title'] = 'Kursus Pra-Perkahwinan';
            $this->view('/Template/header', $data);
            $this->view('Manage PreCourse/UserViewPreCourseInterface', $data);
            $this->view('/Template/footer');
    
        } else {
            header('Location: ' . BASEURL . '/LogIn');
        }

 
    }

    public function addPrecourse(){

        $data['title'] = 'Kursus Pra-Perkahwinan';
        $this->view('/Template/header', $data);
        $this->view('StaffView/StaffAddPrecourse', $data);
        $this->view('/Template/footer');

    }

    public function addPrecourseInfo(){

        $data['title'] = 'Kursus Pra-Perkahwinan';
        $this->view('/Template/header', $data);
        $this->view('StaffView/StaffAddPrecourseInformation', $data);
        $this->view('/Template/footer');

    }
    
}


?>