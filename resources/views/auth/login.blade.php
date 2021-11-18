@extends('layouts.main')
@section('title', 'Login')
@section('content')
<div class="login-area-wrap mt-100">
   <div class="container">
      <div class="row">
         <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="login-form-description">
               <div class="shop-details-content-title">
                  <h4>About sign in and sign up</h4>
               </div>
               <div class="shop-details-content-description login-form-content-description">
                  <p>Git, eu! Libero fermentum! Vivamus nibh mus curae, a ullamco nesciunt repudiandae, labore reiciendis similique! Dicta, non praesent dolor culpa pulvinar rerum gravida orci, repellat omnis architecto in, scelerisque nostrud potenti mauris, eros, luctus donec lobortis. Commodo</p>
               </div>
            </div>
         </div>
      </div>
      <div class="row mt-50">
         <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="login-wrap">
               <div class="login-content-title">
                  <h4>Returning login</h4>
               </div>
               <form id="contact-form" action="https://demo.egenslab.com/html/foxture/mail.php" method="POST" class="contat-input">
                  <div class="row">
                     <div class="col-xl-6 col-lg-6 col-sm-6 col-6">
                        <label class="form-check-label form-check-label-first">Your Name*</label>
                        <input type="text" name="name">
                     </div>
                     <div class="col-xl-6 col-lg-6 col-sm-6 col-6">
                        <label class="form-check-label form-check-label-first">Your Email*</label>
                        <input type="email" name="email">
                     </div>
                     <div class="col-xl-12 col-lg-12 col-sm-12 col-12">
                        <label class="shop-check">Save my name, email, and password for the next time login.
                        <input type="checkbox">
                        <span class="checkmark"></span>
                        </label>
                     </div>
                     <div class="details-page-reply-btn-wrap">
                        <button type="submit" class="common-btn shop-details-review-btn">Submit</button>
                     </div>
                     <p class="form-message"></p>
                  </div>
               </form>
            </div>
         </div>
         <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 both-small-50">
            <div class="sign-wrap">
               <div class="login-content-title">
                  <h4>New customer sign up</h4>
               </div>
               <form id="contact-form-two" action="https://demo.egenslab.com/html/foxture/mail.php" method="POST" class="contat-input">
                  <div class="row">
                     <div class="col-xl-12 col-lg-12 col-sm-12 col-12">
                        <label class="form-check-label form-check-label-first">Your Name*</label>
                        <input type="text" name="name">
                     </div>
                     <div class="col-xl-12 col-lg-12 col-sm-12 col-12">
                        <label class="form-check-label">Your Email*</label>
                        <input type="email" name="email">
                     </div>
                     <div class="col-xl-12 col-lg-12 col-sm-12 col-12">
                        <label class="form-check-label">Phone Number:</label>
                        <input type="tel" name="phone">
                     </div>
                     <div class="col-xl-12 col-lg-12 col-sm-12 col-12">
                        <label class="form-check-label">Address Line 1</label>
                        <input type="text" name="address">
                     </div>
                     <div class="col-xl-12 col-lg-12 col-sm-12 col-12">
                        <label class="form-check-label">Address Line 2</label>
                        <input type="text" name="address">
                     </div>
                     <div class="col-xl-12 col-lg-12 col-sm-12 col-12">
                        <label class="form-check-label">Field 6</label>
                        <input type="text" name="feild">
                     </div>
                     <div class="col-xl-12 col-lg-12 col-sm-12 col-12">
                        <label class="form-check-label">Field 7</label>
                        <input type="text" name="feild">
                     </div>
                     <div class="col-xl-12 col-lg-12 col-sm-12 col-12">
                        <label class="shop-check">Are you agree <a href="#">terms</a> and <a href="#">condition</a> create an account
                        <input type="checkbox">
                        <span class="checkmark"></span>
                        </label>
                     </div>
                     <div class="details-page-reply-btn-wrap">
                        <button type="submit" class="common-btn shop-details-review-btn">Create an account</button>
                     </div>
                     <p class="form-message"></p>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
