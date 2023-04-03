<?php

class Login extends ConnectDB{
  public function validate($userId,$password){
    $sql = "select userType from user where binary userId='$userId' and password='$password';";
    $result = $this->query($sql);
    if ($result->num_rows > 0) {
      session_start();
      $_SESSION["userId"] = $userId;
      if ($result->fetch_assoc()["userType"] == "admin") {
        return "admin";
      }
      else {
        return "reader";
      }
    }
    else {
      return "Inavalid Credentials";
    }
  }
}

?>

