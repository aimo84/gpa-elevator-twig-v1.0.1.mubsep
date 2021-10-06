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

class Register extends \Core\Controller
{
    public function registerAction(){
        
        if(Input::exists())
        {
           echo 'input received';
          
            if(token::check(Input::get('token'))){
              

            $validate = new validate();
            $validation = $validate->check($_POST, array(
        
                'username'=> array(
                'required' => true,
               ' min ' => 3,
               'max' =>20,
               'unique'=>'users'
                ),
        
                'password' =>array(
                    'required' => true,
                    'min' => 6
                ),
        
                'password_again' => array(
                    'required' => true,
                    'matches'=> 'password'),
                    // 'name'=> array(
                    //     'required' => true,
                    // 'min' => 4
                    // ),
        
                    'std_Fname' =>array(
                        'required' => true,
                        'max'=>25
                    ),
                    'std_Lname' =>array(
                        'required' => true,
                        'max'=>25
                    ),
                    // 'certification' =>array(
                    //     'required' => true,
                    //     'max'=>50
                    // ),
                    'std_course' =>array(
                        'required' => true,
                        'max'=>25
                    ),
                    'std_year' =>array(
                        'required' => true,
                        'max'=>6
                    ),
                    'std_num' =>array(
                        'required' => true,
                        'max'=>36
                    ),
                    'std_telno' =>array(
                        'required' => true,
                        'max'=>15
                    ),
                    'std_email' =>array(
                        'required' => true,
                        'max'=>100,
                        'unique'=>'users'

                    ),
        
                )
        
        
        
        
                );
        if($validate->passed()){
            
        echo 'validation passed';
        $user = new user();
        
        try{
        
             $salt = harsh::salt(32); 
        
           
        $user->create(array(
            'username'=>input::get('username'),
            'password'=>harsh::make(Input::get('password'),$salt),
            'salt'=>$salt,
            'email'=>input::get('std_email'),
            'joined'=>date('Y-m-d H:i:s'),
            // 'name'=>input::get('name'),
            'groups'=>1,
            'first_name'=>input::get('std_Fname'),
            'last_name'=>input::get('std_Lname'),
            'certification'=>input::get('certification'),
            'course'=>input::get('std_course'),
            'year_of_study'=>input::get('std_year'),
            'student_number'=>input::get('std_num'),
            'phone_number'=>input::get('std_telno'),


            
        ));
        session::flash('home','you have been registered');
        
        View::renderTemplate('gpa_elevator/index.html');
        
        
        }
        catch(\Exception $e){
        die($e->getMessage());
        
        }
        
        
        }else{
            echo 'validation failed';
            foreach($validate->error() as $error){
                echo $error .'<br>';
            }
        }
        
        
            }else{
                echo 'no token';
            }
        }else{
                echo 'no input detected';
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