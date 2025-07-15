<?php
 include '../vendor/autoload.php';

 use Ash\StudentManagement\Model\StudentModel;

 $student = new StudentModel;
 $student->id=2024722004;
 $student->fullname = "Claro, Asheralyn";
 $student->yearlevel = "First Year";
 $student->course = "BSIT";
 $student->section = "A";

 $student->displayInfo();