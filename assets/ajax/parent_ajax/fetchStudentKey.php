<?php
     include '../../conn/conn.php';
    $fetch_s_id = "SELECT * FROM student";
    $fetch_s_result = mysqli_query($conn,$fetch_s_id);
    $output = "";
        while($row = mysqli_fetch_assoc($fetch_s_result)){
         $output .="<option value='{$row['student_id']}'>{$row['fname']}{$row['lname']}</option>"; 
        }
     echo $output;
?>