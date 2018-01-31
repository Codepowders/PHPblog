
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

<!-- Blog index -->
  <div class="blog-header">
    <h1 class="blog-title">Blog</h1>
    <p class="lead blog-description">BLOGSSSHERe</p>
  </div>

<?php include("includes/sidebar.php");?>



<?php if($posts->num_rows > 0) {
      while($row = $posts->fetch_assoc() ) { ?>

<!-- Echo blog from header -->
  <div class="blog-post">
  <h2 class="blog-post-title"><a href="single.php?post=<?php echo $row['id']?>"><?php echo $row ['title']; ?></a></h2>
  <p class="blog-post-meta"><?php echo $row ['date']; ?><a href="#"><?php echo $row ['author']; ?></a></p>
<?php $body = $row ['body']; echo substr($body, 0 ,200) , "...."; ?>
  <a href="single.php?post=<?php echo $row ['id'] ?>" class="btn">read more</a>
</div>
<?php } } ?>

<!-- Includes the sidebar/footer in the index -->

<?php include("includes/footer.php");?>

</body>
</html>
