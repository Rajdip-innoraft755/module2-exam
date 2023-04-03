<?php

 class ReaderData extends ConnectDB{
  public static  $userId;
  public static $userName;
  public static $continueBookNo;
  public static $continueBookId = array();
  public static $continuePosterImage = array();
  public static $continueBookTittle =array();
  public static $continueAuthor =array();
  public static $bucketBookNo;
  public static $bucketBookId = array();
  public static $bucketPosterImage = array();
  public static $bucketBookTittle =array();
  public static $bucketAuthor =array();
  public function userData(){
    session_start();
    $sql = "select userName from user where userId ='". $_SESSION["userId"] ."'";
    $result = $this->query($sql);
    $_SESSION["userName"] = $result->fetch_assoc()["userName"];
  }

  public function continueBookData(){
    $sql = "select * from book_details where bookId in(select bookId from continuelist where userId='".$_SESSION["userId"] . "');";
    $result = $this->query($sql);
    $i = 0;
    ReaderData::$continueBookNo = $result->num_rows;
    while($row = $result->fetch_assoc()) {
      ReaderData::$continueBookId[$i] = $row["bookId"];
      ReaderData::$continuePosterImage[$i] = $row["posterImagePath"];
      ReaderData::$continueBookTittle[$i] = $row["bookTittle"];
      ReaderData::$continueAuthor[$i++] = $row["author"];
    }
  }

  public function bucketBookData(){
    $sql = "select * from book_details where bookId in(select bookId from bucketlist where userId='".$_SESSION["userId"] . "');";
    $result = $this->query($sql);
    $i = 0;
    ReaderData::$bucketBookNo = $result->num_rows;
    while($row = $result->fetch_assoc()) {
      ReaderData::$bucketBookId[$i] = $row["bookId"];
      ReaderData::$bucketPosterImage[$i] = $row["posterImagePath"];
      ReaderData::$bucketBookTittle[$i] = $row["bookTittle"];
      ReaderData::$bucketAuthor[$i++] = $row["author"];
    }
  }
 }

?>