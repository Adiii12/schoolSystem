<?php
include "../conn/conn.php";

$teacher_ID = $_POST["id"];
$sql = "SELECT * FROM teacher WHERE id = {$teacher_ID}";
$result = mysqli_query($conn,$sql);
$output = "";

if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
            $output .="
            <h2>Teacher Edit form</h2>
         <div class='first_last_name'>
            <span class='f_left'>
              <label for='edit_fname'>First Name</label>
              <input type='text' id='edit_fname' name='f_name' value='{$row["fname"]}' required />
              <input type='text' id='edit_id' hidden  value='{$row["id"]}' required />
              <br />
            </span>
            <span class='l_right'>
              <label for='edit_lname'>Last Name</label>
              <input type='text' id='edit_lname' name='l_name' value='{$row["lname"]}' required />
              <br />
            </span>
          </div>
          <label for='edit_t_address'>Address</label>
          <input type='text' id='edit_t_address' name='address' value='{$row["address"]}' required />
          <br />
          <label for='edit_t_qualification'>Qualification</label>
          <input
            type='text'
            id='edit_t_qualification'
            name='t_qualification'
            value='{$row["qualification"]}'
            required
          />
          <br />
          <div class='t_city'>
            <span class='t_city_left'>
              <label for='edit_t_city'>City</label>
              <input type='text' id='edit_t_city' name='t_city' value='{$row["city"]}' required />
              <br />
            </span>
            <span class='t_city_right'>
              <label for='edit_t_state'>State</label>
              <input type='text' id='edit_t_state' name='t_state' value='{$row["state"]}' required />
              <br />
            </span>
          </div>
          <label for='edit_t_zipcode'>Postal/Zip Code</label>
          <input
            type='text'
            id='edit_t_zipcode'
            name='t_zipcode'
            placeholder='zip code..'
            value='{$row["zip"]}'
            required
          />
          <br />
          <label for='edit_t_gender'>Gender</label>
          <select name='gender' id='edit_t_gender' value='{$row["gender"]}' required>
            <option value=''>select one</option>
            <option value='female'>Female</option>
            <option value='male'>Male</option>
            <option value='other'>Others</option>
          </select>
          <br />
          <label for='edit_t_phone'>Phone Number</label>
          <input
            type='text'
            id='edit_t_phone'
            name='t_phone'
            placeholder='0341-5435643'
            value='{$row["phone"]}'
            required
          />
          <br />
          <label for='edit_t_email'>E-mail</label>
          <input
            type='text'
            id='edit_t_email'
            name='t_email'
            placeholder='E-mail...'
            value='{$row["email"]}'
            required
          />
          <br />
          <input  type='submit' id='edit_teacher_btn'></input>
            "; 
        }
       mysqli_close($conn);
       
       echo $output;
}else{
   echo "<h2>No Record Found.</h2>";
}

?>