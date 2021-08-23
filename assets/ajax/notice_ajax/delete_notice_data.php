<?php
include '../../conn/conn.php';
$DeleteID = $_POST['DelPost'];



    $deleQuery = "DELETE FROM notices WHERE n_id = {$DeleteID}";
    $fire = mysqli_query($conn,$deleQuery);
    if($fire){
        echo 1;
    }else{
        echo 0;
    }



?>