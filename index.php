<?php
include('Student.php');

$students = array();

$first = new Student();
$first->surname = "Doe";
$first->firstname = "John";
$first->addEmail('home','john@doe.com');
$first->addEmail('work','jdoe@mcdonalds.com');
$first->addGrade(65);
$first->addGrade(75);
$first->addGrade(55);
$students['j123'] = $first;

$second = new Student();
$second->surname = "Einstein";
$second->firstname = "Albert";
$second->addEmail('home','albert@braniacs.com');
$second->addEmail('work1','a_einstein@bcit.ca');
$second->addEmail('work2','albert@physics.mit.edu');
$second->addGrade(95);
$second->addGrade(80);
$second->addGrade(50);
$students['a456'] = $second;

$third = new Student();
$third->surname = "Parry";
$third->firstname = "Jim";
$third->addEmail('work','jim_parry@bcit.ca');
$third->addGrade(85);
$third->addGrade(85);
$students['j124'] = $third;

ksort($students);

foreach($students as $student)
    echo $student->toString();

?>