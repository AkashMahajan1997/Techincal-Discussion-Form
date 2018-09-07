<?php
session_start();

$u_name=$_POST['u_name'];
$f_name=$_POST['f_name'];
$pwd=$_POST['pwd'];
$e_mail=$_POST['e_mail'];
$dob=$_POST['dob'];
$add=$_POST['add'];
$sta=$_POST['sta'];
$cou=$_POST['cou'];
$_SESSION["user"] = $u_name;
$_SESSION["fullName"] = $f_name;
$_SESSION["email"] = $e_mail;
$_SESSION["date"] = $dob;
$_SESSION["Address"] = $add;
$_SESSION["state"] = $sta;
$_SESSION["country"] = $cou;


$sql=" INSERT INTO user (username,fullname,password,e_mail,dob,address,state,country) values ('$u_name','$f_name','$pwd','$e_mail','$dob','$add','$sta','$cou')";
$sql1=" INSERT INTO tblogin (username,password) values ('$u_name','$pwd')";
$db=mysqli_connect("localhost","id3010239_doubt","Javedrani@123");
mysqli_select_db($db,"id3010239_doubt");
mysqli_query($db,$sql);
mysqli_query($db,$sql1);
             echo "<script > location.href='http://haveadoubt.000webhostapp.com/welcom.php'; </script>";


?>