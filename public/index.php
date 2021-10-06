<html>
<head>

<link rel="dns-prefetch" href="https://fonts.googleapis.com/">
    <link href="https://pagecdn.io/lib/easyfonts/fonts.css" rel="stylesheet" />
    <link rel="dns-prefetch" href="https://s.w.org/">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/owl.carousel.css">
    <link rel="stylesheet" href="./css/owl.theme.default.css">
    <link rel="stylesheet" href="./css/all.css">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/navigation.css">
    <link rel="stylesheet" href="./css/form.css">
</head>
</html>


<?php

use App\Controllers\Register;

spl_autoload_register(
    function ($class){
        $root = dirname(__DIR__);// get parent directory
        $file = $root . '/' . str_replace('\\','/',$class) . '.php';
        if (is_readable($file)){
            require $root . '/' . str_replace('//','/',$class) . '.php';
        } 
    }
);





/**
 * Front Controller
 */
// require '../Core/Router.php';
// require '../App/Controllers/Posts.php';
/**
 * Auto loader
 */


/**
 * twig
 */
require_once dirname(__DIR__) . '/vendor/autoload.php';
/**
 * Error and Exception handling
 */
error_reporting(E_ALL);

set_error_handler('Core\Error::errorHandler');
set_exception_handler('Core\Error::exceptionHandler');


// initialization progress

session_start();
$GLOBALS['config']= array(
    'mysql' => array(
        'host' => '127.0.0.1',
        'db' => 'zac',
        'username' => 'root',
        'password'=>'',
       
    ),
    'cokie'=> array(
    'cokie_name' => 'hash',
    'cokie_expiry' => '604888'
    
    ),
    'session'=>array(
        'session_name' => 'user',
        'token_name' => 'token'
    )
    
    
    );
    
    
    if (\Core\cookie::exists(\Core\config::get('cokie/cokie_name')) && !\Core\session::exists(\Core\config::get('session/session_name'))){
    $harsh = \Core\cookie::get(\Core\config::get('cookie/cokie_name'));
    $harsh_check= new \Core\DB();
    $harsh_check->get('users_session','=',$harsh);
    if($harsh->count()){
        $user = new \Core\user($harsh_check->first()->user_id);
        $user->logup();
    }
    }

$router = new  Core\Router();
//Add routes 

$router->add('',['controller'=>'Login','action'=>'login']);
$router->add('',['controller'=>'Update','action'=>'edit']);
$router->add('',['controller'=>'Update','action'=>'pass']);
$router->add('',['controller'=>'Register','action'=>'register']);
$router->add('',['controller'=>'cedat','action'=>'cedat']);
$router->add('',['controller'=>'Home','action'=>'mun']);
$router->add('',['controller'=>'Home','action'=>'co_cis']);
$router->add('',['controller'=>'ucu','action'=>'foea_b']);
$router->add('',['controller'=>'Home','action'=>'download']);

$router->add('',['controller'=>'cedat','action'=>'CMP1203']);
$router->add('',['controller'=>'cedat','action'=>'EMT1201']);



$router->add('Home/{controller}/{action}',['controller'=>'Home','action'=>'arc']);

$router->add('',['controller'=>'Home','action'=>'login']);
$router->add('',['controller'=>'Home','action'=>'index']);
$router->add('{controller}/{action}');
$router->add('Home{controller}/{action}');

//$router->add('posts',['controller'=>'Posts','action'=>'index']);

$router->add('{controller}/{action}');
$router->add('admin{controller}/{action}');

//$router->add('admin/{action}/{controller}');
$router->add('{controller}/{id:\d+}/{action}');

$router->add('admin/{controller}/{action}',['namespace'=>'Admin']);

$router->add('edit/{controller}/{action}',['controller'=>'{{ controller }}','action'=>'{{ action }}']);
$router->add('login/{controller}/{action}',['controller'=>'Login','action'=>'login']);
$router->add('register/{controller}/{action}',['controller'=>'Login','action'=>'login']);



// $router->add('register',['controller'=>'Register','action'=>'register']);
// $router->add('login',['controller'=>'Login','action'=>'login']);

// echo '<pre>';
// var_dump($router->getRoutes());
// echo '</pre>';

// match requested route
// $url = $_SERVER['QUERY_STRING'];
// if ($router->match($url)){
//     echo '<pre>';
// var_dump($router->getParams());
// echo '</pre>';
// }else{
//     echo "no route found for URL $url";
// }
// display the routing table

// echo '<pre>';
// var_dump($router->getRoutes());
// echo htmlspecialchars(print_r($router->getRoutes(),true));
// echo '</pre>';
// //matching requested route
// $url = $_SERVER['QUERY_STRING'];
// if($router->match($url)){

//     echo '<pre>';
//     var_dump($router->getParams());
//     echo '</pre>';
//     }else{
//         echo "no route found for URL $url";
//     }
$router->dispatch($_SERVER['QUERY_STRING']);
?> 