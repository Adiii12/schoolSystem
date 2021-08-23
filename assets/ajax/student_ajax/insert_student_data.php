<?php
    include '../../conn/conn.php';

    $fname = $_POST['f_name'];
    $lname = $_POST['l_name'];
    $father_name = $_POST['s_father'];
    $enroll_year = $_POST['s_enroll_year'];
    $dob = $_POST['s_dob'];
    $class = $_POST['s_class'];
    $gender = $_POST['s_gender'];
    $academic_year =$_POST['s_academic_year'];
     
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
if(isset($_POST["s_submit"])) {
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
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
    echo "Please upload only png, jpeg, jpg and gif";
    $uploadOk = 0;
}else{
    if ($_FILES["file"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
      }else{
                if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
                // if everything is ok, try to upload file
                } else {
                if (move_uploaded_file($_FILES['file']['tmp_name'], $target_file)) {
                    $sql="INSERT INTO student( image, fname, lname, father_name, enroll_year, dob, class, gender, academic_year) VALUES 
                        ('$img','$fname','$lname','$father_name','$enroll_year','$dob','$class','$gender','$academic_year')";
                                mysqli_query($conn, $sql);
                    echo "The file ". htmlspecialchars( basename( $_FILES["file"]["name"])). " has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
                }
      }

}

// Check if $uploadOk is set to 0 by an error
     


?>