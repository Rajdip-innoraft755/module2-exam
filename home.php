<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require 'vendor/autoload.php';
$obj = new ReaderData();
$obj->userData();
$obj->continueBookData();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>LOCAL-NOTEPAD-APP.COM</title>
  <link rel="stylesheet" href="/css/reader.css">
  <!-- <link rel=" stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
  <meta name="theme-color" content="#fa4299">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <div class="wrapper">
    <div class="username">
      <h1>Hello
        <?php echo $obj->userName; ?>
      </h1>
      <a id="logout" href="logout.php"><i class="fa-solid fa-arrow-right-from-bracket"></i></a>
    </div>
    <h2>ALL BOOKS</h2>
    <div class="continue-reading">
      <?php
      for ($i = 0; $i < $obj->bookNo; $i++) {
        ?>
        <div class="book">
          <div class="posterImage">
            <img src="<?php echo $obj->posterImage[$i]; ?>" alt="">
          </div>
          <div class="bookTittle">
            <h3>
              <?php echo $obj->bookTittle[$i]; ?>
            </h3>
          </div>
          <div class="author">
            <h4>
              <?php echo $obj->author[$i]; ?>
            </h4>
          </div>
          <div class="icon">
            <i class="fa-sharp fa-solid fa-heart"></i>
            <i class="fa-solid fa-cart-shopping"></i>
          </div>
        </div>

        <?php
      }
      ?>
    </div>
  </div> 
  <script src="js/jquery.min.js"></script>
  <script src="js/fontawesome.js"></script>
  <script src="js/login.js"></script>
</body>

</html>