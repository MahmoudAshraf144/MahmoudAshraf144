<?php

$a = 100;
$b = 200;
$c = 100;


if($b > $a) {
    if($a == $c) {
        if ($a + $c == $b) {
            echo "Yes";
        }
    }
}

echo "<br>";

$user = "mahmoud";

switch($user) {
    case "mahmoud":
        echo "Yes username $user is true";
        break;
    case "abbas":
        echo "Username is false true username is $user";
        break;

    }
    
echo "<br>";

for($i=10;$i>=1;$i--) {
    echo $i ."<br>";
}
echo "<br>";

$m=10;
while($m>0) {
    echo $m . "<br>";
    $m--;
}

echo "<br>";
$m=10;
do {
    echo $m . "<br>";
    $m--;
} while($m>0);

echo "<br>";

$colors = array("red" => "R", "green" => "G", "blue" => "B");

foreach($colors as $color => $refer) {
    echo "The list of the colors is $color and the refernce of every color is $refer <br> ";
}



?>
