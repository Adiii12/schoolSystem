<?php
include "../conn/conn.php";
$teacher_Id = $_POST["id"];
$sql = "DELETE FROM teacher WHERE id = {$teacher_Id}";

if(mysqli_query($conn,$sql)){
    echo 1;
}else{
    echo 0;
}
?>