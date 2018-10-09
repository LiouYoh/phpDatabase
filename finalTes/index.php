I4A64劉宥廷<br/>

<?php

session_start();
$DocumentRoot = '/var/www/html/i4010web';
require_once($DocumentRoot . "/include/gpsvars.php");
require_once($DocumentRoot . "/include/configure2.php");
require_once($DocumentRoot . "/include/db_func.php");
require_once ($DocumentRoot . '/Classes/PHPExcel/IOFactory.php');
require_once('../include/db_func.php');
require_once("../lib/PHPMailer/PHPMailerAutoload.php");
$db_conn = connect2db($dbhost, $dbuser, $dbpwd, $dbname);

$sqlcmd = "SELECT * FROM studentinfo";
$rs = querydb($sqlcmd, $db_conn);
$number=count($rs);

for($a=0;$a<$number;$a++){
	$student_id=$rs[$a]['student_id'];
	$student_name=$rs[$a]['student_name'];
	$sqlcmd2 = "SELECT score FROM score WHERE student_id='".$student_id[$a]."'";
	$rs2 = querydb($sqlcmd2, $db_conn);
	echo $rs2;
	echo $student_id;
	echo $student_name;
//	echo $credit;
	echo "<br>";
}


$mail = new PHPMailer();
$mail->IsSMTP();
//$mail->SMTPDebug = 2;                                        
$mail->SMTPAuth = true;
$mail->SMTPSecure = "ssl";
$mail->Host = "smtp.gmail.com";
$mail->Port = 465;
$mail->CharSet = "utf-8";
$mail->Encoding = "base64";
$mail->WordWrap = 500;
$mail->Username = "u10206164@ms.ttu.edu.tw";
$mail->Password = "kiki667719";
$mail->SetFrom('u10206164@ms.ttu.edu.tw', '劉宥廷');
$mail->Subject = '測試郵件';
$eMail = 'ttucsetlpao@gmail.com';
$Notice = "您好\n\n這是410306164小考四信件\n\n劉宥廷";
$mail->AddAddress($eMail, $eMail);
$mail->Body = $Notice;
	
	//$mail->Send();
if($mail->Send()){
	echo "Sucess!<br />";
}else{
	echo $mail->ErrorInfo . "<br />";
}
$mail->ClearAllRecipients();

?>