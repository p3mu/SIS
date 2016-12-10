<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>View :: Student Information System</title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/main.js"></script>
</head>
<body>
    <?php
        require 'db_conn.php';
        if(isset($_POST['submit'])) {
          $rn = $_POST['rn'];
            $q1 = mysqli_query($conn, "SELECT * FROM `std_info` WHERE rn = $rn");
            if(mysqli_num_rows($q1) > 0) {
                while($row = mysqli_fetch_assoc($q1)) {
                    $data = $row;
                }
            } else {
                $message = "No student with that ID number, try again!";
            }
            mysqli_close($conn);
        }
    ?>
    <form action="" id="reg" method="post" name="reg">
        <h1>STUDENT INFORMATION SYSTEM</h1>
        <nav>
            <a href="index.php">HOME</a>
            <a href="update.php">UPDATE</a>
            <a href="delete.php">DELETE</a>
            <a href="view.php" class="active">VIEW</a>
        </nav>
        <table>
          <?php if (!isset($data) && !isset($message)) { ?>
            <tr>
                <td>ID NO:</td>
                <td><input name="rn" type="text"></td>
            </tr>
            <tr>
                <td><button value="ADD" name="submit">Submit</button></td>
            </tr>
          <?php }
          if (isset($data)) { ?>
            <tr>
                <td>FIRST NAME:</td>
                <td><?=$data['fname']?></td>
            </tr>
            <tr>
                <td>LAST NAME:</td>
                <td><?=$data['lname']?></td>
            </tr>
            <tr>
                <td>SESSION:</td>
                <td><?=$data['session']?></td>
            </tr>
            <tr>
                <td>BRANCH</td>
                <td><?=$data['branch']?></td>
            </tr>
            <tr>
                <td>YEAR:</td>
                <td><?=$data['year']?></td>
            </tr>
            <tr>
                <td>SEMESTER:</td>
                <td><?=$data['semester']?></td>
            </tr>
            <tr>
                <td>Date Of Birth:</td>
                <td><?=$data['dob']?></td>
            </tr>
            <tr>
                <td>ADDRESS:</td>
                <td><?=$data['address']?></td>
            </tr>
          <?php }
          if (isset($message)) { ?>
            <tr>
                <h3><?=$message?></h3>
            </tr>
          <?php } ?>
        </table>
    </form>
</body>
</html>