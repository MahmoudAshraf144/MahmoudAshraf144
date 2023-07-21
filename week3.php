<?php

$username = "Mahmoud" ;

echo $username;
echo "<br>";

// include("week2.php");


$a = "Mahmoud";
echo $a;
echo "<br>";
$$a = "ashraf";
echo $$a;
echo "<br>";
echo $Mahmoud;
echo "<br>";
echo "Hello ${$a}"; // print $$a

$x = "Mahmoud";
$y = &$x;
$y = "Ashraf";
echo "<br>";
echo $x;
echo "<br>";
echo $y;

echo "<br>";

// echo "<pre>";
// print_r($_SERVER);
// echo $_SERVER["HTTP_CONNECTION"];
// echo "</pre>";


echo $_POST["username"];

echo "<br>";

define("DB_name", "Mahmoud", false);
define("number", 10, false);

echo DB_name,"<br>", number;

echo "<br>";

echo PHP_VERSION;
echo "<br>";
echo __FILE__;
echo "<br>";
echo __DIR__;
echo "<br>";
echo __LINE__;
echo "<br>";



?>

<form action="" method="post">
    <input type="text" name="username">
    <input type="submit" value="send">
</form>