<?php

 
require('db.php');
include("auth.php"); //include auth.php file on all secure pages ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Dashboard - Secured Page</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body
    background="img/bg.jpg"
    style="display: flex; align-items:center; justify-content: center;"
  >
    <div
      style="display: flex; flex-direction: column; align-items:center; justify-content: space-between; height: 400px; width: 600px; background-color: #ffffff; border-radius: 3px; box-shadow: 1px 1px 1px #d5d5d5;"
    >
    <div class="form">
        <p>Dashboard</p>
        <p>This is another secured page.</p>
        <p><a href="index.php">Home</a></p>
        <a href="logout.php">Logout</a>
      <div
        style="display: flex; align-items: center;justify-content: center;background-color: aquamarine; width:100%; height: 50px;"
      >
        Heading
      </div>
      <div
        style="display: flex; flex-direction: row; align-items: center;justify-content: center"
      >
        <a href="option1.html">
          <div
            style="display: flex; flex-direction: column; align-items: center; justify-content: center"
          >
            <div
              style=" height: 100px; width: 100px;border: 1px solid grey; border-radius: 50%"
            >
              img
            </div>
            <div>Option 1</div>
          </div>
        </a>
        <a href="option2.html">
          <div
            style="display: flex; flex-direction: column;align-items: center; justify-content: center; margin-left: 100px"
          >
            <div
              style=" height: 100px; width: 100px;border: 1px solid grey; border-radius: 50%"
            >
              img
            </div>
            <div>Option 1</div>
          </div>
        </a>
      </div>
      <div
        style="display: flex; align-items: center;justify-content: center;background-color:#d5d5d5;width:100%; height: 50px;"
      >
        sub heading
      </div>
    </div>
<br /><br /><br /><br />

</div>
</body>
</html>
