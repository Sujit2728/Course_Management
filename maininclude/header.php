<!DOCTYPE HTML>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width,initial-scale=1.0">
 <link rel="stylesheet" href="css/bootstrap.min.css">
 <link rel="stylesheet" href="css/all.min.css">
 <link rel="preconnect" href="https://fonts.gstatic.com">
 <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,600&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="css/style.css">

 <title>Course Management</title>
</head>
<body>

<!-- Start navigation --> 
<nav class="navbar navbar-expand-sm navbar-dark fixed-top ">
    <a class="navbar-brand" href="index.php">Course Management</a>
    <span class="navbar-text">Learn and Implement</span>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <ul class="navbar-nav custom-nav">
      <li class="nav-item custom-nav-item"><a href="index.php" class="nav-link">Home</a></li>
      <li class="nav-item custom-nav-item"><a href="course.php" class="nav-link">Course</a></li>
      <li class="nav-item custom-nav-item"><a href="paymentstatus.php" class="nav-link">Payment Status</a></li>
      <?php 
        session_start();
        if(isset($_SESSION['is_login'])){
          echo'
          <li class="nav-item custom-nav-item"><a href="Student/studentProfile.php" class="nav-link">My Profile</a></li>
          <li class="nav-item custom-nav-item"><a href="logout.php" class="nav-link">Logout</a></li>';
        }else {
          echo '
          <li class="nav-item custom-nav-item"><a href="#" class="nav-link" data-toggle="modal" data-target="#stuLoginModalCenter">Login</a></li>
          <li class="nav-item custom-nav-item"><a href="#" class="nav-link" data-toggle="modal" data-target="#stuRegModalCenter">SignUp</a></li> ';
        }
       ?>
      <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Feedback</a></li>
      <li class="nav-item custom-nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
      </ul>
    </div>
</nav> 
<!-- end navigation --> 