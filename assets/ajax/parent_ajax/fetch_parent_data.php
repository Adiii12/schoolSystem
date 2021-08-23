<?php
include '../../conn/conn.php';
$limit = 10;
$page=0; 
if(isset($_POST['page'])){
    $page = $_POST['page'];
}else{
    $page = 1;
}
// <table>
$start_from = ($page-1)*$limit;
$sql1 = "SELECT * FROM parents ORDER BY id DESC LIMIT $start_from,$limit";
$result = mysqli_query($conn,$sql1);
$output = "";

$output.="
<table id='parents_table'>
                    <tr>
                        <th style='width:100px;'>ID</th>
                        <th style='width:130px;'>Photo</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Occupation</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th style='border-right:none;'>Email</th>
                        <th style='border-left:none;width:60px;'></th>
                     </tr>   
                      <tbody id='showParentData'>
                        
                      </tbody>
";
if(mysqli_num_rows($result) > 0){
   while($row = mysqli_fetch_array($result)){
       $output .="
       <tr>
                        <td style='text-align:center'>{$row['id']}</td>
                        <td style='text-align:center'><img style='width:40px;height:40px;border-radius:50%;object-fit:cover;' src='{$row["p_photo"]}' alt=''></td>
                        <td>{$row['p_name']}</td>
                        <td>{$row['p_gender']}</td>
                        <td>{$row['p_occupation']}</td>
                        <td>{$row['p_address']}</td>
                        <td>{$row['p_phone']}</td>
                        <td>{$row['p_email']}</td>
                        <td class='p_action' >
                          <i id='parent_action_icon' data-p_action='{$row["id"]}' class='fas fa-ellipsis-h'></i>
                          <div class='p_action_content' id='p_action_content'>
                          
                          </div>
                        </td>
        </tr>
          "; 
   }
//    $output .="<tr><td colspan='10'><button data-load_more='{$last_id}' id='parent_loadBtn'>Load More</button></td></tr>";
}else{
   $output ='
      <tr>
       <td>Data Not Found!</td>
     </tr>
   ';
}
$output .="</table>";
   // Pagination Code
   $sql2 = "SELECT * FROM parents";
   $query = mysqli_query($conn,$sql2);
   $total_records = mysqli_num_rows($query);
   $total_pages = ceil($total_records/$limit);
   $output .= '<ul class="pagination">';
   if($page > 1){
       $previous = $page - 1;
    //    $output .= '<li class="page-item" id="1"><span class="page-link">First Page</span></li>';
       $output .= '<li class="page-item" id="'.$previous.'"><span class="page-link"><i class="fa fa-arrow-left"></i></span></li>';
   }
   for($i=1; $i<=$total_pages; $i++){
       $active_class = "";
       if($i == $page){
           $active_class = "active";
       }
       $output .= '<li class="page-item '.$active_class.'" id="'.$i.'"><span class="page-link">'.$i.'</span></li>';
   }
   if($page < $total_pages){
       $page++;
       $output .= '<li class="page-item" id="'.$page.'"><span class="page-link"><i class="fa fa-arrow-right"></i></span></li>';
    //    $output .= '<li class="page-item" id="'.$total_pages.'"><span class="page-link">Last Page</span></li>';
   }
   $output .= '</ul>';
   
          
          echo $output;
?>