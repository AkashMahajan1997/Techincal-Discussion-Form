<?php require("header.php");
?>
<h1>Ask A Question</h1>
<h2>
    Select your prefered category<form action="/action_page.php">
<form action="/action_page.php" method="post">
  <select name="Language">
      
    <option value="c">C</option>
    <option value="c++">C++</option>
    <option value="java">Java</option>
    <option value="php">PHP</option>
      <option value="other">Other</option>

  </select>
  <br><br>
  <textarea name = "question" rows="10" cols="100" placeholder="Ask your qusetion???"></textarea
  <br><br> 
  



  <input type="submit">
</form>

    
</h2>

  
<?php require("footer.php");
?>