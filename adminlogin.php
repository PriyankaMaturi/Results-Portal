
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
    left: 0;
    width: 100vw;
    height: 100vh;
    object-fit: cover;
    z-index: -1;
  }

  .sidenav {
    height: 91%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    right: 0;
    background-color: #FF416C;
    overflow-x: hidden;
    transition: 0.5s;
    color: red;
    padding-top: 50px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    ;
  }

  .sidenav a {
    padding: 5px 5px 5px 10px;
    text-decoration: none;
    font-size: 15px;
    font-family: 'Times New Roman', Times, serif;
    font-weight: bold;
    color: whitesmoke;
    display: block;
    transition: 0.3s;
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

    .sidenav a {
      font-size: 18px;
    }
  }

  .logo {
    position: absolute;
    width: 100px;
    height: 90px;
    top: 0;
    margin-left: -85%;
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

  <i style="display:contents;"><img src="VVIT.png" class="logo" /></i>

  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn"
      style="box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);font-size: 20px;border-radius:5px;"
      onclick="closeNav()">&#9776;</a>
      <a href="adminlogin.php">Admin Login</a>
    <a href="teacherlogin.php">Teacher Login</a>
    <a href="signup.php">Student Login</a>
    <a href="aboutus.html">About</a>
    <a href="#">FAQs</a>
  </div>
  <span
    style="font-size:30px;cursor:pointer;margin-left:92%;margin-top:-38%;box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);font-size: 20px;border-radius:5px;padding:5px 10px 10px 10px;size:20px;"
    onclick="openNav()" onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
    onmouseout="this.style.backgroundColor='grey'; this.style.color='white';">&#9776;</span>

  <div class="container" id="container">
    <div class="form-container sign-in-container" id="d2">
      <form action="f1.php" method="post" enctype="multipart/form-data">
        <h1>Sign in</h1>
        <div class="social-container">
        </div>

        <input type="email" name="dotnet_mail" placeholder="   Email" style="border:rgba(0, 0, 0, 0.19) 2px solid"; required />
        <input type="password" name="password" placeholder="   Password"style="border:rgba(0, 0, 0, 0.19) 2px solid"; required /><br><br>
        <button type="submit" name="loginat" id="si1" style="cursor: pointer;">Sign In</button>
      </form>

    </div>
    <div class="overlay-container">
      <div class="overlay">
        <div class="overlay-panel overlay-left">
          <h1>To View Student Info!!!</h1>
          <p>Keep connected with us please signup with your personal info</p>
          <button class="ghost" id="signIn" style="cursor: pointer;">Sign In</button>
        </div>
        <div class="overlay-panel overlay-right">
          <h1>Hello Admin!</h1>
          <p>Enter your personal details and start journey.......</p>

         
        </div>
      </div>
    </div>
  </div>
  </div>
  <br><br>
  <script>
    function hide() {
      document.getElementById("d1").style.display = "none";
    }
    function sh() {
      document.getElementById("d2").style.dispay = "none"
    }
    function openNav() {
      document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
    }
  </script>
  <footer>

    <div style="display: flex;text-align:center;margin-left: -12%;"><span class="material-icons"
        style="margin-top:0.75% ;">&#xe158;</span>
      <p>examcell@vvit.net,vvitexamcell@gmail.com</p>
    </div>
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