<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Reset Password</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

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
            border-radius: 5px;
        }

        /* Add CSS rules for form inputs */
        input[type="text"],
        input[type="email"],
        input[type="password"],
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
            color: blue;
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
    </header><br>
    <center>
        <h1>FORGOT PASSWORD</h1>
    </center>



    <form action="" method="post" enctype="multipart/form-data">
        <label for="email">Email:</label><br>

        <input type="email" name="dotnet_mail" value="<?php echo $_POST['dotnet_mail'] ?? ''; ?>" required>
        <label for="securityques">Security Question:</label><br>
        <select name="security_ques" required>
            <option value="1">What is your pet's name?</option>
            <option value="2">What is your favorite color?</option>
            <option value="3">What street did you live on in third grade?</option>
            <option value="4">Name of town where you were born?</option>
        </select>
        <label for="securityans">Security Answer:</label><br>
        <input type="text" name="security_ans" value="<?php echo $_POST['security_ans'] ?? ''; ?>" required>

        <label for="password">Reset Password:</label><br>
        <input type="password" name="password" value="<?php echo $_POST['password'] ?? ''; ?>" required>


        <label for="rpassword">Confirm Reset Password:</label><br>
        <input type="password" name="cpassword" value="<?php echo $_POST['cpassword'] ?? ''; ?>" required>

        <center><input type="submit" name="confirm" class="login_btn" /></center>

    </form>


</body>

</html>

<?php
// Your PHP code here
if (isset($_POST['confirm'])) {
    $stu_mail = $_POST["dotnet_mail"];
    $stu_pwd = $_POST["password"];
    $stu_cpwd = $_POST["cpassword"];
    $ques = $_POST["security_ques"];
    $ans = $_POST["security_ans"];

    $conn = mysqli_connect("localhost:3307", "root", "");
    $dbname = "sign_up";

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $connection = mysqli_connect("localhost:3307", "root", "", $dbname);

    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }
    //$errors = array();
    if (empty($stu_mail) || empty($stu_pwd) || empty($stu_cpwd) || empty($ques) || empty($ans)) {
        exit("<div id='wrong'>Please fill all the details</div>");
    }
    if (!filter_var($stu_mail, FILTER_VALIDATE_EMAIL)) {
        exit("<div id='wrong'>Email is not valid</div>");
    }
    $sql1 = "SELECT * FROM signup WHERE dotnet_mail='$stu_mail'";
    $qry1 = mysqli_query($connection, $sql1);
    $rowcount = mysqli_num_rows($qry1);
    if ($rowcount <= 0) {
        exit("<div id='wrong'>Email doesn't exists</div>");
    }
    if (strlen($stu_pwd) < 8) {
        exit("<div id='wrong'>Password must be 8 characters long</div>");
    }
    if ($stu_pwd !== $stu_cpwd) {
        exit("<div id='wrong'>Password doesnot match</div>");
    }
    if (empty($ques)) {
        exit("<div id='wrong'>Please select a security question</div>");
    }



    $sql2 = "SELECT * FROM signup WHERE dotnet_mail='$stu_mail'";
    $qry2 = mysqli_query($connection, $sql2);
    $details = mysqli_fetch_assoc($qry2);
    $ans = strtolower($ans);
    if ($details['security_ques'] == $ques && $details['security_ans'] == $ans) {

        $sql = "UPDATE signup SET pwd='$stu_pwd' WHERE dotnet_mail='$stu_mail'";
        $res = mysqli_query($connection, $sql);


        if ($res) {
            echo "<div id='correct'>Password changed successfully✅</div>";
            // echo "<a href='login_page.php'>Return to Login Page</a>";
        } else {
            echo "<div id='wrong'>Unable to change password!</div>";
        }
    } else {
        echo "<div id='wrong'>Invalid security question or answer!</div>";
    }


}
?>