I3B33彭思誥<br/>

<?php
function swap(&$x,&$y) {
    $tmp=$x;
    $x=$y;
    $y=$tmp;
}
require_once("../lib/PHPMailer/PHPMailerAutoload.php");
$mail = new PHPMailer();
$mail->IsSMTP();                                     
$mail->SMTPAuth = true;
$mail->SMTPSecure = "ssl";
$mail->Host = "smtp.gmail.com";
$mail->Port = 465;
$mail->CharSet = "utf-32";
$mail->Encoding = "base64";
$mail->WordWrap = 500;
$mail->Username = "u10306233@ms.ttu.edu.tw";
$mail->Password = "F129225087";
$mail->SetFrom('u10306233@ms.ttu.edu.tw', 'I3B33彭思誥');
$mail->Subject = 'I4010期末考_I3B33_彭思誥';

session_start();
$DocumentRoot = '/var/www/html/i4010web';
require_once($DocumentRoot . "/include/gpsvars.php");
require_once($DocumentRoot . "/include/configure2.php");
require_once($DocumentRoot . "/include/db_func.php");
require_once ($DocumentRoot . '/Classes/PHPExcel/IOFactory.php');
$db_conn = connect2db($dbhost, $dbuser, $dbpwd, $dbname);
/*
$dbname1 = "i4010finaldb";
$dbhost1 = "140.129.6.160";
$dbuser1 = "i4010user";
$dbpwd1 = "fu6ai4dl3";
$db_conn1 = connect2db($dbhost1, $dbuser1, $dbpwd1, $dbname1);
*/
$sqlcmd = "SELECT * FROM studentinfo";
$rs = querydb($sqlcmd, $db_conn);
$student_id=array();
$student_name=array();
$rank=array();
$average=array();
$Totalcredit=array();
$Totalscore=array();
$a=0;
$b=count($rs);

for($a=0;$a<$b;$a++){
	$student_id[$a]=$rs[$a]['student_id'];
	$student_name[$a]=$rs[$a]['student_name'];
}
for($a=0;$a<$b;$a++){
	$average[$a]=0;
	$Totalcredit[$a]=0;
	$Totalscore[$a]=0;
	$sqlcmd = "SELECT * FROM score WHERE student_id='".$student_id[$a]."'";
	$rs = querydb($sqlcmd, $db_conn);
	foreach ($rs as $item) {
		$Totalcredit[$a]+=$item['credit'];
		$Totalscore[$a]+=$item['score']*$item['credit'];
	}
	if($Totalscore[$a]==0 || $Totalcredit[$a]==0)
		$average[$a]=0;
	else{
		$average[$a]=$Totalscore[$a]/$Totalcredit[$a];
		$average[$a]=round($average[$a],1);
	}
	echo $student_id[$a]." Totalcredit = ".$Totalcredit[$a]."</br>";
	echo $student_id[$a]." score = ".$Totalscore[$a]."</br>";
	echo $student_id[$a]." average = Totalcredit/score = ".$average[$a]."</br>"."</br>";
}

for($a=0;$a<$b-1;$a++){
	if($average[$a]<$average[$a+1]){
		swap($average[$a],$average[$a+1]);
		swap($student_id[$a],$student_id[$a+1]);
		swap($student_name[$a],$student_name[$a+1]);
	}
}
$t=0;
$Notice="";


for($a=0;$a<$b;$a++){
	$t=$a+1;
	$Notice = $Notice."第 ".$t." 名 : ".$student_name[$a]."    學號 : ".$student_id[$a]."   平均 : ".$average[$a]."\n";
	echo $student_id[$a]." ".$student_name[$a]." ".$average[$a]."</br>";
	$sqlcmd="INSERT INTO average (student_id,student_name,average_score,rank) VALUES ('$student_id[$a]','$student_name[$a]','$average[$a]', '$t')";
	updatedb($sqlcmd, $db_conn);
}
	$mail->Subject = 'I4010 期末考_I3B33_彭思誥';
	$mail->AddAddress("ttucsetlpao@gmail.com");
	$mail->Body = $Notice;
	$mail->Send();
	$mail->ClearAllRecipients();





$mail->ClearAllRecipients();

?>