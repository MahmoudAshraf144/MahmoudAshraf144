<?php 

echo abs(-20);
echo "<br>";
echo rand(-20, 20);
echo "<br>";
echo rand();
echo "<br>";
echo getrandmax();
echo "<br>";
echo gettype(intdiv(11, 5));
echo "<br>";
echo gettype(fmod(11, 5));
echo "<br>";
echo ceil(11.01);
echo "<br>";
echo ceil(11.5);
echo "<br>";
echo ceil(11.2);
echo "<br>";
echo ceil(11.88);
echo "<br>";
echo floor(11.01);
echo "<br>";
echo floor(11.5);
echo "<br>";
echo floor(11.2);
echo "<br>";
echo floor(11.88);
echo "<br>";
echo round(11.01);
echo "<br>";
echo round(11.5);
echo "<br>";
echo round(11.2);
echo "<br>";
echo round(11.88);
echo "<br>";
echo round(4.9, 0);
echo "<br>";
echo round(4.95, 1);
echo "<br>";
echo round(4.94, 1);
echo "<br>";
echo round(4.949, 2);
echo "<br>";
echo sqrt(2);
echo "<br>";
echo sqrt(9);
echo "<br>";
echo min(10, 20, 30, -20 ,40);
echo "<br>";
echo max(10, 20, 30, -20 ,40);
echo "<br>";
print_r(min([1, 3, 5], [1, 2, 6]));
echo "<br>";
echo "<pre>";
print_r(filter_list());
echo "</pre>";
echo "<pre>";
print_r(filter_id("boolean"));
echo "</pre>";
echo "<br>";

$val = true;

if (filter_var($val, FILTER_VALIDATE_BOOL)) {
    echo "True";
} else {
    echo "False";
}
echo "<br>";


$bool = true;
$boool = "dsfdsf";

var_dump(filter_var($bool, FILTER_VALIDATE_BOOL));
echo "<br>";
var_dump(filter_var($boool, FILTER_VALIDATE_BOOL, FILTER_NULL_ON_FAILURE));
echo "<br>";
$url = "https://google.com";
$urll = "google.com";
var_dump(filter_var($url, FILTER_VALIDATE_URL));
echo "<br>";
var_dump(filter_var($urll, FILTER_VALIDATE_URL, FILTER_NULL_ON_FAILURE));
echo "<br>";
var_dump(filter_var($urll, FILTER_VALIDATE_URL, FILTER_FLAG_PATH_REQUIRED));
echo "<br>";
var_dump(filter_var($urll, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED));
echo "<br>";
var_dump(filter_var($urll, FILTER_VALIDATE_URL, ["flages" => FILTER_NULL_ON_FAILURE | 
                                                             FILTER_FLAG_PATH_REQUIRED | 
                                                             FILTER_FLAG_QUERY_REQUIRED]));
echo "<br>";
$ip = "192.168.1.1";
var_dump(filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4));
echo "<br>";
$mac = "00-B0-D0-63-C2-26";
var_dump(filter_var($mac, FILTER_VALIDATE_MAC));
echo "<br>";
$email = "m@m.m";
var_dump(filter_var($email, FILTER_VALIDATE_EMAIL));
echo "<br>";
$int = "5";
var_dump(filter_var($int, FILTER_VALIDATE_INT, FILTER_NULL_ON_FAILURE));
echo "<br>";
$float = "5.5";
var_dump(filter_var($int, FILTER_VALIDATE_FLOAT, FILTER_NULL_ON_FAILURE));
echo "<br>";

$e_mail = "m     @  ♥   m  .m  m";
var_dump(filter_var($e_mail, FILTER_SANITIZE_EMAIL));
echo "<br>";
$intt = "100 + LEWJTALIE;LLSfl;dgnsdglkn500";
var_dump(filter_var($intt, FILTER_SANITIZE_NUMBER_INT));
echo "<br>";
$floatt = "1,987,789.8";
var_dump(filter_var(
    $floatt, 
    FILTER_SANITIZE_NUMBER_FLOAT,
    FILTER_FLAG_ALLOW_THOUSAND | FILTER_FLAG_ALLOW_FRACTION
));
echo "<br>";
$uurl = "https://         go ♥ og  le.com";
var_dump(filter_var($uurl, FILTER_SANITIZE_URL));
echo "<br>";

// echo $GET["name"];
echo filter_input(INPUT_GET, "name", FILTER_SANITIZE_NUMBER_INT)

?>

<form action="" method="GET">
    <input type="text" name="name">
    <input type="submit" name="submit">
</form>