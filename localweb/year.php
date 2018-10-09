<?php

function distance($x,$y){
	return (sqrt($x*$x + $y*$y));
}
function InInside($x,$y){
	$Inside = FALSE;
	if(sqrt($x*$x+$y*$y)<=1) $Inside =TRUE;
	return $Inside;
}
session_start();
if(!isset($_SESSION['InCount'])) $_SESSION['$InCount'] = 0;
if(!isset($_SESSION['LCount'])) $_SESSION['$LCount'] = 0;
$InsideCount = 0;
$LoopCount = 10000;

for($i =0;$i<$LoopCount;$i++){
	$x = mt_rand(0,1000000)/1000000;
	$y = mt_rand(0,1000000)/1000000;
	if(InInside($x,$y)) $InsideCount++;
}

$InsideCount += $_SESSION['$InCount'];
$LoopCount += $_SESSION['$LCount'];

$_SESSION['$InCount'] = $InsideCount;
$_SESSION['LCount'] = $LoopCount;

$Area = $InsideCount / $LoopCount;
$pi = $Area *4;


?>


<html>
<head>
<META HTTP-EQUIV = "Refresh" CONTENT = "5">
<title>pi</title>
</head>

<body>
<div style = "text-align:center;margin-top:60px;font-size=20px;">

計算面積<br>
<?php
echo '面積 = '.$Area;
echo '<br>'."pi =".$pi;

?>
</div>
</body>
</html>
