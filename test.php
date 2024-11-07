<?php

$numbers = [2, 13, 23, 42, 12, 36];

function msg($num)
{
    if ($num % 2 == 0) {
        return $num;
    } else {
        return null;
    }
}
$even = [];
foreach ($numbers as $num) {
    $result = msg($num);
    if ($result !== null) {
        $even[] = $result;
    }
}

print_r($even);


?>