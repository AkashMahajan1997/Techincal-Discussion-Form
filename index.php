<!doctype html>
<html>
<head>
     <script>
     function check(){
         
         var u = document.getElementById("t1").value;
         var p = document.getElementById("t2").value;
        
        if(u == ""){
        alert("please enter user name");
         return false;     
         
     }
        if(p == ""){
            alert("please enter password");
                return false;
                    }
         
         return true;
     }      
                    
 </script>
<meta charset="utf-8">
<title>Login Form</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
 <div class="title"><h1>Login</h1></div>
 <div class="container">
 <div class="left"></div>
 <div class="right">
  <div class="formbox">
   <form  method="post" action ="loginH.php" onsubmit="return check()">
  <p>Username</p>
  <input type="text" name="uid" placeholder="User Id " id="t1">
  <p>Password</p>
  <input type="Password" name="pwd" placeholder="******" id="t2">
  <input type="submit" name="" value="Sign In">
  <a href="http://haveadoubt.000webhostapp.com/createAccount.php">Create a new account</a>
  <link rel="stylesheet"type="text/css"href="mystyle.css">
 </form>
 </div>
 </div>
 </div>
 </body>

 </html>