<?php


namespace App\Model;

class StudentsManager
{
    protected $dbConnect;

    public function __construct()
    {
        $this->dbConnect = new DBConnects();
    }

    public function getAllStudents()
    {
        $sqlQuery = 'SELECT * FROM Students';
        $stmt = $this->dbConnect->connect()->query($sqlQuery);
        $data = $stmt->fetchAll();
        $students = [];
        foreach ($data as $item) {
            $students[] = new Students($item["id"],$item['name'],$item['address'],$item['email']);
        }
        return $students;
    }

    public function addStudent($student)
    {
        $id = $student->getId();
        $name = $student->getName();
        $address = $student->getAddress();
        $email = $student->getEmail();
        $sqlQuery = "INSERT INTO `Students`(`id`, `name`, `address`, `email`, `image`) VALUES ('$id','$name','$address','$email','https://google.com')";
        $stmt = $this->dbConnect->connect()->prepare($sqlQuery);
        $stmt->execute();
    }

    public function deleteStudent($id)
    {
        $sql = "DELETE FROM `Students` WHERE id='$id'";
        $stmt= $this->dbConnect->connect()->prepare($sql);
        $stmt->execute();
    }
}