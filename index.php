<?php


include("auth.php"); //include auth.php file on all secure pages ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <link rel="stylesheet" href="css/style3.css" />
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />

    <title>Dashboard</title>
  </head>
  <body style="background-color: #e5e5e5;">
    <div class="header">
    
      <div
        style="
      display: flex;
      align-items: center;
  "
      >
        <img
          src="./img/target.png"
          style="width: 80px;margin-left: 70px;margin-right: 30px"
        />
        <input placeholder="Search Photos, Products & More ..." class="input" />
        <img
          src="./img/target.png"
          style="width: 44px;margin-right: 10px;margin-left: 10px;"
        />
        <img
          src="./img/target.png"
          style="width: 44px;margin-right: 10px;margin-left: 10px;"
        />
        <img
          src="./img/target.png"
          style="width: 44px;margin-right: 10px;margin-left: 10px;"
        />
        <div class="avatar">
          F
        </div>
        <div>
          Your  <?php echo $_SESSION['username']; ?>
        
        </div>
      </div>
      <div
        style="
      display: flex;
      align-items: center;
      margin-left: 40%;
  "
      >
        <div class="headerTitle"><a href="dashboard.php">Dashboard</a></div>
        <div class="headerTitle"><a href="profile1.php">add photos</a></div>
        <div class="headerTitle">PHOTOS</div>
        <div class="headerTitle">PHOTOS</div>
        <div class="headerTitle">  <a href="logout.php">Logout</a></div>
      </div>
    </div>

    <div class="container">
      <div>
        <img src="img/background.jpg" style=" height: 201px; width: 100%; " />
        <div class="cnBody">
          <div class="cnTitle">Ideabooks</div>
          <div class="cnTitle">Activity</div>
          <div class="cnTitle">Message</div>
        </div>
      </div>
      <div
        class="profile"
        style="    margin-top: -201px;
      "
      >
        <div class="profilepicture">
        <?php echo $_SESSION['username']; ?>
        </div>
        <div class="profileInfo">
          <div> <?php echo $_SESSION['username']; ?></div>
          <div>0 Followers | 0 Following</div>
        </div>
        <div class="profileEdit">
          <div>Preview Your profile</div>
          <button class="button">Edit Profile</button>
        </div>
      </div>
      <div
        style="    height: 67%;
      display: flex;
      flex-direction: column;
"
      >
        <div
          style="
        font-size: 4rem;
        font-weight: 100;
    "
        >
          1 Ideabooks
        </div>
        <div
          style="
        display: flex;
        align-items: center;
    "
        >
          <input placeholder="Search" class="smallPlaceholder" />
          <div class="collaborator">All Collaborators</div>
          <div class="collaboratorEdit">Create books</div>
        </div>
        <div
          style="    width: 250px;
        height: 300px;
        margin-top: 20px;box-shadow: 0 2px 4px 0 rgba(0,0,0,.16)"
        >
          <div style="    height: 200px;background-color: #d5d5d5;"></div>
          <div class="profileCard">
              <div>
              <?php echo $_SESSION['username']; ?> ideas
              </div>
            <div>
                No ideas
            </div>
        </div>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
