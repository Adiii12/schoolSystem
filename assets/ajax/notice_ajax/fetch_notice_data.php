<?php
include '../../conn/conn.php';

$sql = "SELECT * FROM notices ORDER BY n_id DESC";
$result = mysqli_query($conn,$sql);
$output = "";
if(mysqli_num_rows($result) > 0){

   while($row = mysqli_fetch_array($result)){
       $output .="
        <div class='posted_inner'>
         <div class='title_delete'>
           <h1>{$row['n_title']}</h1>
           <i id='delete_post' data-post_del = '{$row['n_id']}' class='far fa-trash-alt'></i>
         </div>
          <p>{$row['n_details']}</p>
         <div class='post_name_date'>
            <h2>{$row['n_posted_by']}</h2>
          <h3 class='date' id='date'>/  {$row['n_date']}</h3>
         </div>
       </div>
 
          "; 
   }

       mysqli_close($conn);
       
       echo $output;
}else{
   echo "<h2>No Post.</h2>";
}


?>