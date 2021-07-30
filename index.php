<?php

echo 'A text with a 
a single line
single quotation marks\' backslash \\ continue with more text
$variable <br />';

$teacher = 'Pedro';

$Pedro = "PHP Teacher";

echo "$teacher is a ${$teacher}";

function getTeacher()
{
    return 'teacher';
}

$teacher = 'Pedro';

echo "${getTeacher()} teachs PHP <br>";

$data = 'I\'m study PHP<br>';

echo "$data[0] <br>";

$post = "Bacon ipsum dolor amet pastrami short ribs chislic pancetta ball tip. Andouille filet mignon bresaola pork loin shankle alcatra brisket sausage. Pig prosciutto biltong buffalo drumstick. Sausage chislic cupim fatback filet mignon turducken chuck capicola pork chop kielbasa turkey. Ham hock jerky porchetta, beef ribs beef tongue pancetta pig. Frankfurter short loin ribeye, buffalo kielbasa jowl shoulder ham hock spare ribs alcatra chislic pancetta flank porchetta pork loin. Ham hock hamburger drumstick jowl strip steak ribeye flank doner cupim turducken chicken burgdoggen swine cow.";

$extract = substr($post, 0, 20);

echo "$extract... [ver más]";

$languages = 'javascript, php, laravel';

$tags = explode(', ', $languages);

echo "<pre>";

var_dump($tags);

$courses = ['javascript', 'php', 'laravel'];

echo implode(',', $courses);

$course = "      Course of PHP         ";
$course = trim($course);
echo "<pre>";
echo "I want to learn $course and other courses <br>";

$text = "PHP is A LANGUAGE";

echo "$text <br>";

echo strtolower($text) . "<br>";

echo strtoupper($text) . "<br>";

echo ucfirst($text) . "<br>";

echo lcfirst($text) . "<br>";

// Replace

$slug = str_replace(' ', '-', $text);

echo strtolower($slug) . "<br>";

// Modification

$code = 39;

echo "$code <br>";

echo str_pad($code, 8, '#')."<br>";

echo str_pad($code, 8, '#', STR_PAD_BOTH)."<br>";

echo str_pad($code, 8, '#', STR_PAD_LEFT)."<br>";


$textWithHTML = "<h1>$text</h1>";

echo "$textWithHTML<br>";

echo strip_tags($text)."<br>";

$spanishText = "PHP es UN LENGUAJE, año 2020, programación";

echo strtoupper($spanishText)."<br>"; // monobyte

echo mb_strtoupper($spanishText)."<br>"; // multibyte

echo "<h1>Regular expressions 🤦🏻‍♂️</h1><br>";