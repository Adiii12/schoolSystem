<?php
include '../../conn/conn.php';
$limit = 15;
$page=0; 
if(isset($_POST['page'])){
    $page = $_POST['page'];
}else{
    $page = 1;
}
// <table>
$start_from = ($page-1)*$limit;
$sql4 = "SELECT * FROM library ORDER BY l_id DESC LIMIT $start_from,$limit";
$result4 = mysqli_query($conn,$sql4);
$output = "";

$output.="
<table id='library_table'>
                    <tr>
                        <th style='width:100px;'>ID</th>
                        <th>Book Name</th>
                        <th>Subject</th>
                        <th>Writer</th>
                        <th>Class</th>
                        <th>Publish</th>
                        <th  style='border-right:none;'>Creating Date</th>
                        <th style='border-left:none;width:60px;'></th>
                     </tr>   
                      <tbody id='showLibraryData'>
                        
                      </tbody>
";
if(mysqli_num_rows($result4) > 0){
   while($row = mysqli_fetch_assoc($result4)){
       $output .="
       <tr>
                        <td style='text-align:center'>{$row['l_id']}</td>
                        <td>{$row['book_name']}</td>
                        <td>{$row['subject']}</td>
                        <td>{$row['writer']}</td>
                        <td>{$row['class']}</td>
                        <td>{$row['publish']}</td>
                        <td>{$row['creating_date']}</td>
                        <td class='p_action' >
                          <i id='library_action_icon' data-l_action='{$row["l_id"]}' class='fas fa-ellipsis-h'></i>
                          <div class='l_action_content' id='l_action_content'>
                          
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
   $sql2 = "SELECT * FROM library";
   $query = mysqli_query($conn,$sql2);
   $total_records = mysqli_num_rows($query);
   $total_pages = ceil($total_records/$limit);
   $output .= '<ul class="pagination">';
   if($page > 1){
       $previous = $page - 1;
    //    $output .= '<li class="page-item" id="1"><span class="page-link">First Page</span></li>';
       $output .= '<li class="l_page-item" id="'.$previous.'"><span class="page-link"><i class="fa fa-arrow-left"></i></span></li>';
   }
   for($i=1; $i<=$total_pages; $i++){
       $active_class = "";
       if($i == $page){
           $active_class = "active";
       }
       $output .= '<li class="l_page-item '.$active_class.'" id="'.$i.'"><span class="page-link">'.$i.'</span></li>';
   }
   if($page < $total_pages){
       $page++;
       $output .= '<li class="l_page-item" id="'.$page.'"><span class="page-link"><i class="fa fa-arrow-right"></i></span></li>';
    //    $output .= '<li class="page-item" id="'.$total_pages.'"><span class="page-link">Last Page</span></li>';
   }
   $output .= '</ul>';
   
          
          echo $output;
?>