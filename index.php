<?php

require __DIR__ . '/vendor/autoload.php';

$greet = function ($name) // variable with logic
{
    return "Hello, $name";
};

echo $greet("Pedro");

function greetNormal(Closure $lang, $name)
{
    return $lang($name);
}

$es = function ($name) {
    return "Hola, $name";
};

$en = function ($name) {
    return "Hello, $name";
};
echo "<br>";
echo greetNormal($es, 'Lynda');

echo "<br>";
echo greetNormal($en, 'Lynda');
echo "<br>";
$courses = [
    'frontend' => 'javascript',
    'framework' => 'laravel',
    'backend' => 'php',
    'library' => 'vuejs'
];
echo "<pre>";
var_dump($courses);

echo "<pre>";

foreach ($courses as $key => $value) {
    echo "$key: $value <br>";
}
echo "<pre>";
function upper($course, $key)
{
    echo strtoupper("$course : $key <br>");
}
array_walk($courses, 'upper');

echo "<pre>";

echo (bool)array_key_exists('frontend', $courses);
echo "<pre>";
echo (bool)in_array('javascript', $courses);

echo "<pre>";
var_dump(array_keys($courses));

echo "<pre>";
var_dump(array_keys($courses));

echo "<pre>";
var_dump(array_values($courses));
