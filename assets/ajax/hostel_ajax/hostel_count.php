<?php
include '../../conn/conn.php';


    $sql = "SELECT * FROM hostel";
    $result = mysqli_query($conn,$sql);
    $hostelCount = mysqli_num_rows($result);
    echo $hostelCount;

?>