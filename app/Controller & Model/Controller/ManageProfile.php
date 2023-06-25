<?php

class ManageProfile extends Controller{

    public function index(){

        if(isset($_SESSION['user_id'])){

            if($_SESSION['role'] == "ADMIN"){
                $data['title'] = 'Admin';
                $data['user'] = $this->model('User_Info')->getUserByIC($_SESSION['user_id']);
                $this->view('/Template/header', $data);
                $this->view('Manage Profile/AdminManageProfile', $data);
                $this->view('/Template/footer');
            }
            else if($_SESSION['role'] == "ADVISOR"){
                $data['title'] = 'Advisor';
                $data['user'] = $this->model('User_Info')->getUserByIC($_SESSION['user_id']);
                $this->view('/Template/header', $data);
                $this->view('Manage Profile/AdvisorProfileInterface', $data);
                $this->view('/Template/footer');
            }
            else if($_SESSION['role'] == "STAFF"){
                $data['title'] = 'Staff';
                $data['user'] = $this->model('User_Info')->getUserByIC($_SESSION['user_id']);
                $this->view('/Template/header', $data);
                $this->view('Manage Profile/StaffProfileInterface', $data);
                $this->view('/Template/footer');
            }
            else{
                $data['title'] = ' User Profile';
                $data['user'] = $this->model('User_Info')->getUserByIC($_SESSION['user_id']);
                $this->view('/Template/header', $data);
                $this->view('Manage Profile/UserProfileInterface', $data);
                $this->view('/Template/footer');
            }

        } else {
            header('Location: ' . BASEURL . '/LogIn');
        }

    }

    public function  EditProfile(){

        if(isset($_SESSION['user_id'])){

            if($_SESSION['role'] == "ADMIN"){
                $data['title'] = 'Admin';
                $this->view('/Template/header', $data);
                $this->view('Manage Profile/AdminEditProfile', $data);
                $this->view('/Template/footer');
            }
            else if($_SESSION['role'] == "ADVISOR"){
                $data['title'] = 'Advisor';
                $this->view('/Template/header', $data);
                $this->view('Manage Profile/AdvisorProfileInterface', $data);
                $this->view('/Template/footer');
            }
            else if($_SESSION['role'] == "STAFF"){
                $data['title'] = 'Staff';
                $this->view('/Template/header', $data);
                $this->view('Manage Profile/StaffProfileInterface', $data);
                $this->view('/Template/footer');
            }
            else{
                $data['title'] = ' User Profile';
                $this->view('/Template/header', $data);
                $this->view('Manage Profile/UserProfileInterface', $data);
                $this->view('/Template/footer');
            }

        } else {
            header('Location: ' . BASEURL . '/LogIn');
        }


    
    }
}


?>