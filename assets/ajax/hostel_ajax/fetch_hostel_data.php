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
$sql4 = "SELECT * FROM hostel ORDER BY id DESC LIMIT $start_from,$limit";
$result4 = mysqli_query($conn,$sql4);
$output = "";

$output.="
<table id='hostel_table'>
                    <tr>
                        <th>Hostel Name</th>
                        <th>Room Number</th>
                        <th>Room Type</th>
                        <th>Number of bed</th>
                        <th style='border-right:none'>Cost Per Bed</th>
                        <th style='border-left:none'></th>
                     </tr>   
                      <tbody id='showHostelData'>
                        
                      </tbody>
";
if(mysqli_num_rows($result4) > 0){
   while($row = mysqli_fetch_assoc($result4)){
       $output .="
       <tr>
                        <td>{$row['hostel_name']}</td>
                        <td>{$row['room_number']}</td>
                        <td>{$row['room_type']}</td>
                        <td>{$row['no_of_bed']}</td>
                        <td>{$row['cost_per_bed']}</td>
                        <td class='h_action' >
                          <i id='hostel_action_icon' data-h_action='{$row["id"]}' class='fas fa-ellipsis-h'></i>
                          <div class='h_action_content' id='h_action_content'>
                          
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
   $sql2 = "SELECT * FROM hostel";
   $query = mysqli_query($conn,$sql2);
   $total_records = mysqli_num_rows($query);
   $total_pages = ceil($total_records/$limit);
   $output .= '<ul class="pagination">';
   if($page > 1){
       $previous = $page - 1;
    //    $output .= '<li class="page-item" id="1"><span class="page-link">First Page</span></li>';
       $output .= '<li class="h_page-item" id="'.$previous.'"><span class="page-link"><i class="fa fa-arrow-left"></i></span></li>';
   }
   for($i=1; $i<=$total_pages; $i++){
       $active_class = "";
       if($i == $page){
           $active_class = "active";
       }
       $output .= '<li class="h_page-item '.$active_class.'" id="'.$i.'"><span class="page-link">'.$i.'</span></li>';
   }
   if($page < $total_pages){
       $page++;
       $output .= '<li class="h_page-item" id="'.$page.'"><span class="page-link"><i class="fa fa-arrow-right"></i></span></li>';
    //    $output .= '<li class="page-item" id="'.$total_pages.'"><span class="page-link">Last Page</span></li>';
   }
   $output .= '</ul>';
   
          
          echo $output;
?>