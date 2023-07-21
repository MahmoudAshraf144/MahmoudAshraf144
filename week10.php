<?php

echo disk_total_space("C:") / 1024 / 1024 / 1024;
echo "<br>";
echo disk_free_space("C:") / 1024 / 1024 / 1024;
echo "<br>";
var_dump(file_exists("week10.php"));
echo "<br>";
echo filesize("week10.php");
echo "<br>";
var_dump(is_dir(".dist"));
echo "<br>";
var_dump(is_dir("test.txt"));
echo "<br>";
// mkdir("test", 0700, true);
echo "<br>";
// @rmdir("test");
// echo "<br>";
// echo fileperms("test");
// echo "<br>";
// chmod("test", 0644);
// clearstatcache();
// echo fileperms("test");
echo "<br>";
echo basename(__FILE__);
echo "<br>";
echo basename(__FILE__, ".php");
echo "<br>";
echo dirname(__FILE__, 1);
echo "<br>";
echo realpath(__FILE__);
echo "<br>";
echo "<pre>";
print_r(pathinfo(__FILE__));
echo "</pre>";
echo pathinfo(__FILE__) ["dirname"];
echo "<br>";
echo pathinfo(__FILE__, PATHINFO_DIRNAME);
echo "<br>";
echo pathinfo(__FILE__, PATHINFO_BASENAME);
echo "<br>";
echo "<pre>";
print_r(pathinfo(__FILE__, PATHINFO_ALL));
echo "</pre>";
echo "<br>";
// $handle = fopen("test.txt", "r");
// echo "<br>";
// $handle = fopen("test.php", "r+");
// echo "<br>";
// $handle = fopen("test.php", "w");
// echo "<br>";
// $handle = fopen("test.php", "w+");
// echo "<br>";
// echo fgets($handle, 4);
// echo "<br>";
// echo fread($handle, 1024);
// echo "<br>";
// fclose($handle);
// echo "<br>";
// $handle = fopen("test.txt", "a+");
// echo fread($handle, 1024);
// fwrite($handle, "\r\nAbdelaziz");
// echo "<br>";
// fclose($handle);
// echo "<br>";
// ftell();
// fseek();
// rewind();
// echo "<br>";
// glob();
// rename();
// copy();
// unlink();
// echo "<br>";


// echo get_include_path();

// echo "<br>";

// echo file_get_contents("test.txt", true, null, 4, 20);

// echo "<br>";

// echo file_get_contents("https://google.com");

// echo "<br>";

file_put_contents("test.txt", "\r\nHi Mahmoud, How are you", FILE_APPEND);

echo "<br>";

echo file_put_contents("test.txt", "\r\nThanks", FILE_APPEND);




?>