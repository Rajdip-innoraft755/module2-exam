<?php
class Dashboard extends FrameWork
{
  public function admin()
  {
    $this->view("admin");
  }
  public function bookregister()
  {
    $obj = $this->model("BookRegister");
    if ($obj->register($_POST["bookId"], $_FILES["posterImage"], $_POST["bookTittle"], $_POST["genre"], $_POST["publicationDate"], $_POST["author"], $_POST["ratings"], $_POST["catagory"])) {
      Messages::$bookRegisterMessages = "successfully registerd.";
    } else {
      Messages::$bookRegisterMessages = "not registered successfully.";
    }
    $this->view("admin");
  }
  public function reader()
  {
    $obj = $this->model("readerData");
    $obj->userData();
    $obj->continueBookData();
    $obj->bucketBookData();
    $this->view("reader");
  }
  public function readerhome()
  {
    $obj = $this->model("AllBooks");
    $obj->bookData();
    $this->view("readerhome");
  }
  public function sort(){
    $obj = $this->model("AllBooks");
    $obj->sort($_POST["order"]);
    $this->view("readerhome");
  }
  public function read(){
    $obj = $this->model("MarkAsRead");
    $obj->mark($_POST["id"]);
    $this->redirect("/dashboard/reader");
  }
  public function logout()
  {
    session_start();
    session_unset();
    session_destroy();
    Messages::$loginErr = "Successfully Logged Out.";
    $this->view("login");
  }
  
}
?>