<!--fully completed -->
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>subject wise backlogs</title>
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
      background-color: rgba(228, 50, 55, 1);
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
      <a href="teacherpage.php">Home</a>
    <a href="backlogsub.php">Subject wise Backlogs</a>
    <a href="backlogs_rollnumberwise.php">Student wise Backlogs</a>
    <a href="nonbacklog.php">0 Backlog students</a>
    <a href="consolidatedReport.php">CMM</a>
    <a href="aboutus.html">About</a>
    <a href="#">FAQs</a>
  </div><br>
 
    <form action="" method="post" enctype="multipart/form-data">
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

        <label for="sem">Semester:</label>
        <select name="sem" required>
            <option value="1" <?php if (isset($_POST['sem']) && $_POST['sem'] === 1)
                echo 'selected'; ?>>1</option>
            <option value="2" <?php if (isset($_POST['sem']) && $_POST['sem'] === 2)
                echo 'selected'; ?>>2</option>
            <option value="3" <?php if (isset($_POST['sem']) && $_POST['sem'] === 3)
                echo 'selected'; ?>>3</option>
            <option value="4" <?php if (isset($_POST['sem']) && $_POST['sem'] === 4)
                echo 'selected'; ?>>4</option>
            <option value="5" <?php if (isset($_POST['sem']) && $_POST['sem'] === 5)
                echo 'selected'; ?>>5</option>
            <option value="6" <?php if (isset($_POST['sem']) && $_POST['sem'] === 6)
                echo 'selected'; ?>>6</option>
            <option value="7" <?php if (isset($_POST['sem']) && $_POST['sem'] === 7)
                echo 'selected'; ?>>7</option>
            <option value="8" <?php if (isset($_POST['sem']) && $_POST['sem'] === 8)
                echo 'selected'; ?>>8</option>

        </select>


        <input type="submit" name="submit" value="Enter">
    </form>
    <section>
        <?php
        //session_start();  
        if (isset($_POST['submit'])) {
            // <!-- Replace with your form action -->
            
            $html='<form method="POST" action="">
                <!-- Replace with your form action -->
                <label>Select Column(s):</label>
                <div class="items"><input type="checkbox" value="selectall" checked onchange="s(this);" name="selectall">Select All
                    &emsp;</div>
                <div class="items"><input type="checkbox" value="deselectall" onchange="d(this);" name="deselectall">Deselect All<br></div>

                <script>
                    function s(c) {
                        if (c.checked) {
                            var e = document.getElementsByName("selected_columns[]");
                            for (var i = 0; i < e.length; i++) {
                                e[i].checked = true;
                            }
                            var d = document.getElementsByName("deselectall");
                            d[0].checked = false;
                        }
                    }

                    function d(c) {
                        if (c.checked) {
                            var e = document.getElementsByName("selected_columns[]");
                            for (var i = 0; i < e.length; i++) {
                                e[i].checked = false;
                            }
                            var e1 = document.getElementsByName("selectall");
                            e1[0].checked = false;
                        }
                    }
                </script>';
                


                $year = $_POST['year'];
                $branch = $_POST['branch'];
                $sem = $_POST['sem'];
                $tableName = $branch . $sem;
                $dbname = 'batch' . $year;
                $_SESSION["tablename"] = $tableName;

                $_SESSION["dbname"] = $dbname;
                $con = mysqli_connect("localhost", "root", "");

                if (!$con) {
                    echo "<div id='wrong'>Connection failed!</div>";
                    exit();
                }
                $query = "SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = '$dbname'";

                // Execute the query
                $result = $con->query($query);

                // Check if the database not exists
                if (!($result->num_rows > 0)) {
                    echo "<div id='wrong'> <br>{$dbname} data not avaliable!</div>";
                    exit();
                }

                $connection = mysqli_connect("localhost", "root", "", $dbname);

                if (!$connection) {
                    echo "<div id='wrong' >Connection Error!</div>";
                    exit();
                }

                $query = "SHOW TABLES";
                $result = $connection->query($query);

                if ($result) {
                    $tableExists = false;

                    // Check if the table exists in the result set
                    while ($row = $result->fetch_assoc()) {
                        if ($row["Tables_in_" . $dbname] == $tableName) {
                            $tableExists = true;
                            break;
                        }
                    }
                    if(!$tableExists){
                        echo "<div id='wrong' >Data unavaliable!</div>";
                        exit();
                    }
                }

                $query = "SELECT * FROM $tableName ";
                $result = mysqli_query($connection, $query);

                if ($row = mysqli_fetch_assoc($result)) {
                    foreach ($row as $columnName => $value) {
                        // Check if the value in the column is NOT a single character
                        if ((strlen($value) == 1 || strlen($value) == 2) && !in_array($value, ["0", "1", "2", "3"])) {
                            $html.= '<input type="checkbox" name="selected_columns[]" checked value="' . $columnName . '" style="margin-bottom:2.5%; width:auto;">' . substr($columnName, 0, -2) . '<br>';
                        }
                    }
                }
              $html.='  <input type="submit" name="Submit" value="Submit"> </form> ';
                echo $html;
            mysqli_close($connection); // Close the database connection
            exit();
        }

        ?>

    </section>
    <br>
    <br>
    <section>
        <?php
        if (isset($_POST['Submit'])) {
            // session_start(); 
        
            $tableName = $_SESSION["tablename"];
            $dbname = $_SESSION["dbname"];

            $conn = mysqli_connect("localhost", "root", "", $dbname);
            $opt = $_POST['selected_columns'];
            $count = 0;
            foreach ($opt as $item) {
                $count += 1;
            }
            if (!$conn) {
                echo "<div id='wrong' >Connection Error!</div>";
                exit();
            }

            $query = "SELECT HTNO ,";
            for ($i = 0; $i < count($opt); $i++) {
                $query = $query . "CASE WHEN `" . $opt[$i] . "` = 'F' THEN '❌' ELSE '✔️' END AS `" . $opt[$i] . "` ,";
            }

            $query = substr($query, 0, -1);
            $query = $query . " FROM " . $tableName . " WHERE ";

            for ($i = 0; $i < count($opt); $i++) {
                $query = $query . '`' . $opt[$i] . '`' . " = 'F' OR ";
            }
            $query = substr($query, 0, -3);
            $res = mysqli_query($conn, $query);
            //echo $query ;
        

            if ($res) {
                //to retrieve full subject names
                $subjectstablename = $tableName . "_subjects";
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
                        echo "Please update subject full names.";
                    }

                }

                $table = "<table border='1'><tr><th>Serial Number</th><th>HTNO</th>";
                foreach ($opt as $col) {
                    $value=$col;
                    //If the subjects table exists, then we will display full names of the subject otherwise shortforms.
                    if ($subjecttableExists) {
                        $s = substr($value, 0, -2);
                        $q1 = "SELECT subject_name from {$subjectstablename} WHERE subject_code='{$s}'";
                        //echo $q1;
                        $res1 = mysqli_query($conn, $q1);
                        $roww = mysqli_fetch_assoc($res1);
                        $value = $roww['subject_name'];
                    }
                    $table = $table . "<th>" . $value . "</th>";
                }
                $table = $table . "<th>No. of Backlogs</th></tr>";

                $failedCounts = array_fill_keys($opt, 0);
                $serialNumber = 1;

                while ($row = $res->fetch_assoc()) {
                    $table = $table . "<tr>";
                    $table .= "<td>{$serialNumber}</td>";
                    $serialNumber++;
                    $crossCount = 0;

                    foreach ($row as $key => $data) {
                        $table = $table . "<td><center>" . $data . "</center></td>";
                        if (in_array($key, $opt) && $data === '❌') {
                            $failedCounts[$key]++;
                            $crossCount++;
                        }
                    }
                    $table .= "<td>{$crossCount}</td>";
                    $table = $table . "</tr>";
                }
                $table .= "<tr><th>Failed Count</th><td></td>";
                foreach ($opt as $col) {
                    $table .= "<td><center>{$failedCounts[$col]}</center></td>";
                }
                $table .= "<td></td></tr>";
                $table = $table . "</table>";
                echo $table;
            }
        }
        ?>

    </section>

</body>

</html>