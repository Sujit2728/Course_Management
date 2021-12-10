<!-- start header --> 
<?php
include('./maininclude/header.php');
include('./dbconnection.php');
?>
<!-- end header --> 
<!--Start video background -->
<div class="container-fluid remove-vid-marg">
    <div class="vid-parent">
        <video playsinline autoplay muted loop>
            <source src="video/onlinelearning.mp4">
        </video>
        <div class="vid-overlay"></div>
    </div>
    <div class="vid-content">
      <h1 class="my-content">Welcome to Course</h1>
      <small class="my-content">Learn and Implement</small><br>

      <?php
      if(!isset($_SESSION['is_login'])){
        echo'<a href="#" class="btn btn-danger mt-3" data-toggle="modal" data-target="#stuLoginModalCenter">Get Started</a>';
      } else{
        echo'<a href="Student/studentProfile.php" class="btn btn-primary mt-3">My Profile</a>';
      }
      ?>
    </div>
</div>
<!-- End video background --> 

<!--Start banner -->
<div class="container-fluid bg-danger txt-banner">
  <div class="row bottom-banner">
    <div class="col-sm">
      <h5><i class="fas fa-book-open mr-3"></i>100+ Online Course</h5>
    </div>
    <div class="col-sm">
      <h5><i class="fas fa-users mr-3"></i>Expert Instructors</h5>
    </div>  
    <div class="col-sm">
      <h5><i class="fas fa-keyboard mr-3"></i>Lifetime Access</h5>
    </div>    
    <div class="col-sm">
      <h5><i class="fas fa-rupee-sign mr-3"></i>Money Back</h5>
    </div>      
  </div>
</div>
<!--End banner -->  

<!-- Start most Popular -->
<div class="container mt-5">
  <h1 class="text-center">Popular Course</h1>
  <!-- Start Most Popular course 1st card deck--> 
  <div class="card-deck mt-4">
  <?php
    $sql = "SELECT * FROM course LIMIT 3" ;
    $result = $conn->query($sql);
    if($result->num_rows > 0){
      while($row =$result->fetch_assoc()){
        $course_id=$row['course_id'];
        echo '
        <a href="coursedetails.php?course_id='.$course_id.'" class="btn" style="text-align: left; padding:0px; ">
         <div class="card">
          <img src="' .str_replace('..','.', $row['course_img']). '" class="card-img-top" alt="Python"/>
           <div class="card-body">
            <h5 class="card-title">' .$row['course_name']. '</h5>
            <p class="card-text">' .$row['course_desc'] . '</p>
           </div>
          <div class="card-footer">
           <p class="card-text d-inline">Price:<small><del>&#8377 '.$row['course_original_price'].'</del>
           </small><span class="font-weight-bolder">&#8377 '.$row['course_price'].'</span></p>
           <a class="btn btn-primary text-white font-weigth-bolder float-right" href="coursedetails.php?course_id='.$course_id.'">Enroll</a>
           </div>      
         </div>
         </a>';
      }
    }
  ?>
  </div>
  <!-- end of most popular course 1st card deck -->   

  <!-- start of most popular course 2st card deck -->   
  <div class="card-deck mt-4">
  <?php
    $sql = "SELECT * FROM course LIMIT 3, 3" ;
    $result = $conn->query($sql);
    if($result->num_rows > 0){
      while($row =$result->fetch_assoc()){
        $course_id=$row['course_id'];
        echo '
        <a href="coursedetails.php?course_id='.$course_id.'" class="btn" style="text-align: left; padding:0px; ">
         <div class="card">
          <img src="' .str_replace('..','.', $row['course_img']). '" class="card-img-top" alt="Python"/>
           <div class="card-body">
            <h5 class="card-title">' .$row['course_name']. '</h5>
            <p class="card-text">' .$row['course_desc'] . '</p>
           </div>
          <div class="card-footer">
           <p class="card-text d-inline">Price:<small><del>&#8377 '.$row['course_original_price'].'</del>
           </small><span class="font-weight-bolder">&#8377 '.$row['course_price'].'</span></p>
           <a class="btn btn-primary text-white font-weigth-bolder float-right" href="coursedetails.php?course_id='.$course_id.'">Enroll</a>
           </div>      
         </div>
         </a>';
      }
    }
  ?>
  </div>
  <!-- end of most popular course 2st card deck -->
  <div class="text-center m-2">
    <a class="btn btn-danger btn-sm" href="course.php">View All Course</a>
  </div>
</div>
<!-- end most popular --> 

<!-- start contact us-->
<?php
include('./contact.php');
?>
<!-- end contact us-->

<!-- start social follow -->
<div class="container-fluid bg-danger">
  <div class="row text-white text-center p-1">
  <div class="col-sm">
    <a class="text-white social-hover" href="#"><i class="fab fa-facebook-f"></i>Facebook</a>
  </div>
  <div class="col-sm">
    <a class="text-white social-hover" href="#"><i class="fab fa-twitter"></i>Twitter</a>
  </div>
  <div class="col-sm">
    <a class="text-white social-hover" href="#"><i class="fab fa-whatsapp"></i>WhatsApp</a>
  </div>
  <div class="col-sm">
    <a class="text-white social-hover" href="#"><i class="fab fa-instagram"></i>Instagram</a>
  </div>
  </div>
</div>
<!-- end social follow -->

<!-- start about seciton -->
<div class="container-fluid p-4" style="background-color: #E9ECEF">
  <div class="container" style="background-color:#E9ECEF">
    <div class="row text-center">
      <div class="col-sm"> 
        <h5>About Us</h5>
        <p>Course provides universal access to the world's best education,
           partering with top universities and organizations to offer courses online.
        </p>
      </div>
    <div class="col-sm">
      <h5>Category</h5>
      <a class="text-dark" href="#">Web Development</a><br/>
      <a class="text-dark" href="#">Web Designing</a><br/>
      <a class="text-dark" href="#">Android App Dev</a><br/>
      <a class="text-dark" href="#">iOS Development</a><br/>
      <a class="text-dark" href="#">Data Analysis</a><br/>
    </div>
    <div>
      <h5>Contact Us</h5>
      <p>Course Pvt Ltd<br>Near Police Camp II<br>Balewadi,Pune<br>Ph. 0000000000</p>
    </div>
    </div>
  </div>
</div> 
<!-- end about seciton --> 

<!-- start footer --> 
<?php
include('./maininclude/footer.php');
?>
<!-- end footer --> 