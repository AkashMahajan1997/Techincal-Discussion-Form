<?php
$topic=$_GET['Language'];
$question=$_GET['question'];

$sql=" INSERT INTO question (topic,question) values ('$topic','$question');";
$db=mysqli_connect("localhost","id3010239_doubt","Javedrani@123");
mysqli_select_db($db,"id3010239_doubt");
mysqli_query($db,$sql);

             echo "<script > location.href='http://haveadoubt.000webhostapp.com/answer.php'; ";
             echo 'alert("Your question has been posted")';
echo "</script>";

            


?>