<?php 

require_once('../config/dataBase.php');


class loginModelDb extends dataBaseConfig {



    function __construct()
    {
        parent::__construct();
    }

    function registerControlModel($email_user){
       
        $consult_teste = $this->connection_db->prepare("SELECT email FROM usuarios WHERE email = :email");
        $consult_teste->bindValue(':email', $email_user);
        $consult_teste->execute();
        if($consult_teste->rowCount() > 0){
            return 0;

        } else {
            return null;
        }  
    }

    function registerUserModel($email_user,$senha_user){

        
        $register_query = $this->connection_db->prepare("INSERT INTO usuarios(email, senha) VALUES(:email,:senha)");
        $register_query->bindValue(':email',$email_user);
        $register_query->bindValue(':senha',$senha_user);
        $register_query->execute();
        unset($register_query);
    }

    function validationLoginUser($email_login){
        $check_login = $this->connection_db->prepare("SELECT id,senha FROM usuarios WHERE email = :email");
      
        $check_login->bindValue(':email',$email_login);
        $check_login->execute(); 
        if($check_login->rowCount() > 0){
            return $check_login;
        } else {
            return null;
        }
        
        
        
    }

    function sessionControlUser($email_user){
       
        session_start();
        session_id();
        $_SESSION['user_login_session'] = $email_user; 
        $_SESSION['user_login_session'] = time();
    }

      
}


