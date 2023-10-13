<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Re-Evaluation</title>
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
        font-size: 15px;
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

    #correct {
        margin-top: 2%;
        text-align: center;
        color: green;
        font-size: 30px;
    }

    #wrong {
        margin-top: 2%;
        text-align: center;
        color: red;
        font-size: 30px;
    }

    .container h1 {
        text-align: center;
        color: green;
    }

    p {
        text-align: center;
        font-size: 30px;
        color: blue;
    }
    .subjectsgrid{
        display: grid;
        grid-template-columns: 50% 50%;
    }
    .subjectsgrid input{
        width:90%;
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
  </div>
    <p style="margin-top:1%;"> Update Student Results</p>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="text" name="year" value="<?php echo $_POST['year'] ?? ''; ?>" placeholder="Year" required>
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
            <br>
        <input type="text" name="rollno" value="<?php echo $_POST['rollno'] ?? ''; ?>" placeholder="Roll Number"
            required>
        <center>
            <input type="submit" name="submit" value="Enter">
        </center>
    </form>

    <section>
        <?php
        if (isset($_POST['submit'])) {
            $year = $_POST['year'];
            $branch = $_POST['branch'];
            $sem = $_POST['sem'];

            $_SESSION['yr'] = $year;
            $_SESSION['br'] = $branch;
            $_SESSION['se'] = $sem;
            $colnames = [];

            $tableName = $branch . $sem;
            $dbname = 'batch' . $year;
            $rollno = $_POST['rollno'];
            $_SESSION['rn'] = $rollno;
            $conn = mysqli_connect("localhost", "root", "");

            $query = "SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = '$dbname'";

            // Execute the query
            $result = $conn->query($query);

            // Check if the database not exists
            if (!($result->num_rows > 0)) {
                echo "<div id='wrong'>{$dbname} Data not avaliable!</div>";
                exit();
            }  
            $connection = mysqli_connect("localhost", "root", "", $dbname);

            if (!$connection) {
                die("<p id='wrong'>Connection failed!</p>");
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
                if ($tableExists==false) {
                    exit("<div id='wrong'>Invalid Details.</div>");
                }
            }
           
            $query = "SELECT * FROM $tableName WHERE HTNO='$rollno'";

            $result = mysqli_query($connection, $query);
            if (mysqli_num_rows($result)>0) {

                // Fetch the first row to get column names
                $row = mysqli_fetch_assoc($result);
                // retrieve full names from subjects table.
                $subjectstablename = $tableName . "_subjects";
                $q = "SHOW TABLES";
                $re = $connection->query($q);
                $subjecttableExists = false;
                if ($re) {
                    // Check if the table exists in the result set
                    while ($row1 = $re->fetch_assoc()) {
                        if ($row1["Tables_in_" . $dbname] == $subjectstablename) {
                            $subjecttableExists = true;
                            break;
                        }
                    }
                    if (!$subjecttableExists) {
                        echo "<div id='correct'>Please update subject full names for sem {$i}!</div>";
                    } 
                }
                echo "<form action='' method='post' enctype='multipart/form-data'>";
                $i = 1;
                echo "<div class='subjectsgrid' >";
                foreach ($row as $columnName => $value) {
                    // Check if the value in the column is NOT a single character
                    if (substr($columnName, -1) === 'G') {
                        $s=substr($columnName, 0, -2);
                        $colnames[] = $s;
                        if($subjecttableExists){ 
                            $q1 = "SELECT subject_name from {$subjectstablename} WHERE subject_code='{$s}'";
                                            //echo $q1;
                            $res1 = mysqli_query($connection, $q1);
                            $roww = mysqli_fetch_assoc($res1);
                            $s = $roww['subject_name'];
                        }

                        // Add label and empty text box for each column
                        echo '<label for="' . $columnName . '">' . $s . '</label>';
                        echo "<label></label>";
                        echo '<input type="text" id="' . $columnName . '" name="grade' . $i . '" value="" placeholder="Grades"> ';
                        echo '<input type="text" id="' . $columnName . '" name="credit' . $i . '" value="" placeholder="Credits"> ';
                        $i = $i + 1;
                    }
                }
                echo "</div>";
                echo "<input type='submit' name='update' value='Submit'>";
                echo "</form>";
                $_SESSION['cn'] = $colnames;
                exit();

            }
            else{
                echo "<div id='wrong'>Rollno doesnot exists.</div>";
            }


        }
        if (isset($_POST['update'])) {

            $year = $_SESSION['yr'];
            $branch = $_SESSION['br'];
            $sem = $_SESSION['se'];
            $rollno = $_SESSION['rn'];
            $colnames = $_SESSION['cn'];
            $tableName = $branch . $sem;
            $dbname = 'batch' . $year;
            $connection = mysqli_connect("localhost", "root", "", $dbname);

            if (!$connection) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $i = 1;
            $flag=0;
            foreach ($colnames as $columnName) {
                // Get the user-input value corresponding to each column name
                $colname = "grade" . $i;
                $credit = "credit" . $i;

                if (isset($_POST[$colname]) && isset($_POST[$credit])) {
                    $inputValue = $_POST[$colname];
                    $inputValue2 = $_POST[$credit];
                    if (!empty($inputValue) && !empty($inputValue2)) {
                        // Build the update query for each subject
                        $subgrade = $columnName . '-G';
                        $subcredit = $columnName . '-C';
                        $updateQuery = "UPDATE {$tableName} SET `{$subgrade}`='{$inputValue}' , `{$subcredit}`='{$inputValue2}' WHERE `HTNO`='{$rollno}' ";
                        $result = mysqli_query($connection, $updateQuery);

                        if ($result) {
                            $flag=1;

                        } else {
                            $flag=1;
                            echo "<div id='wrong'>Error Updateing grade for $subgrade to $inputValue<br></div>";
                            echo "<div id='wrong'>Error Updating grade for $subcredit to $inputValue2<br></div>";
                        }
                    } else if (empty($inputValue) && empty($inputValue2)) {
                         
                    } else {
                        echo "<div id='wrong'>Please fill both grades and credits for {$columnName}!!<br></div>";
                    }
                }
                $i++;
                        }
                        if($flag==1){ 
                            echo "<div id='correct'>Successfully updated grades and credits<br></div>"; 
                        }
        }
        ?>
            </section>
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