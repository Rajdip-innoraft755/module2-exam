<?php

class MarkAsRead  extends ConnectDB{
  public function mark($id){
    session_start();
    $sql = "insert into continuelist values('$id','" . $_SESSION["userId"] . "');";
    $this->query($sql);
    $sql = "delete from bucketlist where binary bookId='$id' and userId ='" .$_SESSION["userId"] ."';";
    $this->query($sql);
  }
}

?>