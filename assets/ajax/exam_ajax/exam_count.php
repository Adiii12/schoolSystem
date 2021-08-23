<?php
include '../../conn/conn.php';


    $sql = "SELECT * FROM exam";
    $result = mysqli_query($conn,$sql);
    $examCount = mysqli_num_rows($result);
    echo $examCount;

?>