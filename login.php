s<html>
    <head>
        <title>LOGIN</title>
    </head>
    <body>
        <center>
        <table border="1" width="50%">
            <tr>
                <td colspan="2" align="center">
                    <h1>LOGIN</h1>
                </td>
            </tr>
            <?php
                if(isset($_GET['error']) && $_GET['error']=="not_found"){
            ?>
            <tr>
                <td colspan="2" align="center">
                    <h2>User Not Found</h2>
                </td>
            </tr>
            <?php
                }
            ?>

            <form action="login_code.php" method="post">
            <tr>
                <td  style="padding: 10px">EMAIL : </td>
                <td  style="padding: 10px">
                    <input type="email" name="txtEmail" required>
                </td>
            </tr>
            <tr>
                <td  style="padding: 10px">Password : </td>
                <td  style="padding: 10px">
                    <input type="password" name="txtPassword" required>
                </td>
            </tr>
            <tr>
                <td  style="padding: 10px"  colspan="2" align="center">
                    <input type="submit" name="btnSubmit" value="Login Now">
                    <a href="register.php">Register !</a>
                </td>
            </tr>
            </form>
        </table>
        </center>
    </body>
</html>
