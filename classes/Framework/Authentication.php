<?php
namespace Framework;

class Authentication {
  private $admin;
  private $usernameColumn;
  private $passwordColumn;

  public function __construct(DatabaseTable $admin, $usernameColumn, $passwordColumn) {
    session_start();
    $this->admin = $admin;
    $this->usernameColumn = $usernameColumn;
    $this->passwordColumn = $passwordColumn;
  }

  public function login($username, $password) {
    $admin = $this->admin->find($this->usernameColumn, $username);
    if (!empty($admin) && $admin[0][$this->passwordColumn] == md5($password)) {
      session_regenerate_id();
      $_SESSION['u_name'] = $username;
      $_SESSION['u_pass'] = $admin[0][$this->passwordColumn];
      return true;
    } else {
      return false;
    }
  }
 
  public function isLoggedIn() {
    if (empty($_SESSION['u_name'])) {
      return false;
    }

    $admin = $this->admin->find($this->usernameColumn, $_SESSION['u_name']);

    if (!empty($admin) && $admin[0][$this->passwordColumn] === $_SESSION['u_pass']) {
      return true;
    } else {
      return false;
    }
  }
}