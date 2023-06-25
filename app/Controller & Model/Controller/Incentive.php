<?php

class Incentive extends Controller{

    public function index(){

        if(isset($_SESSION['user_id'])){
            $data['title'] = 'Insentif Khas Pasangan Pengantin';
            $this->view('/Template/headerModule5', $data);
            $this->view('Manage Incentive/UserIncentiveMainPage', $data);
            $this->view('/Template/footer');
        } else {
            header('Location: ' . BASEURL . '/LogIn');
        }
    }

    public function ApplyIncentive(){

        if(isset($_SESSION['user_id'])){
            $data['title'] = 'Permohonan Insentif Khas Pasangan Pengantin';
            $data['user'] = $this->model('User_Info')->getUserByIC($_SESSION['user_id']);
            $data['userpartner'] = $this->model('UserPartner_Info')->getUserPartnerByIC();
            $this->view('/Template/headerModule5', $data);
            $this->view('Manage Incentive/UserApplyIncentive', $data);
            $this->view('/Template/footer');
        } else {
            header('Location: ' . BASEURL . '/LogIn');
        }

    }

    public function ViewIncentive(){

        if(isset($_SESSION['user_id'])){
            $data['title'] = 'Sejarah Permohonan Insentif Khas Pasangan Pengantin';
            $data['user'] = $this->model('User_Info')->getUserByIC($_SESSION['user_id']);
            $data['incentive'] = $this->model('incentive_application')->getIncentiveInfoByUserIC();
            $this->view('/Template/headerModule5', $data);
            $this->view('Manage Incentive/UserIncentiveAppHistory', $data);
            $this->view('/Template/footer');
        } else {
            header('Location: ' . BASEURL . '/LogIn');
        }

    }

    public function Staffmainpage(){

        if(isset($_SESSION['user_id'])){
            $data['title'] = 'Staff Insentif Khas Pasangan Pengantin';
            $this->view('/Template/headerModule5', $data);
            $this->view('Manage Incentive/StaffIncentiveMainPage', $data);
            $this->view('/Template/footer');
        } else {
            header('Location: ' . BASEURL . '/LogIn');
        }
    }

    public function Staffviewincentive(){

        if(isset($_SESSION['user_id'])){
            $data['title'] = 'Staff Insentif Khas Pasangan Pengantin';
            $this->view('/Template/headerModule5', $data);
            $this->view('Manage Incentive/StaffViewIncentive', $data);
            $this->view('/Template/footer');
        } else {
            header('Location: ' . BASEURL . '/LogIn');
        }
    }
}


?>