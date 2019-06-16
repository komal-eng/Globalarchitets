

<?php

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <link rel="stylesheet" href="css/style2.css" />
  </head>
  <body
    background="img/background.jpg"
    style=" background-position: center center;
  background-repeat: repeat;display: flex; align-items: center;justify-content: center"
  >
  <?php
	require('db.php');
	session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
		
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username' and password='".md5($password)."'";
		$result = mysqli_query($con,$query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){
			$_SESSION['username'] = $username;
			header("Location: index.php"); // Redirect user to index.php
            }else{
				echo "<div class='form wrongEmail'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
				}
    }else{
?>
    <div style="height: 500px; width:60%; background-color: #ffffff">
      <div style="    height: 100px;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;background-color: #d5d5d5">
        <div style="font-size: 2rem">Welcome to Global Architecture</div>
        <div style="font-size: 1rem">New way to Design home</div>
      </div>
      <div style="display: flex;
      flex-direction: row;
      align-items: center;
      justify-content: space-around;
      height: 300px;
      border-bottom: 1px solid #d5d5d5;">
      
		<div class="form">
				<h1>Log In</h1>
				<form action="" method="post" name="login">
				<input type="text" name="username" placeholder="Username" required />
				<input type="password" name="password" placeholder="Password" required />
				<input name="submit" type="submit" value="Login" />
				</form>
				<p>Not registered yet? <a href='registration.php'>SignUp</a></p>

				<br /><br />
       
        </div>
        <div style="    display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;">
          <div>Easily Share with fiends and Family</div>
          <button class="fb-button">Login With Facebook</button>
          <button class="google-button">Login With Google</button>
        </div>
      </div>
      <div style="    display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100px;
  ">
       <div>Already have a account <a href='registration.php'>Sign Up</a></div> 
        <div>
            By Sign Up you are agree with our <a href="#">Terms and Services</a></div>
            </div>
      </div>
      </div>
     
	</div>
	<?php } ?>
  </body>
</html>
