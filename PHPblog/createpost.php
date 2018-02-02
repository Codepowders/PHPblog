
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
  <title></title>
  </head>
  <body>

<!-- Includes the header -->
<?php include("includes/header.php");
  if(isset($_GET['category'] ) ) {
    $category = mysqli_real_escape_string($db , $_GET['category']);
    $query = "SELECT * FROM posts WHERE category='$category'"; }
  else{
    $query = "SELECT * FROM posts"; }
    $posts = $db->query($query); ?>

<!-- Insert a blog into the database -->
<div class="createpost">
<form action="includes/insert.php" method="POST">

    <input type="checkbox" name="category" value="1"> JAVA
    <input type="checkbox" name="category" value="2"> PHP
    <input type="checkbox" name="category" value="3"> CSS
    <hr>
    <input type="text" name="title" placeholder="title">
    <br>
    <br>
    <input type="text" name="date" placeholder="date">
    <br>
    <br>
    <input type="text" name="author" placeholder="name">
    <br>
    <hr>
    <textarea rows="20" id="createbody" type="text" name="body"></textarea>
    <br>
    <hr>
    <input type="submit" name="insert" value="insert">
</form>
</div>

</body>
</html>
