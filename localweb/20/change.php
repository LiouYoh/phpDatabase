


<html>

<head>
<title>calendar</title>
</head>
<body>




<FORM ACTION="" METHOD=POST>

<SELECT NAME="year" onchange="this.form.submit()">
<?php
	$years = $_POST['year']; //get input text
	for($x=2017;$x<=2026;$x++){
		if($years == $x){
			echo "<OPTION selected VALUE=$x >$x year";
		}
		else{
			echo "<OPTION VALUE=$x >$x year";
		}
		
	}
?>
</SELECT>
<SELECT NAME="month" onchange="this.form.submit()">
<?php
	$months = $_POST['month']; //get input text
	for($x=1;$x<=12;$x++){
		if($months ==$x){
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
	$YM=0;
	$day=0;
	if(isset($_POST['submit'])){
		
		$YM = $_POST['year'].'-'.$_POST['month'];
		$day=getthemonth($YM);
		
	}
 
    function getthemonth($date)
    {
        $firstday = date('Y-m-01', strtotime($date));//���o�Ӥ��������Ĥ@��
        $lastday = date('Y-m-d', strtotime("$firstday +1 month -1 day"));//���o�Ӥ��������̫�@��
        return array($firstday,$lastday);
    }
     
             
	$dayCount = date("t",strtotime($day[0]));//�`�@���X��
	$weekday  = date('w',strtotime($day[0]));//�Ĥ@�ѬO§���X
 
    
    $d_last=$dayCount+$weekday-1;//�Y�Ĥ@�Ѥ��O§���� 
    echo '<br/>';
    
?>
<div style="width:1024">
<?php
	
    $i=1;
    for($x=0;$x<=41;$x++){//���42��
        echo '<div style="background-color:'.($x+1>$weekday && $x<=$d_last?'#f0f0f0':'#ffffff')//
        .';width:140px;height:140px;float:left; border:#ffffff 1px solid;">'
        .($x+1>$weekday && $x<=$d_last ? $i:'')."</div>";
        $i=($x+1>$weekday?$i+1:1);
    }

?>
</div>

</body>
</html>