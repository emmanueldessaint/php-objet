<?php

require_once("Student.php");

$student = new Student('Nicolas',27);

$page = file_get_contents("page.html");
$page = str_replace('$prenom', $student->Prenom, $page);

echo $page;

?>