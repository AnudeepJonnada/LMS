<?php
session_start();

// Check if user is logged in with Google
if (!isset($_SESSION['google_user_id'])) {
  // Redirect to login page
  header("Location: home");
  exit();
}

// User is logged in, display content
?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width-device-width, intial-scale=1.0">
        <link rel="stylesheet" href="style1.css">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,intial-scale=1.0">
        <meta http-equiv="Cache-Control" content="no-cache, must-revalidate">
        <link href="https://fonts.googleapis.com/css2?family=roboto:wght@400;700&display=swap" rel="stylesheet">
        <link rel="apple-touch-icon" sizes="57x57" href="Favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="Favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="Favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="Favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="Favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="Favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="Favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="Favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="Favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192" href="Favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="Favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="48x48" href="Favicon/favicon-48x48.png">
        <link rel="icon" type="image/png" sizes="96x96" href="Favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="Favicon/favicon-16x16.png">
        <link rel="manifest" href="Favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <title>AFFIXPP | Branches</title>
    </head>
    <body id="bodybg" oncontextmenu="return false;">
            <div class="navbar">
                <img src="affixpplogo.png" class="logo">
                <nav>
                    <ul>
                        <li><a href="affixbranches">HOME</a></li>
                        <li><a href="about">ABOUT</a></li>
                        <li>
                          <div class="profile-dropdown">
                          <div onclick="toggle()" class="profile-dropdown-btn">
                          <span>PROFILE</span>
                          </div>
                        </li>
                    </ul>
                </nav>

                  <ul class="profile-dropdown-list">
                    <li class="profile-dropdown-list-item">
                      <div class="profile-dropdown-list-item-head">
                        <img class="profile-img" src="">
                        <h5 id="name"></h5>
                      </div>
                    </li>
                    <hr />
                    <li class="profile-dropdown-list-item">
                      <button class="attendence-btn" onclick="attendence()">Attendence</button>
                      <button class="logout-btn" onclick="logout()">LOGOUT</button>
                    </li>
                </ul>
          </div>
<div class="container">
  <div class="element-card">
    <div class="front-facing">
      <img class="card-bg" src="CIVIL.png" alt="Placeholder image">
      <h1 class="abr">CIV</h1>
      <p class="title">Civil</p>
    </div>
    <div class="back-facing">
      <p><a class="btn" href="affixcivilbranch">Subjects</a></p>
    </div>
  </div>
  
  <div class="element-card">
    <div class="front-facing">
      <img class="card-bg" src="MECH.png" alt="Placeholder image">
      <h1 class="abr">MECH</h1>
      <p class="title">Mechanical</p>
    </div>
    <div class="back-facing">
      <p><a class="btn" href="affixmechbranch">Subjects</a></p>
    </div>
  </div>
  
  <div class="element-card">
    <div class="front-facing">
      <img class="card-bg" src="CSE.png" alt="Placeholder image">
      <h1 class="abr">CSE</h1>
      <p class="title">Computer Science</p>
    </div>
    <div class="back-facing">
      <p><a class="btn" href="affixcsebranch">Subjects</a></p>
    </div>
  </div>
  
  <div class="element-card">
    <div class="front-facing">
      <img class="card-bg" src="ECE.png" alt="Placeholder image">
      <h1 class="abr">ECE</h1>
      <p class="title">Electronic Communication</p>
    </div>
    <div class="back-facing">
      <p><a class="btn" href="affixecebranch">Subjects</a></p>
    </div>
  </div>

  <div class="element-card">
    <div class="front-facing">
      <img class="card-bg" src="EEE.png" alt="Placeholder image">
      <h1 class="abr">EEE</h1>
      <p class="title">Electric & Electronic</p>
    </div>
    <div class="back-facing">
      <p><a class="btn" href="affixeeebranch">Subjects</a></p>
    </div>
  </div>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
<script src="script.js"></script>
<script src="script1.js"></script>
<script src="script2.js"></script>
</html>
 