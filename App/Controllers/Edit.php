<?php
namespace App\Controllers;
use \Core\View;
use \Core\user;
use \Core\session;
use \Core\validate;
use \Core\input;
use \Core\token;
use \Core\harsh;
use \Core\DB;
use \App\Controllers\Home;

class Edit extends \Core\Controller
{
    public function editAction(){
        $user = new user();
if(!$user->isloggedin()){
    Home::indexAction();
}
if(Input::exists()){
    
if(token::check(Input::get('token'))){
  echo 'hi from passs';
$validate = new validate();
$vaalidation = $validate->check($_POST,array(
'name'=>array(
    'required'=> true,
    ' min' => 3,
    'max' =>20,
    'unique'=>'users'
)

));



if( $validate->passed())
{
    try{
    $user->update(array(
        'username'=> input::get('name')
    ));
    session::flash('home', 'your details have been updated');
Home::indexAction();

}
    catch (\Exception  $e){
        die($e->getMessage());

    }
}else{
    foreach($vaalidation->error() as $errors){
        echo $errors.'<br>';
    }
}
}else{
    echo 'token failed';
}
}

    }
    public function passAction(){
            $user = new user();

    if(Input::exists()){
        if(token::check(Input::get('token'))){
            $validate = new validate();
            $validation= $validate->check($_POST,array(
                'current_password'=>array(
                "required"=>true 
                ),
                'New_password'=>array(
                    "required"=>true,
                    'min'=>6
                ),
                'new_password_again'=>array(
                    "required"=>true,
                    "matches"=>'New_password' 
                )


            ));
            if($validate->passed()){
                    if(harsh::make(Input::get('current_password'),$user->data()->salt)===$user->data()->password){
                        $salt= harsh::salt(32);
                    
                        $user->update(array(
                        'password'=>harsh::make(Input::get('New_password'),$salt
                        
                    ),
                    'salt'=>$salt
                    ));
                    session::flash('home','your password has been changed');
                    Home::indexAction();
                    }else{
                        echo 'current password is wrong';
                    }
            }else{
                foreach($validate->error() as $error){
                    echo $error.'<br>';
                }
            }
        }

    }

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