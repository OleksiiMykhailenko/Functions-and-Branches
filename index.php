<?php 

define("Celsius", 0.55);
define("Fahrenheit", 1.8);

function convert($converts, $degrees) {
    if ($converts === "C") {
        return ($degrees - 32) * Celsius;
    }
    else if($converts === "F") {
        return ($degrees * Fahrenheit) + 32;
    }
}

echo convert("F", 40);

?>