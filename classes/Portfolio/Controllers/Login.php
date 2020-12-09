<?php
namespace Portfolio\Controllers;
use \Framework\DatabaseTable;

class Login {
  private $authentication;

  public function __construct(\Framework\Authentication $authentication) {
    $this->authentication = $authentication;
  }

  public function loginForm() {
    return ['template' => 'login.html.php',
      'layout' => 'layout.html.php',
      'title' => 'Login',
      'css' => 'login.css'
    ];
  }  

  public function userLogin() {
    if ($this->authentication->login($_POST['u_name'], $_POST['u_pass'])) {
      header('location: \dash');
    } else {
      header('location: \login');
    }
  }
  
  public function logout() {
    session_start();
    session_unset();
    session_destroy();
    header('Location: \portfolio\login');
  }
}
?>