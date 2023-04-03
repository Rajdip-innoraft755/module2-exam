<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>LOCAL-NOTEPAD-APP.COM</title>
  <link rel="stylesheet" href="/assets/css/reader.css">
  <meta name="theme-color" content="#fa4299">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <div class="wrapper">
    <div class="username item">
      <h1>Hello
        <?php
        session_start();
        echo $_SESSION["userName"]; ?>
      </h1>
      <a id="logout" href="/dashboard/logout/"><i class="fa-solid fa-arrow-right-from-bracket"></i></a>
    </div>
    <div class=item>
      <h3>SORT BOOKS ACCORDING TO BOOK TITTLE</h3>
      <form action="/dashboard/sort" method="post">
        <input type="checkbox" name="order" class="sort" id="ascending" value="ascending">
        <label for="ascending">A to Z</label>
        <input type="checkbox" name="order" class="sort" id="descending" value="descending">
        <label for="descending">Z to A</label>
        <input type="submit" value="submit">
      </form>
    </div>
    <div class=item>
      <h2>ALL BOOKS</h2>
      <div class="continue-reading">
        <?php
        for ($i = 0; $i < AllBooks::$bookNo; $i++) {
          ?>
          <div class="book">
            <div class="posterImage">
              <img src="<?php echo AllBooks::$posterImage[$i]; ?>" alt="">
            </div>
            <div class="bookTittle">
              <h3>
                <?php echo AllBooks::$bookTittle[$i]; ?>
              </h3>
            </div>
            <div class="author">
              <h4>
                <?php echo AllBooks::$author[$i]; ?>
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

  </div>
  <script src="/assets/js/jquery.min.js"></script>
  <script src="/assets/js/fontawesome.js"></script>
  <script src="/assets/js/reader.js"></script>
</body>

</html>