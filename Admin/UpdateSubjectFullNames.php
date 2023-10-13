<?php
session_start();
?>
<html lang="en">

<head>
    <title>Update Subject Names</title>
</head>
<style>
 *{
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
    }    /* Add CSS rules for the form container */
    form {
        max-width: 500px; /* Adjust the maximum width as needed */
        margin:auto;
        height: auto;
        margin-top: 10px; /* Center the form horizontally */
        padding: 20px;
        display: block;
        border: 1px solid #ccc;
        background-color:lightcoral;
    }

    /* Add CSS rules for form inputs */
    input[type="text"],select {
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
    table{
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
    label{
        font-weight: bold;
    }
    h1{
        text-align:center;
        color:blue;
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

        #correct {
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

<h1>UPDATE SUBJECT NAMES</h1>
    <form action="" method="post" enctype="multipart/form-data">
    <label for="year">Year:</label>
        <input type="text" name="year" value="<?php echo $_POST['year'] ?? ''; ?>" required>
        <label for="branch">Branch:</label>
    <select name="branch" required>
        <option value="civ" <?php if (isset($_POST['branch']) && $_POST['branch'] === 'civ') echo 'selected'; ?>>CIVIL ENGINEERING</option>
        <option value="eee" <?php if (isset($_POST['branch']) && $_POST['branch'] === 'eee') echo 'selected'; ?>>ELECTRICAL AND ELECTRONIC ENGINEERING</option>
        
        <option value="mec" <?php if (isset($_POST['branch']) && $_POST['branch'] === 'mec') echo 'selected'; ?>>MECHANICAL ENGINEERING</option>
        <option value="ece" <?php if (isset($_POST['branch']) && $_POST['branch'] === 'ece') echo 'selected'; ?>>ELECTRONICS AND COMMUNICATION ENGINEERING</option>
        <option value="cse" <?php if (isset($_POST['branch']) && $_POST['branch'] === 'cse') echo 'selected'; ?>>COMPUTER SCIENCE ENGINEERING</option>
        <option value="inf" <?php if (isset($_POST['branch']) && $_POST['branch'] === 'inf') echo 'selected'; ?>>INFORMATION TECHNOLOGY</option>
        <option value="csm" <?php if (isset($_POST['branch']) && $_POST['branch'] === 'csm') echo 'selected'; ?>>COMPUTER SCIENCE AND MACHINE LEARNING</option>
        <option value="cic" <?php if (isset($_POST['branch']) && $_POST['branch'] === 'cic') echo 'selected'; ?>>CYBER SECURITY INCLUDING BLOCKCHAIN TECHNOLOGY</option>
        <option value="cso" <?php if (isset($_POST['branch']) && $_POST['branch'] === 'cso') echo 'selected'; ?>>COMPUTER SCIENCE AND ENGINEERING (IOT)</option>
        <option value="aid" <?php if (isset($_POST['branch']) && $_POST['branch'] === 'aid') echo 'selected'; ?>>ARTIFICIAL INTELLIGENCE & DATA SCIENCE</option>
        <option value="aim" <?php if (isset($_POST['branch']) && $_POST['branch'] === 'aim') echo 'selected'; ?>>ARTIFICIAL INTELLIGENCE & MACHINE LEARNING</option>

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
            <center>
        <input type="submit" name="submit" value="Submit">
        </center>
    </form>
    <section>
    <?php
if (isset($_POST['submit'])){
    // session_start();
    $year = $_POST['year'];
    $branch = $_POST['branch'];
    $sem = $_POST['sem'];

    $_SESSION['yr'] = $year;
    $_SESSION['br'] = $branch;
    $_SESSION['se'] = $sem;

    $dbname = 'batch'.$year;
    $tablename = $branch.$sem;
    $con = mysqli_connect("localhost", "root", "");
    if (!$con) {
        echo "<div id='wrong'>Connection error!</div>";
        exit();
    }
    $query = "SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = '$dbname'";

    // Execute the query
    $result = $con->query($query);

    // Check if the database not exists
    if (!($result->num_rows > 0)) {
        exit("<div id='wrong'>{$dbname} Data not avaliable.</div>");
        //echo "{$dbname} data not avaliable.";
    }

    $conn = mysqli_connect("localhost", "root", "", $dbname);

    $query = "SHOW TABLES";
    $result = $conn->query($query);

    if ($result) {
        $tableExists = false;

        // Check if the table exists in the database
        while ($row = $result->fetch_assoc()) {
            if ($row["Tables_in_" . $dbname] == $tablename) {
                $tableExists = true;
                break;
            }
        }

        if (!$tableExists) {
            echo "<div id='wrong'>Data not available!</div>";
            exit();
        }}
    $query = "SELECT * FROM $tablename"; 
    $result = mysqli_query($conn, $query);

    $colnames = [];
    $colvalue = [];
    if ($result) {
        
        // Fetch the first row to get column names
        $row = mysqli_fetch_assoc($result);
        echo "<form action='' method='post' enctype='multipart/form-data'>";
        $i=1;
        foreach ($row as $columnName => $value) {
            // Check if the value in the column is NOT a single character
            if ((strlen($value) == 1 || strlen($value) == 2) && !in_array($value, ["0", "1", "2", "3"])) {
                $colnames[] = substr($columnName,0,-2);
    
                // Add label and empty text box for each column
                echo '<label for="' . $columnName . '">' . substr($columnName,0,-2) . '</label>';
                echo '<input type="text" id="' . $columnName . '" name="subject'.$i.'" value="" required> <br>'; 
                $i=$i+1;
            }
        }
    
        echo "<center><input type='submit' name='sub_save' value='Submit'></center>";
        echo "</form>";
        $_SESSION['cn'] = $colnames;   
        
        
    } else {
        echo "<div id='wrong'>Query Failed!</div>";
    }
}

if (isset($_POST['sub_save'])) {
    // session_start();
    echo "hi";
    $year = $_SESSION['yr'];
    $branch = $_SESSION['br'];
    $sem = $_SESSION['se'];

    $dbname = 'batch' . $year;
    $tablename = $branch . $sem;
    
    $conn = mysqli_connect("localhost", "root", "", $dbname);
    
    // Create a table name for subjects
    $name = $tablename . '_subjects';
    $query = "SHOW TABLES";
    $result = $conn->query($query);
    $tableExists = false;
    if ($result) {
       

        // Check if the table exists in the database
        while ($row = $result->fetch_assoc()) {
            if ($row["Tables_in_" . $dbname] == $name) {
                $tableExists = true;
                break;
            }
        }

        if ($tableExists) {
            echo "<div id='wrong'>Subject Names already exists!</div>";
            exit;
        }}
    //echo "hi";
    // Create the subjects table if it doesn't exist
    $createquery = "CREATE TABLE IF NOT EXISTS $name (
        subject_code VARCHAR(255),
        subject_name VARCHAR(255)
    )";

    $colnames = $_SESSION['cn'];
    
    
    if (mysqli_query($conn, $createquery)) {
        // Loop through the column names obtained from the previous form submission
        $i=1;
        foreach ($colnames as $columnName) {
            // Get the user-input value corresponding to each column name
            $colname="subject".$i;
            $inputValue = $_POST[$colname];
            
            // Insert the data into the subjects table
            $insertQuery = "INSERT INTO $name (subject_code, subject_name) VALUES ('$columnName', '$inputValue')";
            
            $res = mysqli_query($conn, $insertQuery);
            $i=$i+1;
        }
        if($res){
            echo "<div id='correct'>Data inserted successfully!!</div>";
        }else {
            echo "<div id='wrong'>Error inserting data!</div>";
        }
    } else {
        echo "<div id='wrong'>Error creating table!</div>";
    }
    
    mysqli_close($conn);
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