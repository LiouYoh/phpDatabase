<?php

$n1 = '';
$nresult = '';
if(isset($_post['n1'])){
	$n1 = $_post['n1'];
	$nresult = $n1 *10;
	
}
?>

<html>
<body>

<form method = "post" action="">
number :<input type ="text" name ="n1" size="20" value = "<?php echo $n1;?>">
<br />
<input type = "submit" name = "send" value ="push">
</form>

<br><br><br><br><br>
<?php echo $nresult;?>

</body>

</html>
