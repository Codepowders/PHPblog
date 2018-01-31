
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
  <title></title>
  </head>
  <body>





<!-- Get post message in database by ID -->
<?php include("includes/header.php");
  if(isset($_GET['post'])){
    $id = mysqli_real_escape_string($db , $_GET['post']);
    $query = "SELECT * FROM posts WHERE id = '$id'";}
    $posts = $db->query($query);?>

<br>

<!-- Echo title, date and author from database -->
<?php
  if($posts->num_rows > 0) {
  while($row = $posts->fetch_assoc() ) {?>
<div class="blog-post">
  <h2 class="blog-post-title"><?php echo $row['title']; ?></h2>
  <p class="blog-post-meta"><?php echo $row ['date']; ?>   by <a href="#">
      <?php echo $row ['author']; ?> </a></p>
</div>
<?php echo $row ['body']; ?>
</div>
<?php } } ?>


<!-- Form comment area with example, not in database yet -->
<blockquote>2 comments</blockquote>
<div class="comment-area">
  <form>
<div class="form-group">
  <label for="exampleInputEmail1">name</label>
  <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="name">
</div>
</div>

<div class="form-group">
  <label for="exampleInputEmail1">Website</label>
  <input type="text" name="website" class="form-control" id="exampleInputEmail1" placeholder="Webiste(Optional)">
</div>
<div class="form-group">
  <label for="exampleInputPassword1">comment</label>
  <textarea cols="60" rows="10" name="comment" class="form-control"></textarea>
</div>
  <button type="submit" name="post_comment" class="btn">post comment <span>is Cool.</span></button>
  </form>

<br>
<br>
<hr>

<div class="comment">
<div class="comment-head">
  <a href="#">test</a>
  <img width="50" height="50" src="img/img.jpg"/>
</div>
  This is a comment by Jorrit
</div>

<div class="comment">
<div class="comment-head">
  <a href="#">test</a><button>admin</button>
  <img width="50" height="50" src="img/img.jpg"/>
</div>
  This is a comment by Jorrit2
</div>

<br>
<br>






<?php include("includes/sidebar.php");?>
<?php include("includes/footer.php");?>
