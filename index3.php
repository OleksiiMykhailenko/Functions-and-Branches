<?php 	

function validate($arg1, $arg2, $oper) {
    $arg2 = gettype($arg2) == 'string' ? strlen($arg2) : $arg2;
    
    if ($oper == 'lessthan') {
        return $arg1 < $arg2 ? 'true' : 'false';
        echo "\n";
    }
    elseif ($oper == 'greaterthan') {
        return $arg1 > $arg2 ? 'true' : 'false';
        echo "\n";
    }
    elseif ($oper == 'equals') {
        return $arg1 == $arg2 ? 'true' : 'false';
        echo "\n";
    }
}

echo validate(1, 2, 'lessthan') . "<br>";
echo validate(1, 2, 'greaterthan') . "<br>";
echo validate(4, 'test', 'equals') . "<br>";
echo validate(5, 'test', 'lessthan') . "<br>";

 ?>