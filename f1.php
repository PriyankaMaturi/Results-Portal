<?php
session_start();
if (isset($_POST['login'])) {

    $conn = new mysqli("localhost", "root", "", "sign_up");
    if ($conn->connect_error) {
        die("ConnectionA Failed:" . $conn->connect_error);
    } else {
        $mail = $_POST['mail'];
        $pa = $_POST['pwd'];
        $rs = mysqli_query($conn, "SELECT * FROM signup WHERE dotnet_mail='$mail'");
        if (mysqli_num_rows($rs) == 1) {
            $row = mysqli_fetch_array($rs);
            $password = $row["pwd"];
            if ($pa == $password) {
                session_start();
                $_SESSION['mail'] = $mail;
                $_SESSION['pwd'] = $pa;

                echo "<script>setTimeout(\"location.href = 'Student/studentresult.php';\",500);</script>";
            } else {
                echo '<script> alert("Incorrect!"); </script>';
                echo "<script>setTimeout(\"location.href = 'signup.php';\",500);</script>";

                exit;
            }
        } else {
            echo '<script> alert("Incorrect!"); </script>';
            echo "<script>setTimeout(\"location.href = 'signup.php';\",500);</script>";

            exit;
        }
    }
}



if (isset($_POST['logint'])) { 
       $conn = new mysqli("localhost", "root", "", "sign_up");
    if ($conn->connect_error) {
        die("Connection Failed:" . $conn->connect_error);
    } else {
        $dotnet_mail = $_POST['dotnet_mail'];
        $pa = $_POST['password'];
        $rs = mysqli_query($conn, "SELECT * FROM teachers WHERE dotnet_mail='{$dotnet_mail}'");
        if (mysqli_num_rows($rs) == 1) {
            $row = mysqli_fetch_array($rs);
            $password = $row["password"];
            if ($pa == $password) {
                
                $_SESSION['dotnet_mail'] = $dotnet_mail;
                $_SESSION['password'] = $pa;
                echo "<script>setTimeout(\"location.href = 'Teacher/teacherpage.php';\",500);</script>";
            } else {
                echo '<script> alert("Incorrect!"); </script>';
                echo "<script>setTimeout(\"location.href = 'teacherlogin.php';\",500);</script>";

                exit;
            }
        } else {
            echo '<script> alert("Incorrect!"); </script>';
            echo "<script>setTimeout(\"location.href = 'teacherlogin.php';\",500);</script>";

            exit;
        }
    }
}
if (isset($_POST['loginat'])) { 
    $conn = new mysqli("localhost", "root", "", "sign_up");
 if ($conn->connect_error) {
     die("Connection Failed:" . $conn->connect_error);
 } else {
     $dotnet_mail = $_POST['dotnet_mail'];
     $pa = $_POST['password'];
    
     if (($pa == "123456789" && $dotnet_mail=="admin@vvit.net")||($pa == "987654321" && $dotnet_mail=="admin123@vvit.net")) {
             
             $_SESSION['dotnet_mail'] = $dotnet_mail;
             $_SESSION['password'] = $pa;
             echo "<script>setTimeout(\"location.href = 'Admin/adminpage.php';\",500);</script>";
         } else {
             echo '<script> alert("Incorrect!"); </script>';
             echo "<script>setTimeout(\"location.href = 'adminlogin.php';\",500);</script>";

             exit;
         }
     }
 }


?>