<?php    
$input ='';
if(isset($_GET['SubmitButton'])){ //check if form was submitted
  
  $input = $_GET['inputText']; //get input text
  $message = "Success! You entered: ".$input;
//  echo $message;
  
  if(is_numeric($input)){
	  echo $input*10;
  }
  else{
	  echo "not a number";
  }

}    
?>

<html>
<body>    
<form action="" method="GET">

  <input type="text" name="inputText"/>
  <input type="submit" name="SubmitButton"/>
</form>    
</body>
</html>