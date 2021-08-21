<?php
namespace studentmanagement;
// session_start();
require_once 'Student.php';

// class delete extends StudentManagement {
//     public function __construct($msv) {
//         parent::__construct($msv);
//     }
//     public function deleteStudent() {
//         return $this->msv;
//     }
//     public function addStudent() {

//     }
// }

if(isset($_GET['msv'])) {
    $msv = $_GET['msv'];
    unset($_SESSION['info_student'][$msv]);
}
header("Location:../views/StudentManage.php");
?>