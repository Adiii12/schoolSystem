<?php
    include "../conn/conn.php";

    $sql = "SELECT * FROM teacher";
    $result = mysqli_query($conn,$sql);
    $teacherCount = mysqli_num_rows($result);
     echo $teacherCount;

?>