<?php 

function calculator($oper, $a, $b) {
    if ($oper == 'sum') {
        return $a + $b;
    }
    elseif ($oper == 'subtract') {
        return $a - $b;
    }
    elseif ($oper == 'multiply') {
        return $a * $b;
    }
    elseif ($oper == 'divide') {
        if ($b != 0) {
            return $a / $b;
        }
        else
        {
            echo "на ноль делить нельзя!";
        }
    }
}

echo calculator('sum', 5, 2) . '<br>';
echo calculator('subtract', 7, 2) . '<br>';
echo calculator('multiply', 3, 2) . '<br>';
echo calculator('divide', 5.5, 3.2) . '<br>';
echo calculator('divide', 4, 0) . '<br>';





 ?>