<?php  
namespace Claro\StudentManagement\Model;

use Claro\StudentManagement\Core\Crud;
use Claro\StudentManagement\Core\Database; 

class StudentModel extends Database implements Crud {
    public $id;
    public $fullname;
    public $yearlevel;
    public $course;
    public $section;


    public function __construct() {
    parent:: __construct();
        $this->id = "";
        $this->fullname = "";
        $this->yearlevel = "";
        $this->course = "";
        $this->section = "";
    }

    // CREATE - Add a new student
    public function create(): void {
        try {
            $sql = $this->conn->prepare("INSERT INTO students (id, fullname, year_level, course, section) VALUES (?, ?, ?, ?, ?)");
             $sql ->bind_param("sssss", $this->id, $this->fullname, $this->yearlevel, $this->course, $this->section);
            $stmt->execute();
            echo "Student successfully added.\n";
        } catch (\Exception $e) {
            echo "Create Error: " . $e->getMessage() . "\n";
        }
    }

    // READ - Get all students
    public function read(): void {
        try {
            $sql = "SELECT * FROM students";
            $result = $this->conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "ID: " . $row['id'] . "\n";
                    echo "Full Name: " . $row['fullname'] . "\n";
                    echo "Year Level: " . $row['year_level'] . "\n";
                    echo "Course: " . $row['course'] . "\n";
                    echo "Section: " . $row['section'] . "\n";
                    echo "----------------------------\n";
                }
            } else {
                echo "No students found.\n";
            }
        } catch (\Exception $e) {
            echo "Read Error: " . $e->getMessage() . "\n";
        }
    }

    // UPDATE - Update an existing student's information
    public function update(): void {
        try {
             $sql  = $this->conn->prepare("UPDATE students SET fullname = ?, year_level = ?, course = ?, section = ? WHERE id = ?");
            $stmt->bind_param("sssss", $this->fullname, $this->yearlevel, $this->course, $this->section, $this->id);
            $stmt->execute();
            echo "Student successfully updated.\n";
        } catch (\Exception $e) {
            echo "Update Error: " . $e->getMessage() . "\n";
        }
    }

    // DELETE - Delete a student from the database
    public function delete(): void {
        try {
             $sql  = $this->conn->prepare("DELETE FROM students WHERE id = ?");
            $stmt->bind_param("s", $this->id);
            $stmt->execute();
            echo "Student successfully deleted.\n";
        } catch (\Exception $e) {
            echo "Delete Error: " . $e->getMessage() . "\n";
        }
    }

}