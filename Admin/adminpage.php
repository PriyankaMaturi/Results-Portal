
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Portal</title>
  <style>
    body {
      font-family: Arial, sans-serif;
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

    .container {
      width: 100%;
      margin-right: 2%;
      padding: 20px 20px 20px 20px;
      border-radius: 5px;
      background-color: lightgray;
      height: 30%;
    }

    .result {

      left: 0px;
      margin-top: 0%;
      margin-bottom: 2%;
      width: 100%;
      margin-right: 2%;

      padding: 20px;
      border: 1px solid #09800f;
      border-radius: 5px;
      background-color: lightgray;
    }


    #student-details {
      margin-top: 1.3%;
      left: 0px;
      font-family: 'Times New Roman', Times, serif;
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex: right;
      padding: auto;
      border: rgb(15, 14, 14);
      background-color: rgba(228, 50, 55, 1);
      box-shadow: black 5px;
      color: aliceblue;
    }

    #student-details img {
      width: 8%;
      height: auto;
      padding-left: 1%;
      padding-bottom: 1%;
      padding-top: 1%;
      border: 2px 1px 20px 1px solid #f3e4e4;
      border-radius: 5px;
    }


    select {
      padding: 5px;
    }

    .result-card {
      margin-top: 0 auto;
      border: 2px solid #066425;
      border-radius: 5px;
      padding: 10px;
      text-align: left;
      width: 300px;
      height: 280px;
      flex: center;
    }

    .result-card h4 {
      margin: 0;
    }

    .subject-list {
      list-style-type: none;
      padding: 0;
    }

    .subject-list li {
      margin: 5px 0;
    }

    h2 {
      font-family: 'Times New Roman', Times, serif;
      text-align: center;
      margin-left: 5px;
      margin-top: 5px;
      color: black;
    }

    label {
      font-family: 'Times New Roman', Times, serif;
      font-size: 50px;
      height: 10px;
      width: 10px;
      color: #151616e7;
    }

    * {
      box-sizing: border-box;
      padding: 0%;
      margin-left: 0%;
      margin-right: 0%;
    }

    .header {
      display: flex;
      position: relative;
      align-items: center;
      height: 15%;
      top: 0;
      margin-top: 0%;
      margin-left: 0%;
      margin-right: 0%;
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

    .newd1 {
      display: flex;
      justify-content: center;
      /* Horizontal centering */
      align-items: center;
      margin-top: 2%;
    }

    p {
      margin-left: -40%;
      height: 20%;
      font-size: 17px;
      font-weight: bold;
      text-align: left;
    }

    .c2 {
      height: 20%;
      font-weight: bold;
      text-align: center;
      margin-left: -2%;
    }

    .card-container {
      display: flex;
    }

    .card {
      width: 300px;
      height: 200px;
      /* Set the height of your card */
      margin: 10px;

      margin-left: 2.4%;
      perspective: 1000px;
    }

    .card-inner {
      width: 100%;
      height: 100%;
      text-align: center;
      font-family: 'Times New Roman', Times, serif;
      transform-style: preserve-3d;
      transition: transform 0.5s;
    }

    .card:hover .card-inner {
      transform: rotateY(180deg);
      transition-duration: 1.5s;
    }

    .card-front {
      width: 100%;
      height: 100%;
      font-family: 'Times New Roman', Times, serif;
      position: absolute;
      backface-visibility: hidden;
      display: flex;
      
      align-items: center;
      color: whitesmoke;
      justify-content: center;
      background: salmon;
      border-radius: 8px;
      box-shadow: 2px 2px 4px 2px rgba(0, 0, 0, 1);
    }

    .card-back {
      transform: rotateY(180deg);
      transition-duration: 3s;
      width: 100%;
      height: 100%;
      position: absolute;
      font-family: 'Times New Roman', Times, serif;
      backface-visibility: hidden;
      display: flex;
      align-items: center;
      text-align: center;
      color: whitesmoke;
      justify-content: center;
      background: rgba(228, 50, 55, 1);


      border-radius: 10px;
      box-shadow: 2px 2px 4px rgba(0, 0, 0, 1);
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
  

  <br>
  <h1
    style="background-color: lightgray;text-align:center;font-family: 'Times New Roman', Times, serif;padding: 2%; margin-top:1.5%;margin-bottom: -4%;width: 100%;margin-left: 0%; position: relative;">
    ADMIN PORTAL</h1>
  <br>
  <br>

  <br><br>
  <div class="card-container">
    <div class="card">
      <div class="card-inner">
        <div class="card-front">
          <h3>Subject wise backlogs</h3>
        </div>
        <div class="card-back">
          <h3>You can view Subject Wise Backlogs of a Students </h3>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-inner">
        <div class="card-front">
          <h3>Student wise backlogs</h3>
        </div>
        <div class="card-back">
          <h3>You can view Student Wise Backlogs of all Semesters</h3>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-inner">
        <div class="card-front">
          <h3>No backlogs</h3>
        </div>
        <div class="card-back">
          <h3>This will give merit students who have no backlogs</h3>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-inner">
        <div class="card-front">
          <h3>CMM Consolidated Marks Memo</h3>
        </div>
        <div class="card-back">
          <h3>You can see a CMM of a student</h3>
        </div>
      </div>
    </div>
  </div>
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
  <input type="button" >

</body>

</html>