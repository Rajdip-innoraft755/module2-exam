<?php

class Home extends FrameWork{
  public function index(){
    $this->view("login");
  }
  public function login(){
    $obj = $this->model("login");
    $result = $obj->validate($_POST["userId"],$_POST["password"]);
    if($result == "admin") {
      $this->redirect("dashboard/admin");
    }
    else if($result == "reader") {
      $this->redirect("dashboard/reader");
    }
    else {
      Messages::$loginErr = "* Invalid credentials.";
      $this->view("login");
    }
  }
}

?>