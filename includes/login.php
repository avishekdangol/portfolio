<?php
function login() {
  if( isset( $_POST['u_login'])) {
    $u_name = $_POST['u_name'];
    $u_pass = md5($_POST['u_pass']);

    $sql = "SELECT * FROM `admin` WHERE `u_name`='$u_name'";
    $result = $connection->query($sql);


    while($admin = $result->fetch()) {
      if($u_name == $admin['u_name'] && $u_pass == $admin['u_pass']) {
        $_SESSION['u_name'] = $u_name;
        header('Location: /portfolio/dash');
      } 
    }
  }
}
?>