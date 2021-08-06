<?php

require __DIR__ . '/vendor/autoload.php';

$courses = ['javascript', 'php'];

$wishes = ['php', 'laravel', 'javascript', 'vuejs'];
echo "<pre>";
var_dump(array_diff($wishes, $courses));

$arrayA = [1, 2, 3, 4, 5];

$arrayB = [3, 4, 5, 6, 7];
echo "<pre>";
var_dump(array_diff($arrayB, $arrayA));

echo "<pre>";
var_dump(array_diff_assoc($arrayB, $arrayA));

