<?php 

namespace app\Class;
use app\Class\Session;

class Authenticator{

    protected $db;

    public function __construct(){

        $this->db =dbreturn() ;

    }

    public function attempt ($email , $password){
        
        $user = $this->db->query('Select * from users where email=?',[$email])->fetch();
        if($user){

            if(password_verify( $password,$user['password'])){
                Session::put('email',$email);
                Session::put('logged',true);
                redirect('/');
                exit;
            }
        }
        return  "Invalid email or password";

    }

    public function logout(){
        Session::destroy(); 
    }

}