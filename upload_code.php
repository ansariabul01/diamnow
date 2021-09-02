<?php
    include("connection.php");
    session_start();
    if(isset($_POST['btnUpload'])){
        $title = $_POST['txtTitle'];
        $des = $_POST['txtDescription'];
        $tags = $_POST['chkTags'];
        // $files = $_FILES['txtFiles'];
        $loginUser = $_SESSION['user'];
        $user = mysqli_fetch_assoc(mysqli_query($conn,"select * from tbl_user where email='$loginUser'"));
        $userId = $user['id'];
        $query_post = "insert into tbl_post values('','$title','$des','$userId')";
        // print_r($files);
        if(mysqli_query($conn,$query_post)){
            $last_insert_id = mysqli_insert_id($conn);
            $total = count($_FILES['upload']['name']);

            for( $i=0 ; $i < $total ; $i++ ) {
                $tmpFilePath = $_FILES['upload']['tmp_name'][$i];
              
                if ($tmpFilePath != ""){
                  $newFilePath = "./upload/" . $_FILES['upload']['name'][$i];
                  if(move_uploaded_file($tmpFilePath, $newFilePath)) {
                      $post = "insert into tbl_attach values('','$newFilePath','$last_insert_id')";
                      mysqli_query($conn,$post);
                  }
                }
            }
            foreach($tags as $v)
            {
                $tags_query = "insert into tbl_post_tags values('','$v','$last_insert_id')";
                mysqli_query($conn,$tags_query);
            }
            header("location: post.php?success=1");
        }
        // echo $user['id'];

    }
?>