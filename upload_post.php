<html>
    <head>
        <title>UPLOAD POST</title>
    </head>
    <body>
        <?php
            include("header.php");
            include("connection.php");
            // include("connection.php");

        ?>
        <center><br><br>
        <table border="1" width="70%"> 
            <tr>
                <th>
                    <h2>Upload Post</h2>
                </th>
            </tr>
            <form action="upload_code.php" method="POST" enctype="multipart/form-data">
            <tr>
                <td style="padding: 10px">
                    Title : 
                    <input type="text" name="txtTitle" required>
                </td>
            </tr>
            <tr>
                <td style="padding: 10px">
                    Description : 
                    <textarea name="txtDescription" required>
                    </textarea>
                </td>
            </tr>
            <tr>
                <td style="padding: 10px">
                    Select Tags : <br>
                    <?php
                        $query = "select * from tbl_tags";
                        $result = mysqli_query($conn,$query);
                        while($row=mysqli_fetch_array($result)){
                    ?>
                    <input type="checkbox" name="chkTags[]" value="<?php echo $row['id']; ?>"> <?php echo $row['title']; ?> <br> 
                    <?php
                        }
                    ?>
                </td>
                <tr>
                <td style="padding: 10px">
                    Select Images : 
                    <input type="file" name="upload[]" multiple required>
                </td>
            </tr>
            <tr>
                <td style="padding: 10px" align="center">                    
                    <input type="submit" name="btnUpload" value="Upload Post">
                </td>
            </tr>

            </form>
        </table>    
        </center>
    </body>
</html>