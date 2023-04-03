<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>LOCAL-NOTEPAD-APP.COM</title>
  <link rel="stylesheet" href="/css/style.css">
  <meta name="theme-color" content="#fa4299">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <div class="wrapper">
    <div class="title-text">
      <div class="title login">ADD BOOK</div>
    </div>
    <div class="form-container">
      <div class="form-inner">
        <form action="bookregister.php" method="POST" enctype="multipart/form-data" class="login">
          <div class="field" id="bookId">
            <input type="text" placeholder="Book ID" name="bookId" required>
            <span class="error"></span>
          </div>

          <div class="field" id="posterImage">
            <label for="">Choose the Poster Image</label>
            <input type="file" name="posterImage" required>
            <span class="error"></span>
          </div>

          <div class="field" id="bookTittle">
            <input type="text" placeholder="Book Tittle" name="bookTittle" required>
            <span class="error"></span>
          </div>

          <div class="field" id="genre">
            <input type="text" placeholder="Book Genre" name="genre" required>
            <span class="error"></span>
          </div>

          <div class="field" id="publicationDate">
            <input type="date" placeholder="Publication Date(dd/mm/yyyy)" name="publicationDate" required>
            <span class="error"></span>
          </div>

          <div class="field" id="author">
            <input type="text" placeholder="Author of Book" name="author" required>
            <span class="error"></span>
          </div>

          <div class="field" id="ratings">
            <input type="text" placeholder="Ratings" name="ratings" required>
            <span class="error"></span>
          </div>

          <div class="field" id="catagory">
            <input type="text" placeholder="Catagory" name="catagory" required>
            <span class="error"></span>
          </div>

          <div class="field btn">
            <div class="btn-layer"></div>
            <input id="login-btn" type="submit" value="ADD BOOK">
          </div>
        </form>

        <div class="success">
          <?php
          session_start();
          if (isset($_SESSION["success"])) {
            echo $_SESSION["success"];
          }
          ?>
        </div>
      </div>
    </div>
  </div>
  <script src="js/jquery.min.js"></script>
  <script src="js/login.js"></script>
</body>

</html>