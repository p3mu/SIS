<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Add :: Student Information System</title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/main.js"></script>
</head>
<body>
    <form action="" id="reg" method="post" name="reg" onsubmit="return validate()">
        <h1>STUDENT INFORMATION SYSTEM</h1>
        <nav>
            <a href="index.php" class="active">HOME</a>
            <a href="update.php">UPDATE</a>
            <a href="delete.php">DELETE</a>            
            <a href="view.php">VIEW</a>
        </nav>
        <table>
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
                        <?php
                            $sess = 2008;
                            while ($sess < 2017) {
                                echo "<option value='${sess}'>${sess}</option>";
                                $sess++;
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>ID NO:</td>
                <td><input name="rn" type="text"></td>
            </tr>
            <tr>
                <td>DEPARTMENT:</td>
                <td><select name="branch">
                    <option>select departent</option>
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

            $q1 = mysqli_query($conn, "INSERT INTO std_info VALUES('$cap1','$cap2','$session','$rn','$branch','$year','$semester','$dd $mm $yy','$cap3')");
            if($q1) {
                echo "Record Successfully Add";
            } else {
                echo "Not Add Your Record" ;
            }
            mysqli_close($conn);
        }
    ?>
</body>
</html>