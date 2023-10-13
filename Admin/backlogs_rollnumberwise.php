<!doctype html>
<html lang="en">

<head>
    <title>Roll Number wise Backlogs</title>
</head>
<style>
      * {
            box-sizing: border-box;
            padding: 0%;
            margin-left: 0%;
            margin-right: 0%;
        }
        .sidenav {
      height: 100%;
      width: 0;
      margin:auto;
      position: fixed;
      z-index: 3;
      top: 0;
      left: 0;
      background-color: salmon;
      overflow-x: hidden;
      transition: 0.2s;
      color: red;
      border-radius: 2% 1% 1% 2%;
      padding-top: 50px;
      box-shadow: 0 4px 8px 1px rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      ;
    }

    .sidenav a {
      padding: 5px 5px 5px 10px;
      text-decoration: none;
      font-size: 18px;
      font-family: 'Times New Roman', Times, serif;
      font-weight: bold;
      color: whitesmoke;
      display: block;
      margin-top: 4.5%;
      transition: 0.2s;
    }

    .sidenav a:hover {
      color: black;
      background-color: white;
    }

    .sidenav .closebtn {
      position: absolute;
      top: 0;
      right: 40px;
      font-size: 30px;
      margin-left: 0px;
    }

    @media screen and (max-height: 450px) {
      .sidenav {
        padding-top: 15px;
      }


    }

   .header {
            display: flex;
            align-items: center;
            height: 15%;
            margin-top: 0%;
            border: 1.5px solid rgb(218, 85, 85);
            background-color: whitesmoke;
        }

        .logo {
            width: 100px;
            height: 90px;
            margin-left: 10px;
            /* Adjust the margin as needed */
        }

        .text {
            text-align: center;
            margin-top: 1%;
            
            flex-grow: 1;
            /* Allow text to expand and fill the remaining space */
        }

        h2,
        h3,
        h4 {

            margin-bottom: -2%;
        }

        h4 {
            color: rgb(39, 38, 38);
        }

        /* Add CSS rules for the form container */
        form {
            max-width: 55%;
            /* Adjust the maximum width as needed */
            margin: auto;
            height: auto;
            margin-top: 10px;
            /* Center the form horizontally */
            padding: 20px;
            display: block;
            
            background-color: lightcoral;
            border-radius:5px;
        }

        /* Add CSS rules for form inputs */
        input[type="text"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-top: 1.5%;
        }

        /* Add CSS rules for the submit button */
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
            
        }
 
        table {
        margin:auto;
        /* Center-align table */
    }

    .sub:hover {
        background-color: green;
        color: white;
    }

    td {
        
        padding: 10px;
    }
    tr:nth-child(even) { 
            background-color: #eee;  
        }
  
    h2,
        h3,
        h4 {
            
            margin-bottom: -2%;
        }

        h4 {
            color: rgb(39, 38, 38);
            text-align:center;
            color:green;
        }
    p {
        text-align: center;
        color:yellow;
        font-size:23px;
        font-weight:bold;

    }
    h1{
        text-align:center;
        color:red;
    }

    th {
        color: red;
        background-color: white;
        text-align: center;
    }
</style>
</head>

<body>
    
    <header>
        <div class="header">
            <div>
                <img src="VVIT.png" class="logo">
            </div>
            <div class="text">
                <h2 style="margin-top:0% ;color:brown;">VASIREDDY VENKATADRI INSTITUTE OF TECHNOLOGY</h2>
                <h4 style="color:rgb(5, 150, 102);">(AUTONOMOUS)</h4>
                <h4>Approved by AICTE and permanently affiliated to JNTUK,</h4>
                <h4>Accredited by NAAC with 'A' grade, Accredited by NBA.</h4>
                <h4 style="margin-bottom:-0.5%;">Pedakakani(md) Guntur(dt) Andhra Pradesh.</h4>
                <br>

            </div>
        </div>
    </header>
<br>
    <span
    style="font-size:30px;cursor:pointer;margin-top:10%;margin-left:1.5%;box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.8);font-size: 20px;border-radius:5px;padding:5px 10px 10px 10px;size:20px;"
    onclick="openNav()" onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
    onmouseout="this.style.backgroundColor='grey'; this.style.color='white';">&#9776;</span>

  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn"
      style="box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);font-size: 20px;border-radius:5px;margin-top:5%;"
      onclick="closeNav()">&#9776;</a>
      <a href="adminpage.php">Home</a>
      <a href="adminpage.php">Home</a>
    <a href="#">Remove Faculty</a>
    <a href="upload.php">Upload CSV File</a>
    <a href="delete.php">Delete CSV File</a>
    <a href="update_supplymarks.php">Update Supply Marks</a>
    <a href="updaterevaluation.php">Update Revaluation Marks</a>
    <a href="#">Change Passcode</a>
    <a href="UpdateSubjectFullNames.php"> Update Subject Fullnames</a>
    <a href="backlogsub.php">Subject wise Backlogs</a>
    <a href="backlogs_rollnumberwise.php">Student wise Backlogs</a>
    <a href="nonbacklog.php">0 Backlog students</a>
    <a href="consolidatedReport.php">CMM</a>
    <a href="aboutus.html">About</a>
    <a href="#">FAQs</a>
</div><br>
        <h1>Roll Number Wise Backlogs</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="text" name="year" placeholder="Year" value="<?php echo $_POST['year'] ?? ''; ?>">
        <br>
                <select name="branch" required oninput="convertToLowercase(this)" value="<?php echo $_POST['branch'] ?? ''; ?>">
            <option value="civ" <?php if (isset($_POST['branch']) && $_POST['branch'] === 'civ')
                echo 'selected'; ?>>CIVIL
                ENGINEERING</option>
            <option value="eee" <?php if (isset($_POST['branch']) && $_POST['branch'] === 'eee')
                echo 'selected'; ?>>
                ELECTRICAL AND ELECTRONIC ENGINEERING</option>

            <option value="mec" <?php if (isset($_POST['branch']) && $_POST['branch'] === 'mec')
                echo 'selected'; ?>>
                MECHANICAL ENGINEERING</option>
            <option value="ece" <?php if (isset($_POST['branch']) && $_POST['branch'] === 'ece')
                echo 'selected'; ?>>
                ELECTRONICS AND COMMUNICATION ENGINEERING</option>
            <option value="cse" <?php if (isset($_POST['branch']) && $_POST['branch'] === 'cse')
                echo 'selected'; ?>>
                COMPUTER SCIENCE ENGINEERING</option>
            <option value="inf" <?php if (isset($_POST['branch']) && $_POST['branch'] === 'inf')
                echo 'selected'; ?>>
                INFORMATION TECHNOLOGY</option>
            <option value="csm" <?php if (isset($_POST['branch']) && $_POST['branch'] === 'csm')
                echo 'selected'; ?>>
                COMPUTER SCIENCE AND MACHINE LEARNING</option>
            <option value="cic" <?php if (isset($_POST['branch']) && $_POST['branch'] === 'cic')
                echo 'selected'; ?>>CYBER
                SECURITY INCLUDING BLOCKCHAIN TECHNOLOGY</option>
            <option value="cso" <?php if (isset($_POST['branch']) && $_POST['branch'] === 'cso')
                echo 'selected'; ?>>
                COMPUTER SCIENCE AND ENGINEERING (IOT)</option>
            <option value="aid" <?php if (isset($_POST['branch']) && $_POST['branch'] === 'aid')
                echo 'selected'; ?>>
                ARTIFICIAL INTELLIGENCE & DATA SCIENCE</option>
            <option value="aim" <?php if (isset($_POST['branch']) && $_POST['branch'] === 'aim')
                echo 'selected'; ?>>
                ARTIFICIAL INTELLIGENCE & MACHINE LEARNING</option>

        </select>

            <select name="semester" id="semester" value="<?php echo $_POST['semester'] ?? ''; ?>">
            
                <option value="all">All Semesters</option>
                <option value="1">Semester 1</option>
                <option value="2">Semester 2</option>
                <option value="3">Semester 3</option>
                <option value="4">Semester 4</option>
                <option value="5">Semester 5</option>
                <option value="6">Semester 6</option>
                <option value="7">Semester 7</option>
                <option value="8">Semester 8</option>
            </select>
            <br>
            <input type="text" name="rollno" placeholder="Roll Number"
                value="<?php echo $_POST['rollno'] ?? ''; ?>"><br>
           <center> <input type="submit" name="submit" value="SUBMIT" class="sub"></center>
        </form>
        <section>
        <?php
        if (isset($_POST['submit'])) {
            $year = $_POST['year'];
            $branch = $_POST['branch'];
            $sem = $_POST['semester'];
            $tablename = $branch . $sem;
            $dbname = 'batch' . $year;
            $con = mysqli_connect("localhost", "root", "");
            $rollNumber = $_POST['rollno'];

            if (!$con) {
                echo "connection error!";
            }
            $query = "SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = '$dbname'";

            // Execute the query
            $result = $con->query($query);

            // Check if the database not exists
            if (!($result->num_rows > 0)) {
                exit("<br><p>{$dbname} data not avaliable.</p>");
            }
            $conn = mysqli_connect("localhost", "root", "", $dbname);


            //if 'all' option is selected
            if ($sem == "all") {
                $tableExistsFlag = 0;
                //for tables 1 to 8 semisters
                for ($i = 1; $i < 9; $i++) {
                    $tablename = $branch . $i;
                    $query = "SHOW TABLES";
                    $result = $conn->query($query);

                    if ($result) {
                        $tableExists = false;

                        // Check if the table exists in the result set
                        while ($row = $result->fetch_assoc()) {
                            if ($row["Tables_in_" . $dbname] == $tablename) {
                                $tableExists = true;
                                break;
                            }
                        }
                    }

                    if ($tableExists) {
                        $tableExistsFlag = 1;

                        //echo $tablename." exists";
                        $sqlcols = "SHOW COLUMNS FROM $tablename";
                        $colres = $conn->query($sqlcols);

                        //fetch column names and store them in an array
                        //$colnames = array();
                        $query = "SELECT ";
                        while ($row = $colres->fetch_assoc()) {
                            //$colnames[]=$row['Field'];
                            $query = $query . "CASE WHEN `" . $row['Field'] . "` = \"F\" THEN '" . $row['Field'] . "' ELSE NULL END AS 'failed_" . $row['Field'] . "',";
                        }
                        $query = substr($query, 0, -1);
                        $query = $query . " FROM " . $tablename . " WHERE HTNO=" . "'" . $rollNumber . "'";
                        //echo $query; 
        
                        $result = $conn->query($query);

                        if (mysqli_num_rows($result) > 0) {
                            $failedSubjects = array();
                            //to retrieve full subject names
                            $subjectstablename = $tablename . "_subjects";
                            $q = "SHOW TABLES";
                            $re = $conn->query($q);

                            if ($re) {
                                $subjecttableExists = false;

                                // Check if the table exists in the result set
                                while ($row1 = $re->fetch_assoc()) {
                                    if ($row1["Tables_in_" . $dbname] == $subjectstablename) {
                                        $subjecttableExists = true;
                                        break;
                                    }
                                }
                                if (!$subjecttableExists) {
                                    echo "<p>Please update subject full names for sem {$i}.</p>";
                                }

                            }


                            while ($row = $result->fetch_assoc()) {
                                foreach ($row as $subject => $value) {
                                    if (!is_null($value)) {
                                        //If the subjects table exists, then we will display full names of the subject otherwise shortforms.
                                        if ($subjecttableExists) {
                                            $s = substr($value, 0, -2);
                                            $q1 = "SELECT subject_name from {$subjectstablename} WHERE subject_code='{$s}'";
                                            //echo $q1;
                                            $res1 = mysqli_query($conn, $q1);
                                            $roww = mysqli_fetch_assoc($res1);
                                            $value = $roww['subject_name'];
                                        }
                                        array_push($failedSubjects, $value);
                                    }
                                }
                            }

                            $hasFailed = false; // Initialize a flag outside the loop
        

                            if (!empty($failedSubjects)) {
                                echo "<h4>Sem {$i} :</h4><br><br>";
                                $table = "<table border='1'><tr><th>Serial Number</th><th>Subjects</th></tr>";
                                $serialNumber = 1;
                                foreach ($failedSubjects as $subject) {
                                    $table .= "<tr><td><center>{$serialNumber}</center></td><td>$subject</td></tr>";
                                    $serialNumber++;
                                }
                                $table .= "</table>";
                                echo $table;

                                $hasFailed = true;
                            }


                            if (!$hasFailed) {
                                echo "<h4>The student has not failed in any subjects in sem{$i}.</h4>";
                            }
                        } else {
                            echo "<p>{$rollNumber} not exists for sem{$i}.</p><br>";
                        }
                    }
                }
                if ($tableExistsFlag == 0) {
                    echo "<p>No data available.</p>";
                }
            } else {
                $tname = $branch . $sem;
                $query = "SHOW TABLES";
                $result = $conn->query($query);

                if ($result) {
                    $tableExists = false;

                    // Check if the table exists in the result set
                    while ($row = $result->fetch_assoc()) {
                        if ($row["Tables_in_" . $dbname] == $tname) {
                            $tableExists = true;
                            break;
                        }
                    }
                }

                if (!$tableExists) {
                    exit("<p>No data available for sem {$sem}</p>");
                }

                $sqlcols = "SHOW COLUMNS FROM $tablename";
                $colres = $conn->query($sqlcols);

                //fetch column names and store them in an array
                //$colnames = array();
                $query = "SELECT ";
                while ($row = $colres->fetch_assoc()) {
                    //$colnames[]=$row['Field'];
                    $query = $query . "CASE WHEN `" . $row['Field'] . "` = \"F\" THEN '" . $row['Field'] . "' ELSE NULL END AS 'failed_" . $row['Field'] . "',";
                }
                $query = substr($query, 0, -1);
                $query = $query . " FROM " . $tablename . " WHERE HTNO=" . "'" . $rollNumber . "'";
                //echo $query; 
        
                $result = $conn->query($query);

                if ($result) {
                    $failedSubjects = array();

                    while ($row = $result->fetch_assoc()) {
                        foreach ($row as $subject => $value) {
                            if (!is_null($value)) {
                                array_push($failedSubjects, $value);
                            }
                        }
                    }

                    if (!empty($failedSubjects)) {
                        echo "<h3>The student has failed in the following subjects:</h3><br>";
                        $serialNumber = 1;
                        echo "<h4> SEM:$sem</h4>";
                        $table = "<table border='1'><tr><th>Sno.</th><th>Subjects</th></tr>";
                        foreach ($failedSubjects as $subject) {
                            $table .= "<tr><td><center>{$serialNumber}</center></td><td>$subject</td></tr>";
                            $serialNumber++;
                        }
                        $table .= "</table>";
                        echo $table;
                    } else {
                        echo "<h4>The student has not failed in any subjects.</h4>";
                    }
                } else {
                    echo "<p>{$rollNumber} not exists for {$sem}.</p><br>";
                }
            }
        }
        ?>
    </section>
    <script>
        function convertToLowercase(inputField) {
            inputField.value = inputField.value.toLowerCase();
        }
    function openNav() {
      document.getElementById("mySidenav").style.width = "250px";
      document.getElementsByClassName("container")[0].style.marginLeft = "250px";
      document.getElementsByClassName("result")[0].style.marginLeft = "250px";
    }
    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
      document.getElementsByClassName("container")[0].style.marginLeft = "0";
      document.getElementsByClassName("result")[0].style.marginLeft = "0";
    }
  </script>
</body>
</html>