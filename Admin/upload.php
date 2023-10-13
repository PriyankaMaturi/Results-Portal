<!doctype html>
<html lang="en">

<head>
    <title>Import CSV File into databse</title>
</head>
<style>
    * {
        box-sizing: border-box;
        padding: 0%;
        margin-left: 0%;
        margin-right: 0%;
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
        ;
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
        max-width: 500px;
        /* Adjust the maximum width as needed */
        margin: auto;
        height: auto;
        margin-top: 10px;
        /* Center the form horizontally */
        padding: 20px;
        display: block;
        border: 1px solid #ccc;
        background-color: lightcoral;
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
        text-align: center;
        margin-left: auto;
        margin-right: auto;
    }

    /* Add hover effect for the submit button */
    input[type="submit"]:hover {
        background-color: #0056b3;
    }

    /* Add CSS rules for section headings */
    section h2 {
        color: #007bff;
        margin-top: 20px;
        margin-bottom: 10px;
    }

    /* Add CSS rules for checkboxes */
    .items {
        margin-bottom: 10px;
    }

    /* Add additional styling as needed */
    label {
        font-weight: bold;
    }

    h1 {
        text-align: center;
        color: blue;
    }

    input[type="file"] {
        margin-bottom: 10px;
        margin-top: 1.5%;
    }

    #wrong {
        margin-top: 2%;
        text-align: center;
        color: red;
        font-size: 30px;
    }

    #success {
        margin-top: 2%;
        text-align: center;
        color: #198754;
        font-size: 30px;
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


</style>

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

    <h1>UPLOAD DATA FROM CSV FILE TO DATABASE</h1>

    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="year">Year:</label><br>
        <input type="text" name="year" value="<?php echo $_POST['year'] ?? ''; ?>" required>
        <label for="branch">Branch:</label>
        <select name="branch" required>
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

        <label for="Semester">Semester:</label><br>
        <select name="sem" required>
            <option value="1" <?php if (isset($_POST['sem']) && $_POST['sem'] === "1")
                echo 'selected'; ?>>1</option>
            <option value="2" <?php if (isset($_POST['sem']) && $_POST['sem'] === "2")
                echo 'selected'; ?>>2</option>
            <option value="3" <?php if (isset($_POST['sem']) && $_POST['sem'] === "3")
                echo 'selected'; ?>>3</option>
            <option value="4" <?php if (isset($_POST['sem']) && $_POST['sem'] === "4")
                echo 'selected'; ?>>4</option>
            <option value="5" <?php if (isset($_POST['sem']) && $_POST['sem'] === "5")
                echo 'selected'; ?>>5</option>
            <option value="6" <?php if (isset($_POST['sem']) && $_POST['sem'] === "6")
                echo 'selected'; ?>>6</option>
            <option value="7" <?php if (isset($_POST['sem']) && $_POST['sem'] === "7")
                echo 'selected'; ?>>7</option>
            <option value="8" <?php if (isset($_POST['sem']) && $_POST['sem'] === "8")
                echo 'selected'; ?>>8</option>

        </select>

        <label for="Upload">Upload:</label><br>
        <input type="file" id="customFileInput" name="file" accept=".xlsx, .xls, .csv"
            value="<?php echo $_POST['file'] ?? ''; ?>" required> <br>
        <center>
            <input type="submit" name="submit" value="Upload">
        </center>
    </form>
    <script>
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
<?php

if (isset($_POST['submit'])) {
    $year = $_POST['year'];
    $branch = $_POST['branch'];
    $sem = $_POST['sem'];
    $tablename = $branch . $sem;
    $dbname = 'batch' . $year;
    $con = mysqli_connect("localhost", "root", "");
    if (!$con) {
        exit("<div id='wrong'>Not connected to xampp</div>");
    }
    $query = "SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = '$dbname'";

    // Execute the query
    $result = $con->query($query);

    // Check if the database exists
    if (!($result->num_rows > 0)) {
        $sql = "CREATE DATABASE $dbname";
        if (!($con->query($sql) === TRUE)) {
            exit("<div id='wrong'>Error in creating databse</div>");
        }
    }
    $fileMimes = array(
        'text/x-comma-separated-values',
        'text/comma-separated-values',
        'application/octet-stream',
        'application/vnd.ms-excel',
        'application/x-csv',
        'text/x-csv',
        'text/csv',
        'application/csv',
        'application/excel',
        'application/vnd.msexcel',
        'text/plain'
    );

    // Validate whether selected file is a CSV file
    if (!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'], $fileMimes)) {

        // Open uploaded CSV file with read-only mode
        $csvFile = fopen($_FILES['file']['tmp_name'], 'r');
        //echo "working";

        // Skip the first line
        $header = fgetcsv($csvFile);
        $count = count($header);
        //echo $count;
        $conn = mysqli_connect("localhost", "root", "", $dbname);
        //check if the table exists
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
            if ($tableExists) {
                exit("<div id='success'>Data already exists.✅</div>");
            }
        }
        $sql = "CREATE TABLE $tablename (";
        for ($i = 0; $i < $count - 1; $i++) {
            $sql = $sql . "`" . $header[$i] . "` VARCHAR(50) ,";
        }
        $sql = $sql . "`" . $header[$count - 1] . "` VARCHAR(50) )";
        //echo $sql;
        $res = mysqli_query($conn, $sql);
        if (!$res) {
            exit("<div id='wrong'>Error in creating table.</div>");
        }
        // header is created , inserting data into table
        while (($getData = fgetcsv($csvFile, 10000, ",")) !== FALSE) {
            // Get row data
            $sql = "INSERT INTO $tablename VALUES(";
            for ($i = 0; $i < $count - 1; $i++) {
                $sql = $sql . "'" . $getData[$i] . "',";
            }
            $sql = $sql . "'" . $getData[$count - 1] . "')";
            //echo $sql;
            $res = mysqli_query($conn, $sql);
            if (!$res) {
                exit("<div id='wrong'>data not inserted into table</div>");
            }
            //mysqli_query($conn, "INSERT INTO $tablename VALUES ('" . $fname . "', '" . $lname . "')");
        }
        // Close opened CSV file
        fclose($csvFile);
        exit("<div id='success'>Details uploaded✅</div>");

    }
}
?>