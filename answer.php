<?php require("header.php");
?>
<?php

$sql="select * from question;";

$db=mysqli_connect("localhost","id3010239_doubt","Javedrani@123");
mysqli_select_db($db,"id3010239_doubt");
$result=mysqli_query($db,$sql);
while($row=mysqli_fetch_array($result)){
    extract($row);
    echo "<form action='showAnswer.php' method='get'> ";
  echo "<h1>Question:- ".$question."</h1>";
    echo "<h2>Category:- ".$topic."</h2>";
    echo "<input type ='hidden' name ='question' value ='".$question."' >";
        echo "<input type ='hidden' name ='topic' value ='".$topic."' >";

      echo '<textarea name = "answer" rows="6" cols="100" placeholder="Post your answer"></textarea>';
      echo "</br><input type ='submit' value ='Post'>";
      
      echo "</form>";
    

  
    
}
?>


<?php require("footer.php");
?>