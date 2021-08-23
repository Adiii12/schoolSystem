<?php
include "../../conn/conn.php";

$student_ID = $_POST["id"];
$sql = "SELECT * FROM student WHERE student_id = {$student_ID}";
$result = mysqli_query($conn,$sql);
$output1 = "";
if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
            $output1 .="
            <div class='row'>
            <div class='student_details_left'>
              <img src='{$row['image']}' alt='' />
              <h1>{$row['fname']} {$row['lname']}</h1>
            </div>
            <div class='student_details_right'>
              <div class='first_detail'>
                <h3>Father Name</h3>
                <p>{$row['father_name']}</p>
              </div>
              <div class='second_detail'>
                <h3>Enrol Year</h3>
                <p>{$row['enroll_year']}</p>
              </div>
              <div class='third_detail'>
                <h3>Date Of Birth</h3>
                <p>{$row['dob']}</p>
              </div>
              <div class='fourth_detail'>
                <h3>Class</h3>
                <p>{$row['class']}</p>
              </div>
              <div class='fifth_detail'>
                <h3>Gender</h3>
                <p>{$row['gender']}</p>
              </div>
              <div class='sixth_detail'>
                <h3>{$row['academic_year']}</h3>
                <p>6</p>
              </div>
            </div>
          </div>      
            "; 
        }
       mysqli_close($conn);
       echo $output1;
}else{
   echo "<h2>No Record Found.</h2>";
}

?>