<?php 

// cookies

// Examples
//     Popup
//     Custom Settings
//     Remember Me => Login

//      setcookie(Name[Required], Value, Expire, Path, Domain, Secure, HTTP_Only);
//     Name
//     Value
//     Expire
//     Path
//     Domain
//     Secure
//     HTTP_Only

// Important
    // DO NOT Store Sensitive Information
    // Not Everything Saved To Cookies

/////////////////////////////////////////////////////////////////////////////////////////////////////

// set cookie and how to use it

// setcookie("style", "dark", time() + 60 * 60 * 24 * 30, "/");
// setcookie("mood", "focus", strtotime("+1 year"));

// echo "<pre>";
// print_r($_COOKIE);
// echo "</pre>";

// echo $_COOKIE["style"];

// echo "<br>";

/////////////////////////////////////////////////////////////////////////

// Modify
// Delete 
// Add Array

// setcookie("style", "dark");
// setcookie("style", "light", strtotime("+1 year"));
// setcookie("style", "light", time() + 10);
// setcookie("style[color]", "red");
// setcookie("style[font]", "arias");



// echo "<pre>";
// print_r($_COOKIE);
// echo "</pre>";

//     // if(isset($_COOKIE["style"])) {
//     //     echo $_COOKIE["style"];
//     // }
// if(isset($_COOKIE["style"])) {
//     echo $_COOKIE["style"]["color"];
// }

/////////////////////////////////////////////////////////////////////////

// Sessions

session_start();

// $_SESSION["name"] = "Mahmoud";
// $_SESSION["ID"] = 3095;

// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";

// echo "<a href='test.php'>Test</a>";


##########################

// Edit session

$_SESSION["name"] = "Mahmoud";
// echo "<br>";
// echo session_id();
// echo "<br>";

isset($_SESSION["views"]) ? $_SESSION["views"]++ : $_SESSION["views"] = 1;

echo "Hello " . $_SESSION["name"] . " Your views is " . $_SESSION["views"];

echo "<br>";

echo "<a href='about.php'>About</a>";



?>