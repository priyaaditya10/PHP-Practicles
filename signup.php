<?php
function largest(){
  if(isset($_POST['submit'])){ //check if form was submitted
    $uname = $_POST['username'];
    $pass = $_POST['password'];


    if($uname == "Admin" && $pass == "password"){
      $message = "Welcome Admin!";
    }
    elseif ($uname == "" && $pass == "") {
      $message = "All fields must be filled up!! Try next time.";
    }
    else{
      $message = "Either Username or Password is incurroct! ";
    }

    echo "<script type='text/javascript'>
      alert('". $message ."');
    </script>";
  }
}
?>

<!Doctype html>
<html>

  <head>
  	<meta charset="utf-8" />
    <title>PHP Practicals</title>
    <link href="css/stylesheet1.css" rel="stylesheet" />
  </head>

  <body>

    <header class="text-center">    <h1>Login</h1>    </header>

    <div id="container">
    <div id="menu">

    </div>

    <form action="" method="POST" class="form">
      <?= largest(); ?>

      <div class="form-group">
      <h3>Enter your details: </h3> <br />
        <center>
          <input type="text" name="username" class="inputBox" placeholder="Username or E-Mail" /> <br />
          <input type="password" name="password" class="inputBox" placeholder="Your Password" /> <br />
          <button type="submit" name="submit">Login</button> <br />

          <!--     Additional       -->
          <a href="login.php">Sign In</a><br />


        </center>
      </div>

    </form>
  </div>

    <footer>
        &copy; <a href="https://linktr.ee/ravi_prakash1907" target="_blank">Ravi</a> | <?php echo date("Y"); ?>
    </footer>

  </body>

</html>
