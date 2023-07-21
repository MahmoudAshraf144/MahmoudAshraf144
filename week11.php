<?php 

// echo date_default_timezone_get();
// echo "<br>";
// echo date_default_timezone_set("Africa/Cairo");
// echo "<br>";
// echo date_default_timezone_get();
// echo "<br>";
// $d = date_create("now", timezone_open("Africa/Cairo"));

// echo date_format($d, "d/m/Y");
// echo "<br>";
// var_dump(checkdate(9, 1, 2002));
// echo "<br>";


// date_default_timezone_set("Africa/Cairo");

// $d = date_create();

// date_add($d, date_interval_create_from_date_string("2 months"));

// date_sub($d, date_interval_create_from_date_string("2 months"));

// date_modify($d, "+1 year");

// echo date_format($d, "d/m/Y h:i:s a");

date_default_timezone_set("Africa/Cairo");

echo time();

echo "<br>";

echo time() / 60;

echo "<br>";

echo time() / 60 / 60;

echo "<br>";

echo time() / 60 / 60 / 24;

echo "<br>";

echo time() / 60 / 60 / 24 / 365;


echo "<pre>";
print_r(getdate());
echo "</pre>";

echo "<br>";

echo "<pre>";
print_r(date_parse("2023-7-19 4:16:20"));
echo "</pre>";

echo "<br>";

$first_date = date_create("2022-01-09");
$now = date_create("now");

$diff = date_diff($first_date, $now);

echo "<pre>";
print_r($diff);
echo "</pre>";

echo "You are a member for " . $diff->days . " Days and " . $diff->m . " months";

echo "<br>";

echo date("Y-m-d", strtotime("next friday"));

echo "<br>";

echo date("Y-m-d H:i:s a", strtotime("next year"));

echo "<br>";

echo date("Y-m-d H:i:s a", strtotime("tomorrow", strtotime("01-09-2002")));

echo "<br>";








?>