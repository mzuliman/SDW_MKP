<?php

class LogIn extends Controller{

    public function index(){

        if(isset($_SESSION['user_id'])){
            header('Location: ' . BASEURL . 'Home');
        } else {
            $data['title'] = 'Login';
            $this->view('/Template/headerModule1', $data);
            $this->view('Manage Registration/UserLoginInterface', $data);
            $this->view('/Template/footer');
        }
    }

    public function verifyLogin(){

        $UserIC = $_POST['UserIC'];
        $hash = password_hash($_POST['User_Password'], PASSWORD_DEFAULT);
        
        $result = $this->model('User_Info')->getUserByIC($UserIC);

        if (password_verify($result['User_Password'], $hash)) {

            
            $_SESSION['user_id'] = $result['UserIC'];
            $_SESSION['user_name'] = $result['User_Name'];
            $_SESSION['role'] = $result['User_Role'];
            $_SESSION['status'] = "Active";

            header('Location: ' . BASEURL . 'Home/index');

        } else {
            echo 'Invalid password.';
            Flasher::setFlash('gagal', '', 'danger');
            header('Location: ' . BASEURL . 'LogIn');
        }  

    }
    public function logout(){
        
        session_destroy();
        header('Location: ' . BASEURL . 'LogIn');
        

    }


}

?>