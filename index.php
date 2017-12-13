<?php

require_once("vendor/autoload.php");

$student = new model\user\Student();
$teacher = new model\user\Teacher();

echo get_class($student).' '.get_class($teacher);

