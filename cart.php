

<?php include ('header.php'); ?>
<!-- Page Header Area Start -->
<section class="page-header">
   <div class="container">
      <div class="row">
         <div class="col-xl-12">
            <h2>Cart</h2>
            <ul>
               <li><a href="">Home</a> &nbsp;/</li>
               <li>Cart</li>
            </ul>
         </div>
      </div>
   </div>
</section>
<!-- Page Header Area End -->
<!-- Menu Area Start -->
<section class="menu-area pt-100 pb-100">
   <div class="container">
      <div class="row">
         <div class="col-md-7">
            <h4 class="menu-title">Cart</h4>
            <div class="menu-right cart">
               <table class="order-list">
                  <tr>
                     <td>Popadom</td>
                     <td><input type="number"></td>
                     <td>$34</td>
                     <td><i class="fas fa-times"></i></td>
                  </tr>
                  <tr>
                     <td>Shamee Kebab</td>
                     <td><input type="number"></td>
                     <td>$35</td>
                     <td><i class="fas fa-times"></i></td>
                  </tr>
                  <tr>
                     <td>Onion Bhajee </td>
                     <td><input type="number"></td>
                     <td>$12.99</td>
                     <td><i class="fas fa-times"></i></td>
                  </tr>
                  <tr>
                     <td>Meat/Vegetable Samosa </td>
                     <td><input type="number"></td>
                     <td>$1.99</td>
                     <td><i class="fas fa-times"></i></td>
                  </tr>
                  <tr class="cart-total">
                     <td>&nbsp;</td>
                     <td>Total</td>
                     <td>$150.99</td>
                     <td>&nbsp;</td>
                  </tr>
               </table>
            </div>
         </div>
         <div class="col-md-5">
            <div class="order">
               <h4 class="menu-title">Order Details</h4>
               <div id="order_review" class="woocommerce-checkout-review-order">
                  <table class="table">
                     <thead>
                        <tr>
                           <th>Product</th>
                           <th>Subtotal</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr >
                           <td>Beanie with Logo&nbsp;<strong>×&nbsp;4</strong>	</td>
                           <td>
                              <span><bdi>72.00<span>৳&nbsp;</span></bdi></span>	</td>
                        </tr>
                        <tr>
                           <td>Album&nbsp;<strong?>×&nbsp;1</strong></td>
                           <td>
                              <span><bdi>15.00<span>৳&nbsp;</span></bdi></span>
							</td>
                        </tr>
                     </tbody>
                     <tfoot>
                        <tr>
                           <th>Subtotal</th>
                           <td><span><bdi>87.00<span>৳&nbsp;</span></bdi></span></td>
                        </tr>
                        <tr class="order-total">
                           <th>Total</th>
                           <td><strong><span><bdi>87.00<span>৳&nbsp;</span></bdi></span></strong> </td>
                        </tr>
                     </tfoot>
                  </table>
                  <div>
                     <ul>
                        <li>
                           <input id="payment_method_cheque" type="radio" class="input-radio" name="payment_method" value="cheque" data-order_button_text="">
                           <label for="payment_method_cheque">
                           Check payments 	</label>
                        </li>
                        <li>
                           <input id="payment_method_cod" type="radio" class="input-radio" name="payment_method" value="cod" checked="checked" data-order_button_text="">
                           <label for="payment_method_cod">
                           Cash on delivery 	</label>
                           <div class="payment_box payment_method_cod" style="display:none;">
                              <p>Pay with cash upon delivery.</p>
                           </div>
                        </li>
                        <li>
                           <input id="payment_method_bkash" type="radio" class="input-radio" name="payment_method" value="bkash" data-order_button_text="">
                           <label for="payment_method_bkash">
                           bKash Payment 	</label>
                           <div class="payment_box payment_method_bkash" style="display:none;">
                              <p>Pay via bKash</p>
                           </div>
                        </li>
                     </ul>
                     <div class="form-row place-order">
                        <button type="submit" class="cart-btn" value="Place order">Place order</button>	
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Menu Area End -->
<?php include('footer.php');?>

