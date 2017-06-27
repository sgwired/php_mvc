<?php

namespace App\Controllers;

use \Core\View;

class Home extends \Core\Controller
{
  public function indexAction()
  {
    // echo "Hello from the index action of the Home controller!";
      View::render('Home/index.php');

  }

  protected function after()
  {
    // echo " (after)";
  
  }

  protected function before()
  {
    // echo " (before) ";
    // return false; 
  }
}