<?php
require_once("pdo.php");
require_once("Student.php");
require_once("Repositories/StudentRepository.php");

// $student = new Student($_POST['delete']);

// StudentRepository::DeleteStudent($student);
StudentRepository::DeleteStudent($_POST['getAllStudents']);