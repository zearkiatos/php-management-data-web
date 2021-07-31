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
