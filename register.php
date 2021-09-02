<html>
    <head>
        <title>REGISTER</title>
    </head>
    <body>
        <center>
        <table border="1" width="50%">
            <tr>
                <td colspan="2" align="center">
                    <h1>REGISTER</h1>
                </td>
            </tr>
            <?php
                if(isset($_GET['error']) && $_GET['error']=="already_exists"){
            ?>
            <tr>
                <td colspan="2" align="center">
                    <h2>User Already Exists Please Login</h2>
                </td>
            </tr>
            <?php
                }
            ?>
            <?php
                if(isset($_GET['error']) && $_GET['error']=="0"){
            ?>
            <tr>
                <td colspan="2" align="center">
                    <h2>Something Went Wrong</h2>
                </td>
            </tr>
            <?php
                }
            ?>

        <form action="register_code.php" method="post">
            <tr >
                <td  style="padding: 10px">Name : </td>
                <td  style="padding: 10px">
                    <input type="text" name="txtName" required>
                </td>
            </tr>
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
                    <input type="submit" name="btnSubmit" value="Register Now">
                </td>
            </tr>
            </form>
        </table>
        </center>
    </body>
</html>