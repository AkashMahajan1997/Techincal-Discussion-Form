<?php
session_start();
if($_REQUEST["uid"]){
$a=$_REQUEST["uid"];
$b=$_REQUEST["pwd"];
$_SESSION["user"] = $a;

$q="select * from tblogin where username ='$a' and password = '$b';";
$db=mysqli_connect("localhost","id3010239_doubt","Javedrani@123");
mysqli_select_db($db,"id3010239_doubt");
$result=mysqli_query($db,$q);
if(mysqli_num_rows($result)>0){
             echo "<script > location.href='http://haveadoubt.000webhostapp.com/welcom.php'; </script>";
}

else{
  echo '<script language="javascript">';
echo 'alert("incorect username or password")';

echo '</script>';
            echo "<script > location.href='http://haveadoubt.000webhostapp.com/index.php'; </script>";
}
}
?>
