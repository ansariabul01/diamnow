<?php
    include("connection.php");
    if(!$conn){
        echo "Please Wait Something Went Wrong.............";
    }

    if(isset($_POST['btnSubmit'])){
        $name = $_POST['txtName'];
        $email = $_POST['txtEmail'];
        $password = $_POST['txtPassword'];
        // for checking is user already exists
        $result = mysqli_query($conn,"select * from tbl_user where email='$email' and password='$password'");
        if(mysqli_num_rows($result)>0){
            header("location: register.php?error=already_exists");
        }
        else{
            if(mysqli_query($conn,"insert into tbl_user values('','$name','$email','$password','1')"))
            {
                header("location: register.php?success=register");
            }            
            else{
                header("location: register.php?error=0");
            }
        }
    }
    else{
        echo "Bad Gatewayy....";
    }
?>