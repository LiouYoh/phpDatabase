
<html>

<head>
<title>calendar</title>
</head>
<body>

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


<?php
	function calendar($setdate)
	{
		// 設定星期參數
		$week_day =	array("日","一","二","三","四","五","六");
		$date_count = 1;
		
		// 取得年月日參數
		if($setdate==NULL)
		{
			$current_yr	= date("Y", time());
			$current_mo = date("m", time());
			$current_da = date("j", time());
		} else {
			$current_yr = (int)($setdate / 100);
			if(($setdate % 100) > 12)
			{
				$current_mo = ($setdate % 100) - 12;
			} else
			if(($setdate % 100) < 1)
			{
				$current_mo = ($setdate % 100) + 12;
			} else {
				$current_mo = ($setdate % 100);
			}
		}
		
		// 取得月份相關參數
		$start_date = (intval((date("U", mktime(0,0,0,$current_mo,1,$current_yr)) / 86400)));
		$start_week = date("w", mktime(0,0,0,$current_mo,1,$current_yr));
		$today_date = (intval((date("U", mktime(0,0,0,$current_mo,$current_da,$current_yr)) / 86400)));
		$ended_date = (intval((date("U", mktime(0,0,0,$current_mo+1,0,$current_yr)) / 86400)));
		$ended_date = (strftime("%d", $ended_date));
		
		// 輸出月曆
		echo "<table width=\"150\">\n";
		echo "	<tr>\n";
		// 先前一月
		echo "		<td><center><a href=\"?setdate=";
		if($current_mo == 1)
		{
			$ym = ($current_yr-1)*100 + 12;
			echo "$ym";
		} else {
			$ym = $current_yr*100+$current_mo-1;
			echo "$ym";
		}
		echo "\"><strong><<</strong></a></td>\n";
		// 目前月份
		$ym = ($current_yr*100+$current_mo);
		echo "		<td><center><a href=\"?setdate=$ym\"><strong>";
		switch($current_mo)
		{
			case 1 : echo "$current_yr"." Jan"; break;
			case 2 : echo "$current_yr"." Feb"; break;
			case 3 : echo "$current_yr"." Mar"; break;
			case 4 : echo "$current_yr"." Apr"; break;
			case 5 : echo "$current_yr"." May"; break;
			case 6 : echo "$current_yr"." Jun"; break;
			case 7 : echo "$current_yr"." Jul"; break;
			case 8 : echo "$current_yr"." Aug"; break;
			case 9 : echo "$current_yr"." Sep"; break;
			case 10: echo "$current_yr"." Oct"; break;
			case 11: echo "$current_yr"." Nov"; break;
			default: echo "$current_yr"." Dec";
		}
		echo "</strong></a></td>\n";
		// 之後一月
		echo "		<td><center><a href=\"?setdate=";
		if($current_mo == 12)
		{
			$ym = ($current_yr+1)*100 + 1;
			echo "$ym";
		} else {
			$ym = $current_yr*100+$current_mo+1;
			echo "$ym";
		}
		echo "\"><strong>>></strong></a></td>\n";
		echo "	</td>\n";
		echo "</table>\n";
		
		echo "<table width=\"170\">\n";
		echo "	<tr>\n";
		// 輸出星期序列
		for($a=0;$a<7;$a++){
			if($a==0 || $a==6)
			{
				echo "<td><center><font color=\"FF0000\"><strong>$week_day[$a]</strong></font></center></td>\n";
			} else {
				echo "<td><center><strong>$week_day[$a]</strong></center></td>\n";
			}
		}
		echo "</tr>\n";
		// 輸出月曆部份
		for($i=1;$i<=6;$i++){
			if($date_count > $ended_date)
			{
				$date_count = 1;
				break;
			}
			echo "	<tr align=\"center\" valign=\"middle\">";
			for($row=1;$row<8;$row++){
				if($row<=$start_week)
				{
					echo "		<td>&nbsp;</td>";
				} else {
					if($date_count==$current_date)
					{
						echo "		<td bgcolor=\"#DBBE94\"><strong>$date_count</strong></td>";
					} else {
						echo "		<td>$date_count</td>";
					}
					$date_count++;
				}
			}
			echo "</tr>";
		}
		echo "</table>";
	}
?>


</body>
</html>