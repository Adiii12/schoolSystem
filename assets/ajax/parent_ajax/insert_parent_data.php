<?php
    // include '../../conn/conn.php';

   


    // $target_dir = "../../../images/";
    // $img = "images/".$_FILES['file']['name'];
    // $target_file = $target_dir . basename($_FILES["file"]["name"]);
    // $uploadOk = 1;
    // $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // // Check if image file is a actual image or fake image
    // if(isset($_POST["p_submit"])) {
    //   $check = getimagesize($_FILES["file"]["tmp_name"]);
    //   if($check !== false) {
    //     echo "File is an image - " . $check["mime"] . ".";
    //     $uploadOk = 1;
    //   } else {
    //     echo "File is not an image.";
    //     $uploadOk = 0;
    //   }
    // }

    // // Check if file already exists
    // if (file_exists($target_file)) {
    //   echo "Sorry, file already exists.";
    //   $uploadOk = 0;
    // }

    // // Check file size


    // // Allow certain file formats
    // if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
    //     echo "Please upload only png, jpeg, jpg and gif";
    //     $uploadOk = 0;
    // }else{
    //     if ($_FILES["file"]["size"] > 500000) {
    //         echo "Sorry, your file is too large.";
    //         $uploadOk = 0;
    //       }else{
    //                 if ($uploadOk == 0) {
    //                 echo "Sorry, your file was not uploaded.";
    //                 // if everything is ok, try to upload file
    //                 } else {
    //                   $sql2 = "INSERT INTO parents (id,p_photo, p_name, p_gender, p_occupation, p_address, p_phone, p_email) VALUES 
    //                   ('$p_id','$img','$parent_name','$parent_gender','$parent_occupation','$parent_address','$parent_phone','S$parent_email')";
    //                   if(mysqli_query($conn, $sql2)){
    //                     if (move_uploaded_file($_FILES['file']['tmp_name'], $target_file)) {
    //                       echo "The file ". htmlspecialchars( basename( $_FILES["file"]["name"])). " has been uploaded.";
    //                     } else {
    //                         echo "Sorry, there was an error uploading your file.";
    //                     }
    //                   }else {
    //                     echo "haha";
    //                   }
    //                 }
    //       }

    // }

    // Check if $uploadOk is set to 0 by an error
     


?>
<?php
    include '../../conn/conn.php';

    $parent_name = $_POST['p_name'];
    $parent_gender = $_POST['p_gender'];
    $parent_occupation = $_POST['p_occupation'];
    $parent_address = $_POST['p_address'];
    $parent_phone = $_POST['p_phone'];
    $parent_email = $_POST['p_email'];
    $p_id = $_POST['s_id'];
     
    //image uploading
    // if($_FILES['file']['name']){
     
    //     move_uploaded_file($_FILES['file']['tmp_name'], "../../../images/".$_FILES['file']['name']);
     
    //     $img = "images/".$_FILES['file']['name'];
     
    //     $sql="INSERT INTO student( image, fname, lname, father_name, enroll_year, dob, class, gender, academic_year) VALUES 
    //     ('$img','$fname','$lname','$father_name','$enroll_year','$dob','$class','$gender','$academic_year')";
         
    //     if(mysqli_query($conn, $sql)){
    //         echo 1;
    //     }else{
    //         echo 0;
    //     }
    //     }
    $target_dir = "../../../images/";
    $img = "images/".$_FILES['file']['name'];
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["p_submit"])) {
  $check = getimagesize($_FILES["file"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists

if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}
// Check file size
  

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) 
{
  echo "Please upload only png, jpeg, jpg and gif";
  $uploadOk = 0;
}
else
{
  if ($_FILES["file"]["size"] > 500000) 
  {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
  }
  else
  {
    if ($uploadOk == 0)
    {
      echo "Sorry, your file was not uploaded.";
      // if everything is ok, try to upload file
    } 
    else 
    {
      $sql3 ="INSERT INTO `parents`(`id`, `p_photo`, `p_name`, `p_gender`, `p_occupation`, `p_address`, `p_phone`, `p_email`) VALUES 
      ('$p_id','$img','$parent_name','$parent_gender','$parent_occupation','$parent_address','$parent_phone','$parent_email')";
      if (mysqli_query($conn, $sql3)) 
      {
        if(move_uploaded_file($_FILES['file']['tmp_name'], $target_file))
        {
          echo "The file ". htmlspecialchars( basename( $_FILES["file"]["name"])). "has been uploaded.";
        }
        else 
        {
          echo "Sorry, there was an error uploading your file.";          
        }
      }
      else
      {
        echo "";
      }

    }

  }
}
// Check if $uploadOk is set to 0 by an error
?>