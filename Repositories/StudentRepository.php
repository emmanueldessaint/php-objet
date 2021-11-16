<?php

require_once("pdo.php");
require_once('./Student.php');

class StudentRepository
{
    public static function AddStudent(Student $student)
    {
        $query = GetPDO()->prepare("INSERT INTO students(prenom, age) VALUES (?, ?)");
        $query->execute([
            $student->Prenom,
            $student->Age
        ]);
    }

    public static function DeleteStudent($student) {
        $query = GetPDO()->prepare("DELETE FROM students WHERE prenom = ?");
        $query->execute([
            $student,
        ]);
    }

    public static function GetAllStudents($student) {
        $query = GetPDO()->prepare("SELECT * FROM students WHERE prenom = ?")
        ;
        $query->execute([
            $student,
        ]);
    }
}