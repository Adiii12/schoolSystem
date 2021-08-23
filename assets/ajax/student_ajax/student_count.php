<?php
include '../../conn/conn.php';

    $sql = "SELECT * FROM student ";
    $result = mysqli_query($conn,$sql);
    $studentCount = mysqli_num_rows($result);
    echo $studentCount;
?>