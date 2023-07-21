<?php

echo (int) (15.2 + 14.7 + (10.5 + 10.5)); // 50

    echo "<br>";

    echo gettype((int) (15.2 + 14.7 + (10.5 + 10.5))); // Integer  

    echo "<br>";

    echo gettype(10);
    echo "<br>";
    echo is_int(10);
    echo "<br>";
    echo is_float(10.5);
    echo "<br>";
    echo is_double(10); //don't print true
    echo "<br>";
    echo "Hello \"Elzero\" \\\\ \"\"\" We Love \"\$\$PHP\"";
    echo "<br>";
    echo nl2br("We 
     Love 
    Elzero 
    Web
    School");

    echo "<br>";

    echo <<< 'Now'
    
    Hello "'Elzero'"
    We Love $Programming$
    Languages Specially "PHP"

    Now;
    echo "<br>";
    $something = "Programming";

    echo <<< code
            Hello \PHP\
            We Love $something
            code;

    echo "<br>";



?>