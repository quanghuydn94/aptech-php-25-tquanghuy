<?php
namespace studentmanagement;
// session_start();
require_once 'Student.php';

class Student extends StudentManagement
{   

    public function __construct(
        $msv, 
        $name, 
        $address, 
        $phone, 
        $age, 
        $mathPoint, 
        $literaryPoint
    )
    {
        parent::__construct($msv, $name, $address, $phone, $age, $mathPoint, $literaryPoint);
    }
    public function addStudent() {
        $_SESSION['info_student'][$this->msv] = [
            'msv'=>$this->msv,
            'name'=>$this->name,
            'address'=>$this->address,
            'phone'=>$this->phone,
            'age'=>$this->age,
            'mathpoint'=>$this->mathPoint,
            'literarypoint'=>$this->literaryPoint
        ];
    }
}
   
if (isset($_POST['save'])) {
    $newStudent = new Student(
        $_POST['msv'],
        $_POST['name'],
        $_POST['address'],
        $_POST['phone'],
        $_POST['age'],
        $_POST['mathpoint'],
        $_POST['literarypoint']
    );
     
    $newStudent->addStudent();
    setcookie('msg','add new success',time()+10);
    header("Location:../views/StudentManage.php");
}

?>