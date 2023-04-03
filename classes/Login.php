<?php
require './vendor/autoload.php';

class Login extends ConnectDB{
  public function __construct($userId,$password){
    Parent::__construct();
    $sql = "select userType from user where binary userId='$userId' and password='$password';";
    $result = $this->query($sql);
    if ($result->num_rows > 0) {
      session_start();
      $_SESSION["userId"] = $userId;

      if ($result->fetch_assoc()["userType"] == "admin") {
        header("location:admin.php");
      }
      else {
        header("location:reader.php");
      }
      
    }
    else {
      header("location:index.php");
    }
  }
}

?>

