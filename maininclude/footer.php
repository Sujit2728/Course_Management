<!-- start footer -->
<footer class="container-fluid bg-dark text-center p-2">
  <small class="text-white">Copyrigth &copy; 2021 || Designed By Course_Management ||<a href="#login" data-toggle="modal" data-target="#adminLoginModalCenter">Admin Login</a>

  </small>
</footer> 
<!-- end footer --> 

<!-- Start student Registration modal-->
<!--Modal-->
<div class="modal fade" id="stuRegModalCenter" tabindex="-1" role="dialog" aria-labelledby="stuRegModalCenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="stuRegModalCenterLabel">Student Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!--Start of Registration Form-->
        <?php include('studentRegistrationForm.php'); ?>
        <!--en of Registration Form-->
      </div>
      <div class="modal-footer">
        <span id="successMsg"></span>
        <button type="button" class="btn btn-primary" onclick="addStu()" id="signup">Sing Up</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- end student Registration modal-->

<!-- Start student login modal-->
<!--Modal-->
<div class="modal fade" id="stuLoginModalCenter" tabindex="-1" role="dialog" aria-labelledby="stuLoginModalCenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="stuLoginModalCenterLabel">Student Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!--Start of Student Login Form-->
        <form id="stuLoginForm"> 
          <div class="form-group">
            <i class="fas fa-envelope"></i><label for="stuLogemail" class="pl-2 font-weigth-bold">Email</label><input type="email" class="form-control" placeholder="Email" name="stuLogemail" id="stuLogemail">
          </div>
          <div class="form-group">
            <i class="fas fa-key"></i><label for="stuLogpass" class="pl-2 font-weigth-bold">Password</label><input type="password" class="form-control" placeholder="Password" name="stuLogpass" id="stuLogpass">
          </div>
        </form>
        <!--End of Student Login Form-->
      </div>
      <div class="modal-footer">
        <small id="statusLogMsg"></small>
        <button type="button" class="btn btn-primary" id="stuLoginBtn" onclick="checkStuLogin()">Login</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>
<!-- end student login modal-->

<!-- Start Admin login modal-->
<!--Modal-->
<div class="modal fade" id="adminLoginModalCenter" tabindex="-1" role="dialog" aria-labelledby="adminLoginModalCenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="adminLoginModalCenterLabel">Admin Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!--Start of Admin Login Form-->
        <form id="adminLoginForm"> 
          <div class="form-group">
            <i class="fas fa-envelope"></i><label for="adminLogemail" class="pl-2 font-weigth-bold">Email</label><input type="email" class="form-control" placeholder="Email" name="adminLogemail" id="adminLogemail">
          </div>
          <div class="form-group">
            <i class="fas fa-key"></i><label for="adminLogpass" class="pl-2 font-weigth-bold">Password</label><input type="password" class="form-control" placeholder="Password" name="adminLogpass" id="adminLogpass">
          </div>
        </form>
        <!--End of Admin Login Form-->
      </div>
      <div class="modal-footer">
      <small id="statusAdminLogMsg"></small>
        <button type="button" class="btn btn-primary"  id="adminLoginBtn" onclick="checkAdminLogin()">Login</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>
<!-- end Admin login modal-->

 <script src="js/jQuery.min.js"></script>
 <script src="js/popper.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
 <script src="js/all.min.js"></script> 
 <script type="text/javascript" src="js/ajaxrequest.js"></script>
 <script type="text/javascript" src="js/adminajaxrequest.js"></script>

</body>
</html>