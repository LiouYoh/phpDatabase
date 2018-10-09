<html>
<head>  
<title>網頁程式範例首頁</title> 
</head>
<body>
<div style="text-align:center;margin-top:50px;font-size:30px;font-weight:bold;">I4010 網頁程式設計與安全實務</div>
<?php
/*$array = array(
    'fruit1' => 'apple',
    'fruit2' => 'orange',
    'fruit3' => 'grape',
    'fruit4' => 'apple',
    'fruit5' => 'apple');

// this cycle echoes all associative array
// key where value equals "apple"
$i=1;
while($i<4){
	
while ($fruit_name = current($array)) {
    if ($fruit_name == 'apple') {
        echo key($array).'<br />';
    }
    next($array);
}
reset($array);	
$i++;	
	
}
*/
?>
<?php


$kind = array(1,2,3,4,5);
if (in_array(1, $kind)) {
	array_push($kind,99);
	
}
print_r($kind);	
?>


</body>
</html>