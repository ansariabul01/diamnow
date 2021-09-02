<html>
    <head>
        <title>UPLOAD POST</title>
    </head>
    <body>
        <?php
            include("header.php");
            include("connection.php");
            // session_start();
            if(!isset($_SESSION['user'])){
                header("location: login.php");
            }
    
        ?>
        <center>
            <?php
                if(isset($_GET['success'])){
            ?>
            <h2>Uploaded......</h2>
            <?php        
                }
            ?>
            <br><br>
            <table border="1" width="60%">
                <tr>
                    <th>
                        <h1>Your Post</h1>
                    </th>                    
                </tr>
                        <?php   	
                            $loginUser = $_SESSION['user'];
                            // echo $loginUser;
                            $user = mysqli_fetch_assoc(mysqli_query($conn,"select * from tbl_user where email='$loginUser'"));
                            $userId = $user['id'];
                            // echo $userId;
                            $getPost = "select * from tbl_post where user_id='$userId'";
                            $result = mysqli_query($conn,$getPost);
                            while($row=mysqli_fetch_array($result)){
                                $post_id = $row['post_id'];
                        ?>

                        <tr>
                            <td>
                                <h1>Title : <?php echo $row['title']; ?></h1>
                                <p>Description : <?php echo $row['description']; ?></p><br>
                        
                                Images <br>
                            <?php
                                $getPost = "select * from tbl_attach where post_id='$post_id'";
                                $result1 = mysqli_query($conn,$getPost);
                                while($row1=mysqli_fetch_array($result1)){
                            ?>
                                        <img src="<?php echo $row1['url']; ?>" alt="" style="height: 100px;width: 100px">
                            <?php
                                }

                            ?>
                            </td>
                        </tr>

                        <?php
                            }
                        ?>
            </table>
        </center>
    </body>
</html>