<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Create Account</title>
<link rel="stylesheet" href="mystyle1.css">
</head>
<body>
 <div class="title"><h1>Create New Account</h1></div>
 <div class="container">
 <div class="left">
     
 </div>
 <div class="right">
  <div class="formbox">
   <form action="sineUp.php" method="post" enctype="multipart/form-data" name = "form1">
<table>
<tr><td>Username</td><td>:</td><td><input type="text" name="u_name" ><span id='a' style="color: red;"></span></td></tr>
</br><tr><td>Fullname</td><td>:</td><td><input type="text" name="f_name"><span id='b' style="color: red;"></span></td></tr>
<tr><td>Password</td><td>:</td><td><input type="password" name="pwd"><span id='c' style="color: red;"></span></td></tr>
<tr><td>E_Mail</td><td>:</td><td><input type="text" name="e_mail"><span id='d' style="color: red;"></span></td></tr>

<tr><td>Date Of Birth</td><td>:</td><td><input type="date" name="dob" ><span id='e' style="color: red;"></span></td></tr>

<tr><td>Address</td><td>:</td><td><textarea rows="3" cols="15" name="add"></textarea><span id='f' style="color: red;"></span></td></tr>
<tr><td>State</td><td>:</td><td><input type="text" name="sta"><span id='g' style="color: red;"></span></td></tr>
<tr><td>Country</td><td>:</td><td><input type="text" name="cou"><span id='h' style="color: red;"></span></td></tr>

<tr><td><input type="submit" value="Submit"></td><td></td><td><input type="reset" value="Reset"></td></tr></table></form>
 </div>
 </div>
 </div>
 </body>
 </html>