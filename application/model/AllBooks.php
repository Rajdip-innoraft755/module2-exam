<?php

class AllBooks extends ConnectDB{
  public static $bookNo;
  public static $bookId = array();
  public static $posterImage = array();
  public static $bookTittle =array();
  public static $author =array();

  public function sort($order){
    if($order == "ascending"){
      $sql = "select * from book_details order by bookTittle";
    }
    else {
      $sql = "select * from book_details order by bookTittle desc";
    }
    $result = $this->query($sql);
    $i = 0;
    AllBooks::$bookNo = $result->num_rows;
    while($row = $result->fetch_assoc()) {
      AllBooks::$bookId[$i] = $row["bookId"];
      AllBooks::$posterImage[$i] = $row["posterImagePath"];
      AllBooks::$bookTittle[$i] = $row["bookTittle"];
      AllBooks::$author[$i++] = $row["author"];
    }
  }
  public function bookData(){
    $sql = "select * from book_details";
    $result = $this->query($sql);
    $i = 0;
    AllBooks::$bookNo = $result->num_rows;
    while($row = $result->fetch_assoc()) {
      AllBooks::$bookId[$i] = $row["bookId"];
      AllBooks::$posterImage[$i] = $row["posterImagePath"];
      AllBooks::$bookTittle[$i] = $row["bookTittle"];
      AllBooks::$author[$i++] = $row["author"];
    }
  }
}


?>