<?php
$_SESSION['ids'] = array('strawberry', 'banana', 'apple');
    array_push($_SESSION['ids'], 'mango');
//    var_dump($_SESSION['ids'][0]);
	echo implode('<br>', $_SESSION['ids']);
?>

<html>
<body>
<?php
//unset($_SESSION["gg"]);
//session_unset(); 
?>
</body>
</html>