<?php
    function get_all_user() {
        $conn = connect('huytran');
        $sql = "select * from userprivate  ";
        $pre = $conn->prepare($sql);
        $pre->execute();
        
        return $pre->fetchAll();
    }

    function insert_user(){
        $conn = connect('huytran');
        $sql = " INSERT INTO userprivate( firstname, lastname, email)
        VALUES ('$firstname',$lastname,'$email' )";
        $insert_row = $conn->exec($sql);
        if($insert_row > 0){
            header('Location: index.php');
        }
    }

    function edit_user($id,$firstname,$lastname,$email) {
        $sql = "UPDATE from userprivate set firstname=?, lastname=?, email=? where id=? ";
        $conn = connect('huytran');
        $pre = $conn->prepare($sql);
        $arr = [$id,$firstname,$lastname,$email];
        $pre->execute($arr);
    }

    function del_user($id){
        $sql = "Delete from userprivate where id=".$id;
        $conn = connect('huytran');
        $pre = $conn->prepare($sql);
        $pre->execute();
    }
?>