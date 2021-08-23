<?php
include "../conn/conn.php";

$search_val = $_POST["searchT"];

$sql = "SELECT * FROM `teacher` WHERE fname LIKE '%{$search_val}%' OR lname LIKE '%{$search_val}' ";

// "SELECT * FROM teacher WHERE fname LIKE '%{$search_val}%' OR lname LIKE '%{$search_val}'";
$result = mysqli_query($conn,$sql);
$output = "";
if(mysqli_num_rows($result) > 0){
   $output = "<table>";
   while($row = mysqli_fetch_array($result)){
       $output .="
      <tr>
          <td>{$row['id']}</td>
          <td>{$row['fname']}</td>
          <td>{$row['lname']}</td>
          <td>{$row['address']}</td>
          <td>{$row['qualification']}</td>
          <td>{$row['phone']}</td>
          <td>{$row['gender']}</td>
          <td>
            <button class='t_view_details' data-details='{$row["id"]}'><i class='fas fa-eye'></i></button>
            <button class='t_dlt_btn' data-id='{$row["id"]}'><i class='fas fa-trash-alt'></i></button>
            <button class='t_edit_btn' data-eid='{$row["id"]}'><i class='far fa-edit'></i></button>
          </td>
      </tr>  
          "; 
   }
   $output .="<table>";
       mysqli_close($conn);
       
       echo $output;
}else{
   echo "<h2 width='400px'>No Record Found.</h2>";
}

?>