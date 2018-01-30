

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


<?php include("includes/config.php");
include("includes/db.php");

$query = "SELECT * FROM categories";

$categories = $db->query($query);
?>


<html>
  <head>

    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>

<div class="blog-masthead">
    <div class="container">
<nav class="blog-nav">
    <a class="blog-nav-item active" href="#">Home</a>

    <?php if($categories->num_rows > 0) {
while($row = $categories->fetch_assoc() ) {

       ?>

    <a class="blog-nav-item" href="index.php?category=<?php echo $row ['id']; ?>"> <?php echo $row ['text']; ?> </a>
  <?php } }  ?>

  </nav>
</div>
</div>

</body>
</html>
