<?php

session_start();
session_unset();
require_once("../include/gpsvars.php");
require_once("../include/configure.php");
require_once("../include/db_func.php");
$db_conn = connect2db($dbhost, $dbuser, $dbpwd, $dbname);
$ErrMsg = "";
if (!isset($ID)) $ID = "";
if (isset($Submit)) {
			
			echo $sqlcmd = "SELECT * FROM user WHERE loginid='$ID' AND valid='Y'";
		    $rs = querydb($sqlcmd, $db_conn);
			echo "</br>";
			print_r($rs);
}
?>
<HTML>
<HEAD>
<meta HTTP-EQUIV="Content-Type" content="text/html; charset=utf8">
<meta HTTP-EQUIV="Expires" CONTENT="Tue, 01 Jan 1980 1:00:00 GMT">
<meta HTTP-EQUIV="Pragma" CONTENT="no-cache">
<link rel="stylesheet" title="Default" href="/include/i4010.css" type="text/css" />
<title>登入系統</title>
</HEAD>
<script type="text/javascript">
<!--
function setFocus()
{
<?php if (empty($ID)) { ?>
    document.LoginForm.ID.focus();
<?php } else { ?>
    document.LoginForm.PWD.focus();
<?php } ?>
}
//-->
</script>
<body onload="setFocus()">
<div style="text-align:center;margin-top:20px;font-size:30px;font-weight:bold;">
I4010 網頁程式設計與安全實務
</div>
<div style="text-align:center;margin:20px;font-size:20px;">
程式設計：包蒼龍
</div>
<div style="text-align:center">
請於輸入框中輸入帳號與密碼，然後按「登入」按鈕登入。
<form method="POST" name="LoginForm" action="">
<table width="300" border="1" cellspacing="0" cellpadding="2"
align="center" bordercolor="Blue">
<tr bgcolor="#FFCC33" height="35">
<td align="center">登入系統
</td>
</tr>
<tr bgcolor="#FFFFCC" height="35">
<td align="center">帳號：
  <input type="text" name="ID" size="16" maxlength="16"
	value="<?php echo $ID; ?>">
</td>
</tr>
<tr bgcolor="#FFFFCC" height="35">
<td align="center">密碼：
  <input type="password" name="PWD" size="16" maxlength="16">
</td>
</tr>
<tr bgcolor="#FFCC33" height="35">
<td align="center">
  <input type="submit" name="Submit" value="登入">
</td>
</tr>
</table>
</form>
<?php if (!empty($ErrMsg)) echo $ErrMsg; ?>
</body>
</html>