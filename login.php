<?php include ('header.php'); ?>
<!-- Page Header Area Start -->
<section class="page-header">
   <div class="container">
      <div class="row">
         <div class="col-xl-12">
            <h2>Login</h2>
            <ul>
               <li><a href="">Home</a> &nbsp;/</li>
               <li>Login</li>
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
            <h4 class="menu-title">Login</h4>
            <p>Sign in to your account and start ordering from our delicious menu. </p>
            <p>Don't have any account? <a href="register.php">Register here </a></p>
            <form id="forms" class="" method="POST">
               <input type="text" placeholder="Mobile Number or Email Address">
               <input type="password" placeholder="Password">
               <input type="submit" value="Login">
            </form>
         </div>
      </div>
   </div>
</div>
<?php include('footer.php');?>
