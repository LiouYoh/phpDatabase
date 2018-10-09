
<html>
<head>  <title>calendar</title> </head>
<body>
<div style="text-align:center;margin-top:50px;font-size:30px;font-weight:bold;">
I4A64 劉宥廷</div>

<div style="text-align:center;margin-top:60px;font-size:20px;">
<FORM ACTION="" METHOD=POST>

<SELECT NAME="years" >
<?php
	$year = $_POST['years']; //get input text
	for($x=2017;$x<=2026;$x++){
		if($year == $x){
			echo "<OPTION selected VALUE=$x >$x year";
		}
		else{
			echo "<OPTION VALUE=$x >$x year";
		}
		
	}
?>
</SELECT>
<SELECT NAME="months" >
<?php
	$month = $_POST['months']; //get input text
	for($x=1;$x<=12;$x++){
		if($month ==$x){
			echo "<OPTION selected VALUE=$x >$x month</Option>";
		}
		else{
			echo "<OPTION VALUE=$x >$x month</Option>";
		}
	}
?>
</SELECT>
<INPUT TYPE=SUBMIT name = "submit" VALUE="send" >
</FORM>
</div>

<?php
$arrMonth = array();
$LastDate = '';
if(isset($_POST['submit'])){
	$Year = $_POST['years'];
	$Month = $_POST['months'];
	$FirstDayOfMonth = date('w', mktime(8, 0, 0, $Month, 1, $Year));
	$LastDate = date('j', mktime(8, 0, 0, $Month + 1, 0, $Year));

}
	
	


for($r=0;$r<6;$r++){
	for($c=0;$c<7;$c++){
		$arrMonth[$r][$c] = '';
	}
}
$r=0;
for($d=1;$d<=$LastDate;$d++){
	$c = date('w', mktime(8, 0, 0, $Month, $d, $Year));
	if($c == 0 && $d > 1) $r++;
	$arrMonth[$r][$c] = $d;
}
?>
<table width="400" border="1" align="center">
<tr height="30" align="center">
<td>日</td>
<td>一</td>
<td>二</td>
<td>三</td>
<td>四</td>
<td>五</td>
<td>六</td>
</tr>

<?php
for($r=0;$r<6;$r++){
	if($r > 0 && empty($arrMonth[$r][0])) break;
	echo '<tr height="30" align="center" >';
	for($c=0;$c<7;$c++){
		if($arrMonth[$r][$c] == date("d")){
			echo '<td bgcolor="#0000ff"> ' . $arrMonth[$r][$c] .'</td>';
		}
		else if($c ==6 || $c == 0){
			echo '<td bgcolor="#00FF00"> ' . $arrMonth[$r][$c] .'</td>';
		}
		else{
			echo '<td>' . $arrMonth[$r][$c] . '</td>';
		}
		
	}
	echo '</tr>';
}

?>
</table>

</body>
</html>


