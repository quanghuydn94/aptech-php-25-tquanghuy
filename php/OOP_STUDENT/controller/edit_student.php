<?php
namespace studentmanagement;
// session_start();
require_once 'Student.php';
class EditStudent extends StudentManagement {
    public function __construct(
        $msv,
        $name, 
        $address,
        $phone,
        $age,
        $mathPoint,
        $literaryPoint
    ) {
        parent::__construct($msv, $name, $address, $phone, $age, $mathPoint, $literaryPoint);
    }
    public function addStudent() {

    }
    public function editStudent() {
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
    if(isset($_GET['msv'])) {
        $msv = $_GET['msv'];
    }
    $editStudent = new EditStudent(
        $_POST['msv'],
        $_POST['name'],
        $_POST['address'],
        $_POST['phone'],
        $_POST['age'],
        $_POST['mathpoint'],
        $_POST['literarypoint']
    );
    $editStudent->editStudent();
    var_dump($editStudent);
    setcookie('mse','Edit success',time()+10);
    header("Location:../views/StudentManage.php");
}
?>