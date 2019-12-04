<?php

$username_homeowner = "homeowner";
$username_manager = "manager";

if (isset($_POST['username'])) {
  $username = $_POST['username'];

  if ($username === $username_homeowner) {
    header("Location: ../home-owner/landing.php");
  }
  else if ($username === $username_manager) {
    header("Location: ../manager/landing.php");
  }
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <title>HOA Login</title>

    <script type="text/javascript" src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="../js/script.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
  </head>
<body>

<div class="jumbotron jumbotron-fluid jumboYllw">
    <div class="container">
        <h1 class="display-4">Welcome to The Bubble!</h1>
        <p class="lead"> Please Login below. If you are new to the complex, please contact the manager for your login information.  </p>
        <p class="lead"> You can reach the manager, Jane Doe, at 805.234.5567 </p>
    </div>
</div>
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

<div id="id01" class="modal">
  
<form class="modal-content animate" action="/action_page.php" method="post">  
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember Me
      </label>
    </div>

    <div class="container" style="background-color: white">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>
