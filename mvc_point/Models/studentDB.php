<?php
 include 'connectDB.php';
 function getAllStudent() {
     global $DB;
     $students = $DB->query('SELECT * FROM Students');
     return $students;
 }

 function insertStudent($studentName,$address,$phone,$MathPoint,$LiteraryPoint ){
    global $DB;
    $insert_Count = $DB->exec("INSERT INTO `students`(`StudentName`,`Phone`, `Address` , `MathPoint`, `LiteraryPoint`)
     VALUES ('$studentName','$address','$phone','$MathPoint','$LiteraryPoint')");
    return $insert_Count;
}
function getStudentById($id){
    global $DB;
    $student = $DB->query("SELECT * FROM Students WHERE StudentId=$id")->fetch();
    return $student;
}

function updateStudent($id,$studentName,$address,$phone,$MathPoint,$LiteraryPoint) {
    global $DB;
    $update_Count = $DB->exec("UPDATE `students` SET `StudentName`='$studentName',`Address`='$address',`Phone`='$phone',
    `MathPoint`='$MathPoint',`LiteraryPoint`='$LiteraryPoint' WHERE StudentId=$id");
    return $update_Count;
}
function deleteClass($id){
    global $DB;
    $delete_Count = $DB->exec("DELETE FROM `students` WHERE StudentId=$id");
    return $delete_Count;
}
?>