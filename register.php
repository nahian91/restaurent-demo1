<?php include ('header.php'); ?>
<!-- Page Header Area Start -->
<section class="page-header">
   <div class="container">
      <div class="row">
         <div class="col-xl-12">
            <h2>Register</h2>
            <ul>
               <li><a href="">Home</a> &nbsp;/</li>
               <li>Register</li>
            </ul>
         </div>
      </div>
   </div>
</section>
<!-- Page Header Area End -->
<div class="container pt-100 pb-100">
   <div class="row">
      <div class="col-md-6 mx-auto">
         <div class="login-card">
            <h4 class="menu-title">Register</h4>
            <p>Create an account to start ordering from our delicious menu. </p>
            <p>Already have an account? <a href="login.php">Login here </a></p>
            <form id="forms" class="" method="POST">
               <input type="text" placeholder="First Name">
               <input type="text" placeholder="Last Name">
               <input type="text" placeholder="Mobile Number">
               <input type="email" placeholder="Email Address">
               <input type="password" placeholder="Password">
               <input type="password" placeholder="Confirm Password">
               <p>By creating an account, you agree to receive sms from vendor. </p>
               <input type="submit" value="Create Account">
            </form>
         </div>
      </div>
   </div>
</div>
<?php include('footer.php');?>
