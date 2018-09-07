<?php
$question=$_GET['question'];
$topic=$_GET['topic'];
$answer=$_GET['answer'];

$sql=" INSERT INTO answer (question,topic,answer) values ('$question','$topic','$answer');";
$db=mysqli_connect("localhost","id3010239_doubt","Javedrani@123");
mysqli_select_db($db,"id3010239_doubt");
mysqli_query($db,$sql);
echo '<script language="javascript">';
echo 'alert("Your Answer has been posted")';

echo '</script>';
            echo "<script > location.href='http://haveadoubt.000webhostapp.com/showAnswerh.php'; </script>";
            


?>