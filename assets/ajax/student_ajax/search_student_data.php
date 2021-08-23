<?php
include "../../conn/conn.php";

$search_value = $_POST["search"];

$sql = "SELECT * FROM student WHERE fname LIKE '%".$search_value."%' OR lname LIKE '%".$search_value."%'";
$result = mysqli_query($conn,$sql);
$output = "";
if(mysqli_num_rows($result) > 0){
   while($row = mysqli_fetch_array($result)){
       $output .="
                <div class='card' id='student_card'>
                    <img src='{$row['image']}' alt=''>
                        <div class='s_card_footer'>
                               <h2>{$row['fname']} {$row['lname']}</h2>
                            <div class='student_profile_action'>
                                <button class='s_btn_view' data-sProfile='{$row["student_id"]}'>Profile</button>
                                <button class='s_btn_del' name='s_btn_del' data-sDelete='{$row["student_id"]}'>Delete</button>
                            </div>
                        </div>
                </div>
          "; 
   }


       mysqli_close($conn);
       
       echo $output;
}else{
   echo "<h2>No Record Found.</h2>";
}
?>