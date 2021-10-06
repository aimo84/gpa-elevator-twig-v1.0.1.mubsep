<?php
namespace App\Controllers;
use \Core\View;
use \Core\user;
use \Core\session;
use \Core\validate;
use \Core\input;
use \Core\token;
use \Core\harsh;
use \App\Controllers\Home;
class Login extends \Core\Controller
{
    public function loginAction(){
        if(Input::exists()){

            if(token::check(Input::get('token'))){
            $validate= new validate(); 
             $validation = $validate->check($_POST,array(
            'username'=>array(
            'required'=>true
            
            
            ),
            'password'=>array(
                'required'=>true
            )
            
            ));
            if( $validate->passed()){
                $remember = (Input::get('remember'))==='on'? true:false ;
                $login = new user();
                $loggedin = $login->logup(Input::get('username'),Input::get('password'),$remember);
               
                if($loggedin)
            {
                $username = $login->data()->username;
                Home::indexAction();
            // View::renderTemplate('gpa_elevator/muk/index.html');
                
            }else{
                echo 'Sorry we could not log you  in ,Try again';
            }
            }
            else
             {
                foreach($validation->error() as $error){
                    echo $error. '<br>';
            
                }
            }
            
            
            
            
            
            
            
            
            }
            }
            
        
    }
    public function logoutAction(){
        $user = new user();
        $user->logout();
        Home::indexAction();

    }



    
    /**
     * Action filter
     * @return void
     * 
     */
    protected function after()
    {
        // echo " (after)";
    }
    /**
     * Action filter
     * @return void
     * 
     */
    protected function before()
    {
        
            
            
    }
}


?>