<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Delete :: Student Information System</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <form action="" id="reg" method="post" name="reg">
        <h1>STUDENT INFORMATION SYSTEM</h1>
        <nav>
            <a href="index.php">HOME</a>
            <a href="update.php">UPDATE</a>
            <a href="delete.php" class="active">DELETE</a>
            <a href="view.php">VIEW</a>
        </nav>
        <table>
            <tr>
                <td>ID NO:</td>
                <td><input name="rn" type="text"></td>
            </tr>
            <tr>
                <td><button value="ADD" name="submit">Submit</button></td>
            </tr>
        </table>
    </form>
    <?php
        require 'db_conn.php';

        if(isset($_POST['submit'])) {
            $rn = $_POST['rn'];
            $q1 = mysqli_query($conn, "DELETE FROM `std_info` where rn = $rn");
            if($q1) {
                echo "Record Successfully Deleted!";
            } else {
                echo "Your Record was not deleted!" ;
            }
            mysqli_close($conn);
        }
    ?>
</body>
</html>
