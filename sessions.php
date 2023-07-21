<?php

/*
    Sessions
        Unset and Destroy
        Login and Logout simulation
*/

#######################################

session_start();

// $_SESSION["name"] = "Mahmoud";
// session_unset();
// session_destroy();

#######################################

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if ($_POST["user"] == "Mahmoud") {
        $_SESSION["name"] = "Mahmoud";
        $_SESSION["id"] = 3095;
    }
}

echo "<pre>";
print_r($_SESSION);
echo "</pre>";

if (isset($_SESSION["name"])) {
    echo "Hello " . $_SESSION["name"];
    echo "<br>";
} else { 

?>


<form action="" method="POST">
    <input type="text" name="user">
    <input type="submit" value="login">
</form>

<?php } ?>

<a href="logout.php">Logout</a>
