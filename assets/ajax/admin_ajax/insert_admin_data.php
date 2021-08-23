

<?php
    session_start();
    include '../../conn/conn.php';

    $admin_name = $_POST['u_reg_name'];
    $admin_email = $_POST['u_reg_email'];
    $admin_password = $_POST['u_reg_password'];
    $admin_c_password = $_POST['u_c_password'];

    
    $email_db = "SELECT * FROM admin";
    $fire_db = mysqli_query($conn,$email_db);
    $row_db = mysqli_fetch_assoc($fire_db); 
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
    $target_dir = "../../../uploadAdmin/";
    $img = "uploadAdmin/".$_FILES['file']['name'];
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
        if($admin_name !== $row_db['username']){
            if($admin_password == $admin_c_password){
                $sql4 ="INSERT INTO `admin`(`username`, `email`, `password`, `c_password`, `image`) VALUES 
                ('$admin_name','$admin_email','$admin_password','$admin_c_password','$img')";
                if (mysqli_query($conn, $sql4)) 
                {
                if(move_uploaded_file($_FILES['file']['tmp_name'], $target_file))
                {
                    echo "You are register please Login Now";
                    // echo "The file ". htmlspecialchars( basename( $_FILES["file"]["name"])). "has been uploaded.";
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
            }else{
                echo "Please Make Sure the password are same!";
            }
      }else {
          echo 'Sorry user name Already Exist';
      }
    }

  }
}
// Check if $uploadOk is set to 0 by an error
?>