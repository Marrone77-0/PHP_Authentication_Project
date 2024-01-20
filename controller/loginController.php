<?php  



require_once('../model/loginModel.php');

require_once('../controller/sessionController/messagesSession.php');

class  authenticationController{ 
    private $model;
    private $msg_session;
    
    function __construct()
    {
        $this->model = new loginModelDb();
        $this->msg_session = new configSession();
    }

    function registerUserController() {
        
        if(isset($_POST['register-btn'])){
            $email_user = $_POST['input-email'];
            $pass_user = $_POST['input-senha'];
            
           if($this->model->registerControlModel($email_user) === 0){
                $this->msg_session->sessionStart();
                $this->msg_session->set("fail-register",
                "Este usuario já esta cadastrado.");
                header("location: /view/register.php");
           } else {
                $pass_hash = password_hash($pass_user,PASSWORD_ARGON2I);
                $this->model->registerUserModel($email_user,$pass_hash); 
                header("location: index.html");
           }
            
           
            
            
       }
    }

    function validationUserController(){
        if(isset($_POST['login-btn'])){
        
            $email_login = $_POST['email-input'];
            $pass_login = $_POST['senha-input'];
            $pass_query = $this->model->validationLoginUser($email_login);
            if($pass_query !== null){
                $data_query = $pass_query->fetch(PDO::FETCH_ASSOC);
                $pass_hash = $data_query['senha'];
                $id_query = $data_query['id'];
                if(password_verify($pass_login,$pass_hash)){
                    $this->model->sessionControlUser($id_query);
                    header("location: /view/admin.php");
                } else {
                    $this->msg_session->sessionStart();
                    $this->msg_session->set("fail-login",
                    "Credenciais incorretas. Tente novamente.");
                    header("location: /view/login.php");
                    
                }
            } else {
                $this->msg_session->sessionStart();
                $this->msg_session->set("fail-login",
                "Credenciais incorretas. Tente novamente.");
                header("location:  /view/login.php");
            }

      } 
    }

    function controllUserSession(){
        if($_SESSION['user_login_session']){
            if(time() - $_SESSION['user_login_session'] > 100){
                session_regenerate_id(true);
                $_SESSION['user_login_session'] = time();  
            }
            
        } else {
            header("location: /view/login.php");
        }
        
    }


}

$controller = new authenticationController();

$controller->registerUserController();
$controller->validationUserController();
