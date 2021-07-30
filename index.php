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

echo "${getTeacher()} teachs PHP";