<?php
session_start();

if(isset($_SESSION['views']))
  $_SESSION['views']=$_SESSION['views']+1;

else
  $_SESSION['views']=1;
  
echo "views=". $_SESSION['views'];

?>




<html>
<body>
<?php
//unset($_SESSION["gg"]);
//session_unset(); 
?>
</body>
</html>