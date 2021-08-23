<?php
   session_start();
   include '../../conn/conn.php';
    $username = $_POST['u_name'];
    $password = $_POST['password'];
    $userSearch = "SELECT * FROM admin where username = '$username'";
    $querySearch = mysqli_query($conn,$userSearch);
    $userCount = mysqli_num_rows($querySearch);

    if($userCount){
        $userPass = mysqli_fetch_assoc($querySearch);
        $db_pass = $userPass['password'];
         $_SESSION['username'] = $userPass['username'];
         $_SESSION['image'] = $userPass['image'];
        if($password == $db_pass){
            header("location:../../../index.php");
        }else{
            echo 'password is Incorrect';
        }
    }

    
?>