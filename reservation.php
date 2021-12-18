<?php include ('header.php'); ?>
<!-- Page Header Area Start -->
<section class="page-header">
   <div class="container">
      <div class="row">
         <div class="col-xl-12">
            <h2>Reservation</h2>
            <ul>
               <li><a href="">Home</a> &nbsp;/</li>
               <li>Reservation</li>
            </ul>
         </div>
      </div>
   </div>
</section>
<!-- Page Header Area End -->
<!-- Reservaton Area Start -->
<section class="reservation pt-100 pb-100">
   <div class="container">
      <div class="row">
         <div class="col-md-10 mx-auto text-center">
            <div class="section-title mb-60">
               <p>Book your table now</p>
               <h4>Best dining experience</h4>
               <span></span>
            </div>
            <form action="#" class="reservation-form">
               <div class="row">
                  <div class="col-md-4">
                     <div class="single-booking">
                        <input name="fname" placeholder="Your Name" class="form-control" required="" type="text">
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="single-booking">
                        <input name="email" placeholder="Email Address" class="form-control" required="" type="email">
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="single-booking">
                        <input name="phone" placeholder="Phone Number" class="form-control" required="" type="number">
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="single-booking">
                        <input name="date" placeholder="Date" class="form-control" required="" type="date">
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="single-booking">
                        <input name="time" placeholder="Time" class="form-control" required="" type="time">
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="single-booking">
                        <input name="number" placeholder="Number of Persons" class="form-control" required="" type="number">
                     </div>
                  </div>
                  <div class="col-md-12 text-center">
                     <div class="box_btn">
                        <a href="#">book now</a>
                     </div>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</section>
<?php include('footer.php');?>
