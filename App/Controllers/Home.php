<?php

namespace App\Controllers;

class Home extends \Core\Controller
{
  public function indexAction()
  {
    echo "Hello from the index action of the Home controller!";
  }

  protected function after()
  {
    echo " (after)";

  }

  protected function before()
  {
    echo " (before) ";
    return false; 
  }
}