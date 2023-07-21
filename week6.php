<?php 

function Hello($name) {
    echo "Hello to our World $name <br>";
}

echo Hello("Mahmoud");
echo Hello("Abbas");

echo "<br>";

$prizes = ["PC", "PS5", "Apple", "Laptop", "Ipad"];
function get_number($num1, $num2) {
    // echo $num1 + $num2;
    return ($num1 + $num2);
}

$prize_num = get_number(2, 1);
echo $prizes[$prize_num];

echo "<br>";


// Anonymous Function

$hello = function() {
    return "Hello";
};
echo $hello();

echo "<br>";


// EX.

$message = "Hi";
$hi = function($someone) use ($message) {
    return "$message $someone";
};
echo $hi("Mahmoud");

echo "<br>";

$num = [10, 20, 30, 40];

function add_five($item) {
    return $item + 5;
}

$num_after_add = array_map("add_five", $num);

echo "<pre>";
print_r($num_after_add);
echo "</pre>";


function check_status($a, $b, $c) {
    if(gettype($a) === 'string' && gettype($b) === 'integer' && gettype($c) === 'boolean') {
        if($c == true) {
            return "Hello $a, Your Age is $b, You Are Avilable For Hire";
        } else{
            return "Hello $a, Your Age is $b, You Are Not Avilable For Hire";
        }
        } elseif(gettype($a) === 'string' && gettype($b) === 'boolean' && gettype($c) === 'integer') {
        if($b == true) {
            return "Hello $a, Your Age is $c, You Are Avilable For Hire";
        } else{
            return "Hello $a, Your Age is $c, You Are Not Avilable For Hire";
            } 
        } elseif(gettype($a) === 'integer' && gettype($b) === 'string' && gettype($c) === 'boolean') {
            if($c == true) {
                return "Hello $b, Your Age is $a, You Are Avilable For Hire";
            } else{
                return "Hello $b, Your Age is $a, You Are Not Avilable For Hire";
            }
        } elseif(gettype($a) === 'boolean' && gettype($b) === 'string' && gettype($c) === 'integer') {
            if($a == true) {
                return "Hello $b, Your Age is $c, You Are Avilable For Hire";
            } else{
                return "Hello $b, Your Age is $c, You Are Not Avilable For Hire";
            }
        } elseif(gettype($a) === 'integer' && gettype($b) === 'boolean' && gettype($c) === 'string') {
            if($b == true) {
                return "Hello $c, Your Age is $a, You Are Avilable For Hire";
            } else{
                return "Hello $c, Your Age is $a, You Are Not Avilable For Hire";
            }
        } elseif(gettype($a) === 'boolean' && gettype($b) === 'integer' && gettype($c) === 'string') {
            if($a == true) {
                return "Hello $c, Your Age is $b, You Are Avilable For Hire";
            } else{
                return "Hello $c, Your Age is $b, You Are Not Avilable For Hire";
            }
        }
  }
  echo "<br>";
  echo check_status("Osama", 38, true);
  echo "<br>";
  echo check_status(38, "Osama", true);
  echo "<br>";
  echo check_status(true, 38, "Osama");
  echo "<br>";
  echo check_status(false, "Osama", 38);
  // Needed Output
//   echo check_status("Osama", 38, true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
//   echo check_status(38, "Osama", true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
//   echo check_status(true, 38, "Osama"); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
//   echo check_status(false, "Osama", 38); // "Hello Osama, Your Age Is 38, You Are Not Available For Hire"
echo "<br>";

function calculate(int $num_one, int $num_two) :float {
    return $num_one + $num_two;
  }
  
  echo calculate(20, 10); // 30
  echo gettype(calculate(20, 10)); // Double

echo "<br>";

$message = "Hello";

$Hello = function($name) use ($message) {
    return $message . " " .$name;
};

echo $Hello("Osama"); // Hello Osama

echo "<br>";

$greet = function($name) {
    return "Greetings";
};

echo $greet("Osama"); // Greetings

echo "<br>";

$greet = fn($name) => "Greetings";


echo $greet("Osama"); // Greetings
?>