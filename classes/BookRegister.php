<?php
require './vendor/autoload.php';

class BookRegister extends ConnectDB {
   public function register($bookId,$posterImage,$bookTittle,$genre,$publicationDate,$author,$ratings,$catagory){
    $posterImagePath = $this->imageStoring($bookId,$posterImage);
    $bookTittle = htmlspecialchars($bookTittle, ENT_QUOTES);
    $author = htmlspecialchars($author, ENT_QUOTES);
    $sql = "insert into book_details values('$bookId','$posterImagePath','$bookTittle','$genre','$publicationDate','$author','$ratings','$catagory');";
    try {
      $this->query($sql);
      return TRUE;
    }
    catch(Exception $e) {
      return FALSE;
    }
   }

   public function imageStoring($bookId,$posterImage){
      if(!empty($posterImage["name"])){
        $target_file = "images/" . $bookId .$posterImage["name"];
        move_uploaded_file($posterImage["tmp_name"],$target_file);
        return 	"/" . $target_file;
      }
   }
}

?>
