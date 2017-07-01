<?php

namespace App\Controllers;

use \Core\View;
use App\Models\Post;

class Posts extends \Core\Controller
{
  public function indexAction()
  {
    // echo "Hello from the index action 1in the Posts controller";
    // echo "<p>Query string parameters: <pre>" .
    //   htmlspecialchars(print_r($_GET, true)). '</pre></p>';
    $posts = Post::getAll();
    
    View::renderTemplate('Posts/index.html', ['posts' => $posts]);

  }

  public function addNewAction()
  {
    echo "Hello from the addNew action in the Posts controller";
  }

  public function editAction(){
    echo "Hello from the edit action in the Posts controller!";
    echo "<p>Route parameters: <pre>" . 
      htmlspecialchars(print_r($this->route_params, true)) . '</pre></p>';
  }
  
}