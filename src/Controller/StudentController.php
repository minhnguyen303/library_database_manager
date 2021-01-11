<?php

namespace App\Controller;

use App\Model\Students;
use App\Model\StudentsManager;
use function Sodium\add;

class StudentController
{
    protected $studentManager;

    public function __construct()
    {
        $this->studentManager = new StudentsManager();
    }

    public function viewList()
    {
        $students = $this->studentManager->getAllStudents();
        include_once 'src/View/list.php';
    }

    public function addStudent()
    {
        //$this->studentManager->addStudent();
        if ($_SERVER['REQUEST_METHOD'] == 'GET'){
            include_once 'src/View/add-student.php';
        }
        else{
            $id = $_POST['id'];
            $name = $_POST['name'];
            $address = $_POST['address'];
            $email = $_POST['email'];
            $image = $_POST['image'];

            $student= new Students($id,$name,$address,$email);
            $this->studentManager->addStudent($student);
            header('Location: index.php');
        }
    }

    public function deleteStudent()
    {
        $id = $_REQUEST['id'];
        $this->studentManager->deleteStudent($id);
        header('Location: index.php');
    }
}