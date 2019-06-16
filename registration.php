<?php
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body  style="display: flex; align-items: center;justify-content: center; width: 100%;flex-direction:column; height:80%">
   
<?php
	require('db.php');
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['username'])){
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$email = stripslashes($_REQUEST['email']);
		$email = mysqli_real_escape_string($con,$email);
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);

		$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date) VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'><h3>You are registered successfully.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>
<div class="form">
<div style="border:1px solid #d5d5d5; width:90vh">
      <h1
        style="background-color: green; margin-top:-10px; height:50px; padding:10px; color:#fff;display: flex; align-items: center;justify-content: center;"
      >
        Welcome to Global Architects!
      </h1>
      <div
        style="display: flex; align-items: center;justify-content: center; width: 100%;flex-direction:column"
      >
        <h3>Tell us a little about yourself</h3>
        <form name="registration" action="" method="post">
        First name:<br />
<input type="text" name="username" placeholder="Firstname" required />
<br />
Last name:<br />
<input type="text" name="username" placeholder="Lastname" required />
<br />
<input type="email" name="email" placeholder="Email" required />
<input type="password" name="password" placeholder="Password" required /><br />
Pincode:<br />
          <input type="password" name="psw" />
<input type="submit" name="submit" value="Register" />
</form>
       
        <div
          style="display: flex; align-items: center; justify-content: center"
        >
          <img src="img/1.png" style="margin:10px; height: 100px;" />
          <img src="img/1.png" style="margin:10px; height: 100px;" />
          <img src="img/1.png" style="margin:10px; height: 100px;" />
        </div>
      </div>
    </div>
<br /><br />
</div>
<?php } ?>
</body>
</html>
