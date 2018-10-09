<html>
<head>  
<title>網頁程式範例首頁</title> 
</head>
<body>
<div style="text-align:center;margin-top:50px;font-size:30px;font-weight:bold;">
I4010 網頁程式設計與安全實務</div>

<div style="text-align:left;margin-top:60px;font-size:20px;">
<?php




$stack = array();
for($i=0;$i<=360; $i+=6){
	$m = deg2rad($i);
	$temp = round(sin($m)*100)+100;
	array_push($stack, $temp);
}
//print_r($stack);

/*
for($i=200;$i>=0;$i--){
$tempBefor=0;
while ($fruit_name = current($stack)) {
//	echo $fruit_name."<br>";
    if ($fruit_name == $i) {
        //echo key($stack)."&nbsp&nbsp&nbsp".$i.'<br />';
		$space=key($stack)-$tempBefor;
		for($g=0;$g<$space;$g++){
			echo "&nbsp";
		}
		echo 6*key($stack)."&nbsp&nbsp";
		$tempBefor = key($stack);
		
    }
    next($stack);
}
reset($stack);	
echo "<br>";
$tempBefor = 0;
}
*/


for($i=200;$i>=0;$i--){


 for($j = 0; $j <= 60; $j++){
  if($i == $stack[$j]){
   echo '*';
  }else{
   echo "&nbsp&nbsp";
  }
 }
 echo '<br />';
}
	


?>

</div>
</body>
</html>

<?php

/*
for($i=0;$i<60; $i++){
	$angle=$i*10/180*3.1416;
	$x=sin($angle);
	$x=round(($x+1) * 20, 0);
	echo'<br />';
	echo $x;
		for($j=0;$j<$x;$j++) echo'&nbsp;';
	echo '*' . $x;
}

*/
/*
$m = deg2rad(360); // 0.785398163397
echo(sin($m));

echo(sin(M_PI));
echo(sin(M_PI_2))
*/

/*
echo "<br>";
echo (M_PI);
echo "<br>";
$m = deg2rad(180);
echo (round(sin($m)));
//echo (round(sin(M_PI)));
//echo(sin(M_PI));
echo "<br>";
echo (M_PI_2);
echo "<br>";
echo(sin(M_PI_2));
*/
?>





