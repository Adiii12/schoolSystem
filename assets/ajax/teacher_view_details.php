<?php
include "../conn/conn.php";

$teacher_ID = $_POST["id"];
$sql = "SELECT * FROM teacher WHERE id = {$teacher_ID}";
$result = mysqli_query($conn,$sql);
$output1 = "";
if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
            $output1 .="
            <div class='row'>
                  <div class='left'>
                    <img src='images/adil.jpg' alt='>
                    <span class='social_media'>
                        <a style='text-decoration:none;' href = 'mailto:{$row["email"]}'>
                          <i class='fas fa-envelope'></i>
                        </a>
                        <i class='fab fa-instagram'></i>
                        <i class='fab fa-twitter'></i>
                    </span>
                  </div>
                  <div class='right'>
                    <h2>{$row['fname']} {$row['lname']}</h2>
                    <div class='mobile'>
                      <i class='fas fa-phone'></i>
                      <h3>{$row["phone"]}</h3>
                    </div>
                    <div class='address'>
                    <i class='fas fa-address-card'></i>
                      <h3>{$row['address']}</h3>
                    </div>
                    <div class='state'>
                    <i class='fas fa-monument'></i>
                      <h3>{$row['state']}</h3>
                    </div>
                    <div class='qualification'>
                    <i class='fas fa-graduation-cap'></i>
                      <h3>{$row['qualification']}</h3>
                    </div>
                    <div class='city'>
                    <i class='fas fa-city'></i>
                      <h3>{$row['city']}</h3>
                    </div>
                  </div>
                </div>
                <hr>
                <div class='zip'>
                   <p>Zip Code</p>
                    <h3>{$row['zip']}</h3>
                </div>
                <div class='email'>
                   <p>Email</p>
                    <h3>{$row['email']}</h3>
                </div>
                <div class='gender'>
                   <p>Gender</p>
                    <h3>{$row['gender']}</h3>
                </div>
            "; 
        }
       
       mysqli_close($conn);
       echo $output1;
}else{
   echo "<h2>No Record Found.</h2>";
}

?>