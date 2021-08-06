## Code example

`
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

echo "<pre>";

$courses = [10 => 'php', 100 => 'javascript', 1000 => 'laravel'];

sort($courses);

var_dump($courses);

rsort($courses);

echo "<pre>";

var_dump($courses);

ksort($courses);

echo "<pre>";

var_dump($courses);

echo "<pre>";

var_dump(array_slice($courses, 1));

echo "<pre>";

var_dump(array_chunk($courses, 2));

echo "<pre>";

var_dump(array_shift($courses));

echo "<pre>";

var_dump(array_pop($courses));


echo "<pre>";

var_dump(array_unshift($courses));

echo "<pre>";

var_dump(array_push($courses, "C#"));

echo "<pre>";

var_dump(array_flip($courses));
`