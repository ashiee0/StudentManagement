<?php
namespace Ash\StudentManagement\Model;
use Ash\StudentManagement\Core;

class StudentModel implements crud{
    public $id;
    public $fullname;
    public $yearlevel;
    public $course;
    public $section;

    public function __construct(){
        $this->id ="";
        $this->fullname ="";
        $this->yearlevel ="";
        $this->course ="";
        $this->section ="";
    }
    public function displayInfo():void{
        echo "ID :".$this->id."\n";
        echo "fullname :".$this->fullname."\n";
        echo "yearlevel :".$this->yearlevel."\n";
        echo "course :".$this->course."\n";
        echo "section :".$this->section."\n";
    }
    public function create() :void{

    }
public function read():void{

}
public function update():void{

}
public function delete():void{
    
}
    

}