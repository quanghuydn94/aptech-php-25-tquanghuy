<?php
namespace studentmanagement;
session_start();
 
abstract class StudentManagement {
    protected $msv, $name, $address, $phone, $age, $mathPoint, $literaryPoint;
     

    public function __construct
    (
        $Msv, 
        $Name, 
        $Address, 
        $Phone, 
        $Age, 
        $MathPoint, 
        $LiteraryPoint
    )
    {
        $this->msv = $Msv;
        $this->name = $Name;
        $this->address = $Address;
        $this->phone = $Phone;
        $this->age = $Age;
        $this->mathPoint = $MathPoint;
        $this->literaryPoint = $LiteraryPoint;
    }

    
    abstract public function addStudent();
    public function deleteStudent() {
        return $this->msv;
    }
    public function editStudent() {
        return $this->msv;
    }
    public function detailStudent() {
        return $this->msv;
    }
}
?>