<?php 

class configSession {
    function sessionStart(){
        if(session_status() == PHP_SESSION_NONE){
            session_start();
        }
    }

    function set($key,$value){
       
        $_SESSION[$key] = $value;
    }

    function get($key){

        if(isset($_SESSION[$key])){
            return $_SESSION[$key];
        } else {
            return null;
        }
    }

    function destroyData($unset_key){
        unset($_SESSION[$unset_key]);
        
    }
}