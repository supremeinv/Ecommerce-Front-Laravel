@extends('layouts.main')
@section('title', 'Login')
@section('content')
<style>
    .invalid-feedback{
        display:block !important;
    }
</style>
<div class="login-area-wrap mt-100">
    <div class="container">
       <div class="row mt-50">
          <div class="col-xl-3 col-lg-3 col-md-2 col-sm-12 col-12 mobilehidden">
          </div>
          <div class="col-xl-6 col-lg-6 col-md-8 col-sm-12 col-12 loginform_class">
             <div class="login-wrap">
                <div class="login-content-title">
                   <h4>Login</h4>
                   <p>Welcome back! Sign in to your account </p>
                </div>
                <form id="contact-form" method="POST" action="{{route('login')}}" class="contat-input">
                    @csrf
                   <div class="row">
                          <div class="col-xl-12 col-lg-12 col-sm-12 col-12 form_filed">
                             <label class="form-check-label form-check-label-first"><i class="fa fa-envelope icon"></i> <span>Email address*</span></label>
                             <input class="input-field" type="email" name="cus_email" value="{!! old('cus_email') !!}" placeholder="Email address">
                             @error('cus_email')
                             <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                             </span>
                             @enderror
                        </div>
                          <div class="col-xl-12 col-lg-12 col-sm-12 col-12 form_filed">
                             <label class="form-check-label form-check-label-first"><i class="fa fa-key icon"></i> <span>Password*</span></label>
                             <input class="input-field" type="password" name="password" placeholder="Mimimum 6 characters">
                             @error('password')
                             <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                             </span>
                             @enderror
                        </div>
                          <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12 form_filed">
                             <label class="shop-check"><b>Dont have an account yet ? </b><a href="registers.html">Sign Up</a></label>
                          </div>
                          <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 form_filed">
                             <label class="shop-check"><a href="forget_password.html">Lost your password ?</a></label>
                          </div>
                          <div class="details-page-reply-btn-wrap">
                         <button type="submit" class="common-btn shop-details-review-btn">Login</button>
                          </div>
                          <p class="form-message"></p>
                   </div>
                </form>
             </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-8 col-sm-12 col-12 mobilehidden">
          </div>
       </div>
    </div>
 </div>
@endsection
