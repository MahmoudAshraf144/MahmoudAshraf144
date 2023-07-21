<?php 

echo lcfirst("Mahmoud Ashraf Fouad") . "<br>";
echo ucfirst("mahmoud Ashraf Fouad") . "<br>";
echo strtolower("Mahmoud Ashraf Fouad") . "<br>";
echo strtoupper("Mahmoud Ashraf Fouad") . "<br>";
echo ucwords("mahmoud ashraf fouad", ) . "<br>";
echo ucwords("mahmoud ashraf|fouad", "|") . "<br>";
echo str_repeat("Mahmoud Ashraf Fouad <br>", 2) . "<br>";

echo "#######################";

$names = ["Mahmoud", "Mohamed", "Abbas", "Terbas"];

echo "<br>";
echo implode($names);
echo "<br>";
echo implode(" ", $names);
echo "<br>";
echo implode(", ", $names);
echo "<br>";
echo implode(" - ", $names);

$string = "Mahmoud Ashraf Fouad";
echo "<pre>";
print_r(explode(" ", $string));
echo "</pre>";
echo "<br>";
echo "<pre>";
print_r(explode(" ", $string, 2));
echo "</pre>";
echo "<br>";

echo str_shuffle("Mahmoud");
echo "<br>";
echo strrev("Mahmoud");
echo "<br>";
echo trim("Mahmoud             Ashraf");
echo "<br>";
echo trim("@@@@@@@Mahmoud Ashraf@@@@@@@", "@");
echo "<br>";
echo ltrim("@@@@@@@Mahmoud Ashraf@@@@@@@", "@");
echo "<br>";
echo rtrim("@@@@@@@Mahmoud Ashraf@@@@@@@", "@");
echo "<br>";

echo chunk_split("Mahmoud Ashraf Fouad", 5, "♥");
echo "<br>";
echo strlen("Mahmoud");
echo "<br>";
echo "<pre>";
print_r(str_split("Mahmoud"));
echo "</pre>";
echo "<br>";
echo "<pre>";
print_r(str_split("Mahmoud", 2));
echo "</pre>";
echo "<br>";

echo "<h3>Hello <b>Mahmoud</b></h3>";
echo "<br>";
echo strip_tags("<h3>Hello <b>Mahmoud</b></h3>");
echo "<br>";
echo strip_tags("<h3>Hello <b>Mahmoud</b></h3>", "<h3>");
echo "<br>"; 

echo nl2br("Mahmoud\nAshraf\nFouad", false);
echo "<br>";

var_dump(strpos("Mahmoud", "M", 0));
echo "<br>";
var_dump(strpos("Mahmoud", "M", -1));
echo "<br>";
var_dump(strrpos("Mahmoud", "M", -1));
echo "<br>";
var_dump(stripos("Mahmoud", "M", -1));
echo "<br>";
var_dump(strripos("Mahmoud", "M", -1));
echo "<br>";
var_dump(substr_count("Mahmoud", "M"));
echo "<br>";

parse_str("name=mahmoud&email=m@m.m", $query);
echo "<pre>";
print_r($query);
echo "</pre>";

echo "<br>";

echo "Hello [] () * + - <br>";
echo quotemeta("Hello [] () * + - <br>");
echo "<br>";

echo str_pad("12", 8, 0, STR_PAD_BOTH);
echo "<br>";
echo str_pad("123", 8, 0, STR_PAD_RIGHT);
echo "<br>";
echo str_pad("1234", 8, 0, STR_PAD_LEFT);
echo "<br>";
echo str_pad("12345", 8, 0, STR_PAD_LEFT);
echo "<br>";
echo str_pad("123456", 8, 0, STR_PAD_LEFT);
echo "<br>";

echo strtr("M@hmoud Ashraf", "@", "a");
echo "<br>";
$translate = ["@" =>"a", "#" => "h"];
echo strtr("M@#moud As#r@f", $translate);
echo "<br>";

echo str_replace("@", "M", "@ahmoud", $c);
echo "<br>";
echo "count of replased counts is $c";
echo "<br>";

echo substr_replace("one", 1, 0);
echo "<br>";
echo substr_replace("one", 1, 1);
echo "<br>";
echo substr_replace("one", 1, -1);
echo "<br>";
echo substr_replace("one", 1, 1, 1);
echo "<br>";
echo substr_replace("one", 1, 1, 0);
echo "<br>";

$str= "Welcome Mahmoud Ashraf Fouad";

echo wordwrap($str, 10, "<br>", true);
echo "<br>";
echo ord("a");
echo "<br>";
echo chr(97);
echo "<br>";
echo similar_text("Mahmoud", "Mahmou");
echo "<br>";
similar_text("Mahmoud", "Mahmou", $persent);
echo $persent;
echo "<br>";


echo strstr("Mahmoud Ashraf", "A");
echo "<br>";
echo strstr("Mahmoud Ashraf", "o");
echo "<br>";
echo strstr("Mahmoud Ashraf", "A", true);
echo "<br>";
echo stristr("Mahmoud Ashraf", "a", true);
echo "<br>";
echo number_format(10000000, "3", ".", ",");
echo "<br>";


?>