<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">	
</head>
<title>
</title>

<body>


<?php
$month = ''; // 月份 
$year = ''; // 年份 
$today = '';
$week = array ( //以陣列設定週日~週六
0 => "週日",
1 => "週一",
2 => "週二",
3 => "週三",
4 => "週四",
5 => "週五",
6 => "週六");
$month = ($month=="") ? date("m"):"$month"; // 月份 
$year = ($year=="") ? date("Y"):"$year"; // 年份 
$today = ($today=="") ? date("d"):"$today"; //日期
$m_days = date("t", mktime(0, 0, 0, $month, 1, $year)); //判斷每個月有幾天
$day = date( "w", mktime(0, 0, 0, $month, 1, $year)); //判斷每個月1號是星期幾
$Dtmp = ($m_days - $today);
$Dtmp-=1;
$todaytmp = (86400*$Dtmp);
$timetmp = (time()-$todaytmp);
$weekTMP = date("w",$timetmp);
?>

<table border=1 width="50%" align="center">

<?php
for ($i=0 ; $i<=6 ; $i++){
echo "<td align=center><font color=\"#000000\">$week[$i]</font></td>";
}
for($t=0;$t <=31;$t++){

if(($t%7) == 0 || ($t%7) == 6){ 
	if(($t%7) == 0){ 
	    echo "</tr>\n"; 
	    echo "<tr>\n"; 
	} 

if($weekTMP == 0 || $weekTMP == 6){
echo "<td align=center bgcolor=\"#ff0000\">".date("d",$timetmp)."</td>";
$weekTMP = date("w",$timetmp+=86400);

}else if($weekTMP != 0 && $weekTMP != 6){

echo "<td align=center bgcolor=\"#ff0000\">".date("d",$timetmp)."</td>";
$weekTMP = date("w",$timetmp+=86400);

}

}else{
if($weekTMP == 0 || $weekTMP == 6){
echo "<td align=center bgcolor=\"#ffffff\">".date("d",$timetmp)."</td>";
$weekTMP = date("w",$timetmp+=86400);

}else if($weekTMP != 0 && $weekTMP != 6){

echo "<td align=center bgcolor=\"#ffffff\">".date("d",$timetmp)."</td>";
$weekTMP = date("w",$timetmp+=86400);

}
}
}
?>



</body>	


</html>
