<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
<form method="post" action="examData.php">
<?php include "examData.php";
 echo '<P>'.shuffle($Question ).'</p>';
?>
  <p>Select the correct answer:</p>

  
  <input type="radio" id="1" name="ans1" >
  <label >Answer 1</label>
  <br>
  <input type="radio" id="2" name="ans2" >
  <label >Answer 2</label>
  <br>
  <input type="radio" id="3" name="ans3" >
  <label >Answer 3</label>
  <br>
  <input type="radio" id="3" name="ans4">
  <label >Answer 4</label>  
 
  <br>  

  <input type="submit" value="submit">
</form>

</body>
</html>

