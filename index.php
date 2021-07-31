<?php

require __DIR__ . '/vendor/autoload.php';

var_dump(App\Validate::email('caprilespe@outlook.com'));

// values
function greet($name)
{
    return "Hello, $name";
}

echo "<br>";

echo greet("Pedro");

// references
$course = 'PHP';
function path(&$course)
{
    $course = 'Laravel';

    echo $course;
}
echo "<br>";
path($course);
echo "<br>";
echo $course;

// predefine

function greetings($name = "Luis")
{
    return "Hello, $name";
}
echo "<br>";
echo greetings();
echo "<br>";
echo greetings('Maria');

function getArray()
{
    return ["PDF", "view"];
}
echo "<br>";
var_dump(getArray());

// exit(); //stop the system

// return; // only return a value
