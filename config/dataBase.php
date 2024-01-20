<?php 

define("HOSTDB","localhost:3306");
define("DATABASE","vuln");
define("USERDB","shadow");
define("PASSDB","m123");



class dataBaseConfig{

   

    protected $connection_db;

    function __construct()
    {
        $this->connectDb();
    }
   

    function connectDb(){
        try{
            $this->connection_db = new PDO('mysql:host='.HOSTDB.';dbname='.DATABASE,USERDB,PASSDB );
           
            
        } catch (Exception $e){
            print_r("ERRO: ".$e);
           
            
        }
        
    }
}



