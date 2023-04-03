<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require 'vendor/autoload.php';
$obj = new BookRegister();
if($obj->register($_POST["bookId"],$_FILES["posterImage"],$_POST["bookTittle"],$_POST["genre"],$_POST["publicationDate"],$_POST["author"],$_POST["ratings"],$_POST["catagory"])) {
  session_start();
  $_SESSION["success"] = "book registered successfully.";
}
else {
  session_start();
  $_SESSION["success"] = "book is not registered successfully.";
}
header("location:admin.php");
?>