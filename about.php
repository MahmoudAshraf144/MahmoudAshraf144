<?php

session_start();

// isset($_SESSION["views"]) ? $_SESSION["views"]++ : $_SESSION["views"] = 1;

echo "Hello " . $_SESSION["name"] . " Your views is " . $_SESSION["views"];



?>