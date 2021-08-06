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

$frontend = ['a' => 'javascript'];

$backend = ['a' => 'php', 'b' => 'laravel'];

echo '<pre>';
var_dump($frontend + $backend);


echo '<pre>';
echo 'With array_merge function';

var_dump(array_merge($frontend, $backend));

echo '<pre>';
echo 'With array_merge_recursive function';

var_dump(array_merge_recursive($frontend, $backend));

$courses = ['javascript', 'php', 'laravel'];

$categories = ['front', 'back', 'framework'];

echo '<pre>';
echo 'With array_combine function';

var_dump(array_combine($courses, $categories));
