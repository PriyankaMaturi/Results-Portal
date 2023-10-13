<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Non Backlog Details</title>
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
      background-color:salmon;
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
            max-width: 55%;
            /* Adjust the maximum width as needed */
            margin: auto;
            height: auto;
            margin-top: 10px;
            /* Center the form horizontally */
            padding: 20px;
            display: block;
            border: 1px solid #ccc;
            background-color: lightcoral;
            border-radius: 10px;
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
            margin-left:45%;
            font-size:15px;
        }

        table {
            text-align: center;
            margin-left: auto;
            margin-right: auto;
        }

        tr:nth-child(even) { 
            background-color: #eee;  
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
        #wrong{
            margin-top: 2%;
            text-align: center;
            color:red;
            font-size:30px;
        }
        .container h1{
            text-align: center;
            color:green;
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

    <div class="container">
        <h1>Non-Backlog Students List</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="text" name="year" placeholder="Year" value="<?php echo $_POST['year'] ?? ''; ?>"><br>
        
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
<br>
            <input type="submit" name="submit" value="Enter">
        </form>
    </div>
    <br>
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
    $db = 'batch' . $year;
    $con = mysqli_connect("localhost", "root", "");
    if (!$con) {
        die("<p id='wrong'>Connection failed!</p>");
    }

    $query = "SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = '$db'";

    // Execute the query
    $result = $con->query($query);

    // Check if the database not exists
    if (!($result->num_rows > 0)) {
        echo "<div id='wrong'>{$db} Data not avaliable.</div>";
        exit();
        //echo "{$dbname} data not avaliable.";
    }
    $conn = mysqli_connect("localhost", "root", "", $db);

    // check table exists or not for lateral enteries  ;
    // sem3 if exists so that laterals roll no can be included 
    $tname = $branch . '3';
    $query = "SHOW TABLES";
    $result = $conn->query($query);

    if ($result) {
        $tableExists = false;

        // Check if the table exists in the result set
        while ($row = $result->fetch_assoc()) {
            if ($row["Tables_in_" . $db] == $tname) {
                $tableExists = true;
                break;
            }
        }
    }
    if (!$tableExists) {
        $tname = $branch . '1';
        $query = "SHOW TABLES";
        $result = $conn->query($query);

        if ($result) {
            $tableExists = false;

            // Check if the table exists in the result set
            while ($row = $result->fetch_assoc()) {
                if ($row["Tables_in_" . $db] == $tname) {
                    $tableExists = true;
                    break;
                }
            }
        }
        if (!$tableExists) {
            echo "<div id='wrong'>No data found.</div>";
            exit();
        }

    }
    $q = "SELECT HTNO from " . $tname;
    $re = mysqli_query($conn, $q);
    $htno = array();
    // store the hall ticket numbers from query
    while ($row = $re->fetch_assoc()) {
        foreach ($row as $subject => $value) {
            array_push($htno, $value);
        }
    }

    $table = "<table border='1'><tr><th>HTNO</th><th>NAME</th></tr>";
    foreach ($htno as $rollno) {
        // check table exists for 1 to 8.
        $flag = 0;
        for ($i = 1; $i <= 8; $i++) {
            $tablename = $branch . $i;
            $query = "SHOW TABLES";
            $result = $conn->query($query);

            if ($result) {
                $tableExists = false;

                // Check if the table exists in the result set
                while ($row = $result->fetch_assoc()) {
                    if ($row["Tables_in_" . $db] == $tablename) {
                        $tableExists = true;
                        break;
                    }
                }
            }

            if ($tableExists) {
                $colnames = [];
                $query = "SELECT * FROM " . $tablename . " LIMIT 1 ";
                $result = mysqli_query($conn, $query);

                if ($row = mysqli_fetch_assoc($result)) {
                    foreach ($row as $columnName => $value) {
                        // Check if the value in the column is NOT a single character
                        if ((strlen($value) == 1 || strlen($value) == 2) && !in_array($value, ["0", "1", "2", "3"])) {
                            $colnames[] = $columnName;
                        }
                    }
                }

                // now we fetched column names for subjects.
                // if students failed in atleast 1 subject then count will be incremented .

                $q = "SELECT HTNO from {$tablename} WHERE HTNO = '{$rollno}' AND (";
                foreach ($colnames as $sub) {
                    $q .= "`{$sub}` = 'F' OR ";
                }
                $q = substr($q, 0, -3);
                $q .= ")";
                // echo $q;
                $res = mysqli_query($conn, $q);
                if (!$res) {
                    echo "FAIL";
                }
                if (mysqli_num_rows($res) > 0) {
                    // echo "entered";
                    $flag = 1;
                    break;
                }
            } else {
                break;
            }

        }
        if ($flag == 0) {
            $q = "SELECT Name FROM {$tname} WHERE HTNO='{$rollno}'";
            $r = mysqli_query($conn, $q);
            $row = $r->fetch_assoc();
            $name = $row["Name"];
            $table .= "<tr><td>{$rollno}</td><td>{$name}</td></tr>";
        }


    }
    $table .= "</table>";
    echo $table;
}
?>