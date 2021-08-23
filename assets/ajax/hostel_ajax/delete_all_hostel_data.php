<?php
include "../../conn/conn.php";
if(isset($_POST['action'])){
    $del_all = "Delete FROM hostel";
    $del_result = mysqli_query($conn,$del_all);
    if($del_result){
        echo 1;
    }else{
        echo 0;
    }
}
?>