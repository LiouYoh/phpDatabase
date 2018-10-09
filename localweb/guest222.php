<?php

session_start();


if (!isset($_SESSION['name'])) {
    $_SESSION['name'] = array();
}
if (!isset($_SESSION['price'])) {
    $_SESSION['price'] = array();
}    


$name = $_POST['name'];
$price = $_POST['price'];

array_push($_SESSION['name'], $name);
array_push($_SESSION['price'], $price);

print_r($_SESSION['name']);
echo "<br>";
print_r($_SESSION['price']);

?>

<html>
<body>


<form action="" method="POST" >
<label>Moovie name: <input type="text" name="name" /></label><br />
<label>Price: <input type="text" name="price" /></label><br />
<input type="submit" value="Send" />
</form>

</body>
</html>