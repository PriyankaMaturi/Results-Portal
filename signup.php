<?php
if(isset($_POST['sign_up'])) {
$full_name = $_POST["stu_fullname"];
$roll_no = $_POST["roll_no"];
$branch=$_POST["branch"];
$reg=$_POST["reg"];
$dotnet_mail = $_POST["dotnet_mail"];
$stu_phn = $_POST["stu_phno"];
$parent_phn = $_POST["parent_phn"];
$stu_pwd = $_POST["password"];
$stu_rpwd = $_POST["rpassword"];
$ques = $_POST["security_questions"];
$ans = $_POST["security_answer"];
$img1 = $_FILES["img"]["name"];
$img_tmp = $_FILES["img"]["tmp_name"];
$conn = mysqli_connect("localhost", "root", "", "sign_up");
if(!$conn){
    die("Something went wrong!!!");
}
$errors = array();
if(empty($full_name) || empty($roll_no) ||empty($reg) || empty($dotnet_mail) || empty($stu_phn) || empty($parent_phn) ||  empty($stu_pwd) || empty($stu_rpwd) || empty($ques) || empty($ans) || empty($img1)){
    array_push($errors,"Please fill all the details");
}
if(!filter_var($dotnet_mail, FILTER_VALIDATE_EMAIL)){
    array_push($errors,"Email is not valid");
}
if(strlen($stu_pwd) <8){
    array_push($errors,"Password must be 8 characters long");
}
if($stu_pwd !== $stu_rpwd){
    array_push($errors,"Password doesn't match");
}
if (empty($ques)) {
    array_push($errors, "Please select a security question");
}
$sql1 = "SELECT * FROM signup WHERE dotnet_mail='$dotnet_mail'";
$qry1 = mysqli_query($conn, $sql1);
$rowcount = mysqli_num_rows($qry1);
if($rowcount >0){
    array_push($errors,"Email already exists");
}
if(count($errors)>0){
    foreach($errors as $error){
        echo "<div class='alert alert-danger'id='wrong' >$error</div>";
    }
}else{
    $file_name = $roll_no . "." . strtolower(pathinfo($img1, PATHINFO_EXTENSION));
    $allowed_ext = array("png", "jpg", "jpeg");
if (in_array(strtolower(pathinfo($img1, PATHINFO_EXTENSION)), $allowed_ext)) {
    $folder = 'student_img/';
    $new_img_path = $folder . $file_name; // Use $file_name instead of $img1
    move_uploaded_file($img_tmp, $new_img_path);
}
    $sql = "INSERT INTO signup(full_name, roll_no, branch, dotnet_mail, phn_no, parentphn_no, pwd, repeat_pwd, security_ques, security_ans, img,reg) VALUES ('$full_name','$roll_no','$branch','$dotnet_mail','$stu_phn','$parent_phn','$stu_pwd','$stu_rpwd','$ques','$ans','$img1','$reg')";
    $qry = mysqli_query($conn, $sql);   
    if($qry){
       echo "<div class='alert alert-success' id='right'>You are registered successfully</div>";
       echo "<script>setTimeout(\"location.href = 'http://localhost/project3/signup.php';\",1000);</script>";
    }else {
        die("something went wrong");
    }
}
}
?>
<html>
<head>
    <link rel="stylesheet" href="signup.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">  
</head>
<style>
#myVideo {
    position: fixed;
    right: 0;
    bottom: 0;
    top: 0;
    left:0;
    width: 100vw; 
    height: 100vh;
    object-fit: cover;
    z-index: -1;
  }
.sidenav {
  height: 90%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
 right: 0;
  background-color:#FF416C;
  overflow-x: hidden;
  transition: 0.5s;
  color: red;
  padding-top: 50px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);;
}
.sidenav a {
  padding:5px 5px 5px 10px;
  text-decoration: none;
  font-size: 15px;
  font-family: 'Times New Roman', Times, serif;
  font-weight: bold;
  color: whitesmoke;
  display: block;
  transition: 0.3s;
}
.sidenav a:hover {
  color:black;
  background-color:white;
}
.sidenav .closebtn {
  position: absolute;
  top: 0;
  right:40px;
  font-size: 30px;
  margin-left: 0px;
}
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
  .logo{
	position: absolute;
    width:100px;
    height: 90px;
	top:0;
    margin-left:-85%;
    margin-top: 0vh;
  }
  .file-input-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-top: 20px;
}
/* Style for the file input */
.file-input {
    margin-bottom: 10px;
}
</style>
  <body>
	<video autoplay muted loop id="myVideo">
		<source src="bgvideo.mp4" type="video/mp4">		
	</video>
	 <i style="display:contents;"><img src="VVIT.png" class="logo"/></i> 
  
      <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" style="box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);font-size: 20px;border-radius:5px;" onclick="closeNav()">&#9776;</a>
  <a href="adminlogin.php">Admin Login</a>
  <a href="teacherlogin.php">Teacher Login</a>
  <a href="signup.php">Student Login</a>
  <a href="aboutus.html">About</a>
  <a href="#">FAQs</a>
</div>
<span style="font-size:30px;cursor:pointer;margin-left:92%;margin-top:-38%;box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);font-size: 20px;border-radius:5px;padding:5px 10px 10px 10px;size:20px;" onclick="openNav()" onmouseover="this.style.backgroundColor='white'; this.style.color='black';" onmouseout="this.style.backgroundColor='grey'; this.style.color='white';"> &#9776;</span>
     <div class="container" id="container">
	<div class="form-container sign-up-container">
    <form action="signup.php" method="post" enctype="multipart/form-data">
                    <input type="text" name="stu_fullname" placeholder="FULL NAME" required/>
                    <input type="text" name="roll_no" placeholder="REGISTERED NUMBER" required/>
                    <input type="text" name="reg" placeholder="REGULATION" required/>
                    <select name="branch" placeholder="Select_Branch" required> 
                <option value="CIVIL ENGINEERING">01-CIVIL ENGINEERING</option>
                <option value="ELECTRICAL AND ELECTRONIC ENGINEERING">02-ELECTRICAL AND ELECTRONIC ENGINEERING</option>
                <option value="MECHANICAL ENGINEERING">03-MECHANICAL ENGINEERING</option>
                <option value="ELECTRONICS AND COMMUNICATION ENGINEERING">04-ELECTRONICS AND COMMUNICATION ENGINEERING</option>
                <option value="COMPUTER SCIENCE ENGINEERING">05-COMPUTER SCIENCE ENGINEERING</option>
                <option value="INFORMATION TECHNOLOGY">12-INFORMATION TECHNOLOGY</option>
                <option value="COMPUTER SCIENCE AND MACHINE LEARNING">42-COMPUTER SCIENCE AND MACHINE LEARNING</option>
                <option value="CYBER SECURITY INCLUDING BLOCKCHAIN TECHNOLOGY">47-CYBER SECURITY INCLUDING BLOCKCHAIN TECHNOLOGY</option>
                <option value="COMPUTER SCIENCE AND ENGINEERING (IOT)">49- COMPUTER SCIENCE AND ENGINEERING (IOT) </option>
                <option value="ARTIFICIAL INTELLIGENCE & DATA SCIENCE">54-ARTIFICIAL INTELLIGENCE & DATA SCIENCE</option>
                <option value="ARTIFICIAL INTELLIGENCE & MACHINE LEARNING">61-ARTIFICIAL INTELLIGENCE & MACHINE LEARNING</option>
            </select>
                    <input type="email" name="dotnet_mail" placeholder=".NETEmail" required/>
                    <input type="text" name="stu_phno" placeholder="STUDENT PHONE" required/>
                    <input type="text" name="parent_phn" placeholder="PARENT NUMBER" required/>
                    <input type="password" name="password" placeholder="enter password" required/>
                    <input type="password" name="rpassword" placeholder="re-enter" required/>
                    <select name="security_questions" placeholder="select security question" required> 
                <option value="1">What is your pet's name?</option>
                <option value="2">What is your favorite color?</option>
                <option value="3">What street did you live on in third grade?</option>
                <option value="4">Name of town where you were born?</option>
            </select>
                    <input type="text" name="security_answer" placeholder="Security answer" required/>
                    <input type="file" name="img" placeholder="upolad image" required/>
                    <button type="submit" name="sign_up" onclick="sh()" style="cursor: pointer;">Sign Up</button>
                </form></div>
	<div class="form-container sign-in-container" id="d2">
    <form action="f1.php" method="post" enctype="multipart/form-data">
                    <h1>Sign in</h1>
                    <div class="social-container">
                    </div>
                    <input type="email" name="mail" placeholder="Email" required />
                    <input type="password" name="pwd" placeholder="Password" required/>
                    <a href="studentforgot.php">Forgot your password?</a>
                    <button type="submit" name="login" id="si1" onclick="hide()" style="cursor: pointer;">Sign In</button>
                </form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>To View Your Results!</h1>
				<p>Keep connected with us please signup with your personal info</p>
				<button class="ghost" id="signIn" style="cursor: pointer;">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp" style="cursor: pointer;">Sign Up</button>
			</div>
		</div>
	</div>
</div>
</div>
<br><br>
<script>
	function hide(){
		document.getElementById("d1").style.display="none";
	}
	function sh(){
		document.getElementById("d2").style.dispay="none"
	}
    function openNav() {
  document.getElementById("mySidenav").style.width = "200px";
}
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
<footer>
<div style="display: flex;text-align:center;margin-left: -12%;"><span class="material-icons" style="margin-top:0.75% ;" >&#xe158;</span><p>examcell@vvit.net,vvitexamcell@gmail.com</p></div>
	<p style="margin-top: 0%;margin-bottom:0%;">Vasireddy Venkatadri Institute of Technology
		Nambur (V)
		Peda Kakani (Md)
		Guntur (Dt)
		Andhra Pradesh
		522508 </p>
</footer>
<script src="signup.js">
</script>
</body>
</html>