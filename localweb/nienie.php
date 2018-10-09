<!DOCTYPE html>
<html>
<body>



<div align="center">
<form action="" method="POST">
  input your number:<br>
  <input type="text" name="firstname">
  <br>
  <input type="submit" value="Submit">
</form> 
<?php 
	
if (isset($_POST["firstname"])) {
	$number=$_POST['firstname'];
	for($j=1;$j<=9;$j++){
		echo "  $number*$j=". $number*$j." <br>";                    
    }
}
?>  
</div>
</body>
</html>
