


<?php
$category = $_POST["category"];
$title = $_POST["title"];
$date = $_POST["date"];
$author = $_POST["author"];
$body = $_POST["body"];



$con = mysqli_connect('localhost:3306','jorrit1q_Jorrit','Hoihoihoi1','jorrit1q_bloqcms');


$sql = "INSERT INTO `posts`(`title`,`date`,`author`,`body`,`category`) VALUES ('$title','$date','$author','$body','$category')";



if(!mysqli_query($con,$sql))
{

    echo 'not inserted';
}

else
{
    echo 'Post is succesfully posted';

}
?>
