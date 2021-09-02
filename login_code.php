<?php
    include("connection.php");
    session_start();


    if(isset($_POST['btnSubmit'])){
        $email = $_POST['txtEmail'];
        $password = $_POST['txtPassword'];
        // for checking is user already exists
        $result = mysqli_query($conn,"select * from tbl_user where email='$email' and password='$password'");
        if(mysqli_num_rows($result)==1){
            $_SESSION['user'] = $email;
            header("location: post.php");
        }
        else{
            header("location: login.php?error=not_found");
        }
    }
    else{
        echo "Bad Gatewayy....";
    }

    if(isset($_GET['user'])){
        unset($_SESSION['user']);
        header("location: login.php");
    }
    else{
        echo "Bad Gatewayy....";
    }


?>
