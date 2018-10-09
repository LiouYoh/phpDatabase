<?php
if(isset($_POST['submit'])){ //check if form was submitted
  
  $years = $_POST['year']; //get input text
  $months = $_POST['month'];
//  echo $message;
  
//  echo "$years<br>$months";

}    
?>

<html>

<head>
<title>calendar</title>
</head>
<body>




<FORM ACTION="" METHOD=POST>

<SELECT NAME="year" >
<?php
	$years = $_POST['year']; //get input text
	for($x=2017;$x<=2026;$x++){
		if($years == $x){
			echo "<OPTION selected VALUE=$x >$x 年";
		}
		else{
			echo "<OPTION VALUE=$x >$x 年";
		}
		
	}
?>
</SELECT>
<SELECT NAME="month" >
<?php
	for($x=1;$x<=12;$x++){
		if($months ==$x){
			echo "<OPTION selected VALUE=$x >$x 月</Option>";
		}
		else{
			echo "<OPTION VALUE=$x >$x 月</Option>";
		}
		
		
	}
?>
</SELECT>
<INPUT TYPE=SUBMIT name = "submit" VALUE="傳遞" >
</FORM>






</body>
</html>