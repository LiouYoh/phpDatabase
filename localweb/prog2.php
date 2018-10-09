<!DOCTYPE html>
<html>
<body>
<p>I4A64劉宥廷 prog2</p>
<p><a href="index.php">back to index</a></p>


<?php

	$times = rand(8,12);
	$kind = array();

	$number = array(2,3,4,5,6,7,8);
	$low = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
	$upp = array('A','B','C','D','E','F','G','H','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
	$spe = array(',',';','/','-');

//	echo count($number);
	
	for($i=1;$i<=$times;$i++){
//		//print_r($kind);
		echo "<br>";
		
		if($i==7){
			echo "[".$i."]";

			if(count($kind)==1){
				if (!in_array("1", $kind)) {
					echo $number[rand(0,count($number)-1)];
					array_push($kind, "1");
				}
				else if(!in_array("2", $kind)) {
					echo $low[rand(0,count($low)-1)];
					array_push($kind, 2);
				}
				else if(!in_array("3", $kind)) {
					echo $upp[rand(0,count($upp)-1)];
					array_push($kind, 3);
				}
				else if(!in_array("4", $kind)) {
					echo $spe[rand(0,count($spe)-1)];
					array_push($kind, 4);
				}
			}
			else{
				$choose = rand(1,4);
				if($choose == 1){
					echo $number[rand(0,count($number)-1)];
					if (!in_array("1", $kind)) {
						array_push($kind, "1");
					}
				}
				if($choose == 2){
					echo $low[rand(0,count($low)-1)];
					if (!in_array("2", $kind)) {
						array_push($kind, 2);
					}
				
				}
				if($choose == 3){
					echo $upp[rand(0,count($upp)-1)];
					if (!in_array("3", $kind)) {
						array_push($kind, 3);
					}
				}
				if($choose == 4){
					echo $spe[rand(0,count($spe)-1)];
					if (!in_array("4", $kind)) {
						array_push($kind, 4);
					}
				}
				
			}
			//print_r($kind);
		}
		else if($i==8){
			echo "[".$i."]";
			if(count($kind)==2){
				if (!in_array("1", $kind)) {
					echo $number[rand(0,count($number)-1)];
					array_push($kind, "1");
				}
				else if(!in_array("2", $kind)) {
					echo $low[rand(0,count($low)-1)];
					array_push($kind, 2);
				}
				else if(!in_array("3", $kind)) {
					echo $upp[rand(0,count($upp)-1)];
					array_push($kind, 3);
				}
				else if(!in_array("4", $kind)) {
					echo $spe[rand(0,count($spe)-1)];
					array_push($kind, 4);
				}
			}
			else{
				$choose = rand(1,4);
				if($choose == 1){
					echo $number[rand(0,count($number)-1)];
					if (!in_array("1", $kind)) {
						array_push($kind, "1");
					}
				}
				if($choose == 2){
					echo $low[rand(0,count($low)-1)];
					if (!in_array("2", $kind)) {
						array_push($kind, 2);
					}
				
				}
				if($choose == 3){
					echo $upp[rand(0,count($upp)-1)];
					if (!in_array("3", $kind)) {
						array_push($kind, 3);
					}
				}
				if($choose == 4){
					echo $spe[rand(0,count($spe)-1)];
					if (!in_array("4", $kind)) {
						array_push($kind, 4);
					}
				}
				}
				//print_r($kind);
		}
		else{
			echo "[".$i."]";
			$choose = rand(1,4);
			if($choose == 1){
				echo $number[rand(0,count($number)-1)];
				if (!in_array("1", $kind)) {
					array_push($kind, "1");
				}
			}
			if($choose == 2){
				echo $low[rand(0,count($low)-1)];
				if (!in_array("2", $kind)) {
					array_push($kind, 2);
				}
				
			}
			if($choose == 3){
				echo $upp[rand(0,count($upp)-1)];
				if (!in_array("3", $kind)) {
					array_push($kind, 3);
				}
			}
			if($choose == 4){
				echo $spe[rand(0,count($spe)-1)];
				if (!in_array("4", $kind)) {
					array_push($kind, 4);
				}
			}
			//print_r($kind);
		}
	}
	
	
?>

</body>
</html>
