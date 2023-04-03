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
        <?php echo $_SESSION["userName"]; ?>
      </h1>
    </div>
    <div class="item">
      <h2>continue-reading Section</h2>
      <div class="continue-reading">
        <?php
        for ($i = 0; $i < ReaderData::$continueBookNo; $i++) {
          ?>
          <div class="book">
            <div class="posterImage">
              <img src="<?php echo ReaderData::$continuePosterImage[$i]; ?>" alt="">
            </div>
            <div class="bookTittle">
              <h3>
                <?php echo ReaderData::$continueBookTittle[$i]; ?>
              </h3>
            </div>
            <div class="author">
              <h4>
                <?php echo ReaderData::$continueAuthor[$i]; ?>
              </h4>
            </div>
          </div>
          <?php
        }
        ?>
      </div>
    </div>

    <div class="item">
      <h2>Bucket Section</h2>
      <div class="bucket-list">
        <?php
        for ($i = 0; $i < ReaderData::$bucketBookNo; $i++) {
          ?>
          <div class="book" >
            <div class="posterImage">
              <img src="<?php echo ReaderData::$bucketPosterImage[$i]; ?>" alt="">
            </div>
            <div class="bookTittle">
              <h3>
                <?php echo ReaderData::$bucketBookTittle[$i]; ?>
              </h3>
            </div>
            <div class="author">
              <h4>
                <?php echo ReaderData::$bucketAuthor[$i]; ?>
              </h4>
            </div>
            <form action="/dashboard/read" method="POST">
            <input type="button" class="read" id="<?php echo ReaderData::$bucketBookId[$i] ?>" value="MARK AS READ">
            </form>      
          </div>
          <?php
        }
        ?>
      </div>
    </div>

    <div class="home">
      <a href="/dashboard/readerhome"><i class="fa-solid fa-house"></i></a>
    </div>
  </div>
  <script src="/assets/js/jquery.min.js"></script>
  <script src="/assets/js/fontawesome.js"></script>
  <script src="/assets/js/reader.js"></script>
</body>

</html>