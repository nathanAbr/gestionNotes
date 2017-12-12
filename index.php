<?php

include "model/User.php";
include "model/Student.php";
include "model/Teacher.php";

$student1 = new Student();
$student1->firstName = 'Victor';
$student1->lastName = 'Tanchereau';

$teachert1 = new Teacher();
$teachert1->firstName = 'Ludovic';
$teachert1->lastName = 'Hervé';

$user1 = new User();
$user1->firstName = 'Administrateur';
$user1->lastName = 'Admin';

$userArray = array($student1, $teachert1, $user1);

foreach ($userArray as $user) {
	$user->display();
}

$i = 12;

function ref(&$i){
	$i++;
	echo $i."\n";
}

function val($i){
	$i++;
	echo $i."\n";
}

val($i);
ref($i);
echo $i;