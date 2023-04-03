<?php
 require './vendor/autoload.php';

 class ReaderData extends ConnectDB{
  public $userId;
  public $userName;
  public $bookNo;
  public $bookId = array();
  public $posterImage = array();
  public $bookTittle =array();
  public $author =array();
  public function userData(){
    session_start();
    $sql = "select userName from user where userId ='". $_SESSION["userId"] ."'";
    $result = $this->query($sql);
    $this->userName = $result->fetch_assoc()["userName"];
  }

  public function continueBookData(){
    $sql = "select * from book_details;";
    $result = $this->query($sql);
    $i = 0;
    $this->bookNo = $result->num_rows;
    while($row = $result->fetch_assoc()) {
      $this->bookId[$i] = $row["bookId"];
      $this->posterImage[$i] = $row["posterImagePath"];
      $this->bookTittle[$i] = $row["bookTittle"];
      $this->author[$i++] = $row["author"];
    }
  }


  public function BucketBookData(){
    
  }
 }

?>