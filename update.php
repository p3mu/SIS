<!DOCTYPE html>
<html>
<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <script src="js/main.js">
    </script>
    <title>About :: Student Information System</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <form action="" id="reg" method="post" name="reg" onsubmit="return validate()">
        <h1>STUDENT INFORMATION SYSTEM</h1>
        <nav>
            <a href="index.php">HOME</a>
            <a href="update.php" class="active">UPDATE</a>
            <a href="delete.php">DELETE</a>
            <a href="view.php">VIEW</a>
        </nav>
        <table>
            <tr>
                <td>ID NO:</td>
                <td><input name="rn" type="text"></td>
            </tr>
            <tr>
                <td>FIRST NAME:</td>
                <td><input name="fn" type="text"></td>
            </tr>
            <tr>
                <td>LAST NAME:</td>
                <td><input name="ln" type="text"></td>
            </tr>
            <tr>
                <td>SESSION:</td>
                <td>
                    <select name='session'>
                        <option>select session</option>
                        <option value='2008'>2008</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>BRANCH</td>
                <td><select name="branch">
                    <option>select branch</option>
                    <?php
                        $branches = ["CSE", "CIVIL", "MECHNICAL", "EEE"];
                        foreach ($branches as $branch) {
                            echo "<option value='${branch}'>${branch}</option>";
                        }
                    ?>
                </select></td>
            </tr>
            <tr>
                <td>YEAR:</td>
                <td><select name="year">
                    <option>
                        select year
                    </option>
                    <?php
                        $years = ["FIRST", "SECOND", "THIRD", "FOURTH"];
                        foreach ($years as $year) {
                            echo "<option value='${year}'>${year}</option>";
                        }
                    ?>
                </select></td>
            </tr>
            <tr>
                <td>SEMESTER:</td>
                <td><select name="semester">
                    <option>
                        select semester
                    </option>
                    <?php
                        $semesters = ["FIRST", "SECOND", "THIRD", "FOURTH", "FIFTH", "SIX", "SEVENTH", "EIGHT"];
                        foreach ($semesters as $semester) {
                            echo "<option value='${semester}'>${semester}</option>";
                        }
                    ?>
                </select></td>
            </tr>
            <tr>
                <td>Date Of Birth:</td>
                <td id="dob"><select name="dd">
                    <option>
                        select day
                    </option>
                    <?php
                        $day = 1;
                        while ($day < 31) {
                            echo "<option value='${day}'>${day}</option>";
                            $day++;
                        }
                    ?>
                </select> <select name="mm">
                    <option>
                        select month
                    </option>
                    <?php
                        $months = ["jan", "feb", "mar", "apr", "may", "jun", "jul", "aug", "sep", "oct", "nov", "dec"];
                        foreach ($months as $month) {
                            echo "<option value='${month}'>${month}</option>";
                        }
                    ?>
                </select> <select name="yy">
                    <option>
                        select year
                    </option>
                    <?php
                        $byear = 1990;
                        while ($byear < 2017) {
                            echo "<option value='${byear}'>${byear}</option>";
                            $byear++;
                        }
                    ?>
                </select></td>
            </tr>
            <tr>
                <td>ADDRESS:</td>
                <td><input name="address" type="text"></td>
            </tr>
            <tr>
                <td><button value="ADD" name="submit">Submit</button></td>
            </tr>
        </table>
    </form>
    <?php
        require 'db_conn.php';
        if(isset($_POST['submit'])) {
          $fn = $_POST['fn'];
          $ln = $_POST['ln'];
          $rn = $_POST['rn'];
          $dd = $_POST['dd'];
          $mm = $_POST['mm'];
          $yy = $_POST['yy'];
          $year = $_POST['year'];
          $branch = $_POST['branch'];
          $address = $_POST['address'];
          $session = $_POST['session'];
          $semester = $_POST['semester'];

          $cap1 = strtoupper($fn);
          $cap2 = strtoupper($ln);
          $cap3 = strtoupper($address);

            $q1 = mysqli_query($conn, "UPDATE std_info SET fname='$cap1',lname='$cap2',session='$session',rn='$rn',branch='$branch',year='$year',semester='$semester',dob='$dd $mm $yy',address='$cap3' where rn = $rn");
            if($q1) {
                echo "Record Successfully Update";
            } else {
                echo "Not Update Your Record" ;
            }
            mysqli_close($conn);
        }
    ?>
</body>
</html>