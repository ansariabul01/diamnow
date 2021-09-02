<html>
    <head>
        <!-- <title>LOGIN</title> -->
    </head>
    <body>
    <?php
        include("connection.php");
        session_start();
    ?>
        <center>
        <table border="1" width="70%">
            <tr>
                <td colspan="2" align="center">
                    <a href="upload_post.php">UPLOAD POST</a>
                </td>
                <td colspan="2" align="center">
                    <a href="post.php">YOUR POST</a>
                </td>
                <td colspan="2" align="center">
                    LOGIN USER :<a href="#"> <?php if(isset($_SESSION['user'])){echo $_SESSION['user'];}?></a>
                </td>
                <td colspan="2" align="center">
                    <a href="login_code.php?user=1">LOGOUT</a>
                </td>
            </tr>

        </table>
        </center>
    </body>
</html>