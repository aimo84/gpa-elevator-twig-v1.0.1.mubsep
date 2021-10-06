<?php
namespace App\Controllers\Admin;

/**
 * User admnin Controller
 * 
 * Z_frame
 * version 1.0
 */
 class Users extends \Core\Controller
 {
     /**
      * before filter
      *@return void
      
      */
      protected function before()
      {
          // Make sure user is logged in
      }
      /**
       * show index page
       * @return void
       * 
       */
      public  function indexAction()
      {
          echo 'User admin index';
      }
 }



?>