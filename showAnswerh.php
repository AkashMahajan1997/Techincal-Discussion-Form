<?php require("header.php");
?>
<?php

$sql="select * from answer;";

$db=mysqli_connect("localhost","id3010239_doubt","Javedrani@123");
mysqli_select_db($db,"id3010239_doubt");
$result=mysqli_query($db,$sql);
while($row=mysqli_fetch_array($result)){
    extract($row);
   
  echo "<h1>Question:- ".$question."</h1>";
    echo "<h2>Category:- ".$topic."</h2>";
    echo "<h2>Answer:- ".$answer."</h2>";
        
}
?>


<?php require("footer.php");
?>