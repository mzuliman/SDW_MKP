
<?php

class Consultation extends Controller{

    public function index(){

        if($_SESSION['role'] == "ADMIN"){
            $data['title'] = 'Admin';
            $data['user'] = $this->model('User_Info')->getUserByIC($_SESSION['user_id']);
            $this->view('/Template/header', $data);
            $this->view('Manage Consultation/UserApplyConsultation', $data);
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
            $data['title'] = 'Khidmat Nasihat';
            $data['user'] = $this->model('User_Info')->getUserByIC($_SESSION['user_id']);
            $data['consult'] = $this->model('Consultation_Registration')->getConsultInfoByUserIC();
            $this->view('/Template/header', $data);
            $this->view('Manage Consultation/StaffConsultationApplicationList', $data);
            $this->view('/Template/footer');
        }
        else{
            $data['title'] = 'Khidmat Nasihat';
            $data['user'] = $this->model('User_Info')->getUserByIC($_SESSION['user_id']);
            $data['userpartner'] = $this->model('UserPartner_Info')->getUserPartnerByIC();
            $data['consult'] = $this->model('Consultation_Registration')->getConsultInfoByUserIC();
            $this->view('/Template/header', $data);
            $this->view('Manage Consultation/UserConsultationMainpage', $data);
            $this->view('/Template/footer');
        }

    }

    public function ApplyConsult(){

        if(isset($_SESSION['user_id'])){
            $data['title'] = 'Permohonan Khidmat Nasihat';
            $this->view('/Template/header', $data);
            $this->view('Manage Consultation/UserApplyConsultation', $data);
            $this->view('/Template/footer');
        } else {
            header('Location: ' . BASEURL . '/LogIn');
        }

    }

    public function ApplyConsultExtension(){

        if(isset($_SESSION['user_id'])){
            $data['title'] = 'Khidmat Nasihat';
            $this->view('/Template/header', $data);
            $this->view('Manage Consultation/UserApplyConsultationExtension', $data);
            $this->view('/Template/footer');
        } else {
            header('Location: ' . BASEURL . '/LogIn');
        }

    }

    public function ViewConsult(){

        if(isset($_SESSION['user_id'])){
            $data['title'] = 'Khidmat Nasihat';
            $this->view('/Template/header', $data);
            $this->view('Manage Consultation/UserViewConsultation', $data);
            $this->view('/Template/footer');
        } else {
            header('Location: ' . BASEURL . '/LogIn');
        }

    }

    public function EditConsult(){

        if(isset($_SESSION['user_id'])){
            $data['title'] = 'Khidmat Nasihat';
            $this->view('/Template/header', $data);
            $this->view('Manage Consultation/UserApplyConsultation', $data);
            $this->view('/Template/footer');
        } else {
            header('Location: ' . BASEURL . '/LogIn');
        }


    }

    public function ConsultTimetable(){

        if(isset($_SESSION['user_id'])){
            $data['title'] = 'Khidmat Nasihat';
            $this->view('/Template/header', $data);
            $this->view('Manage Consultation/UserApplyConsultationExtension', $data);
            $this->view('/Template/footer');
        } else {
            header('Location: ' . BASEURL . '/LogIn');
        }


    }

    public function ConsultReview(){

        if(isset($_SESSION['user_id'])){
            $data['title'] = 'Khidmat Nasihat';
            $this->view('/Template/header', $data);
            $this->view('Manage Consultation/UserViewConsultatioReview', $data);
            $this->view('/Template/footer');
        } else {
            header('Location: ' . BASEURL . '/LogIn');
        }

    }
}


?>