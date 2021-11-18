@extends('layouts.main')
@section('title', 'Register')
@section('content')
<style>
    .invalid-feedback{
        display:block !important;
    }
</style>
<div class="login-area-wrap mt-100">
   <div class="container">
      <div class="row mt-50">
         <div class="col-xl-3 col-lg-3 col-md-2 col-sm-12 col-12 mobilehidden"></div>
         <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 both-small-50">
            <div class="sign-wrap">
               <div class="login-content-title">
                  <h4>Register</h4>
               </div>
               <form id="contact-form-one" action="{{ route('register')}}" method="POST" class="contat-input">
                  @csrf
                  <div class="row">
                     <div class="col-xl-12 col-lg-12 col-sm-12 col-12 form_filed">
                        <label class="form-check-label form-check-label-first">Name*</label>
                        <input class="input-field" type="text" name="cus_name" value="{{ old('cus_name') }}" required placeholder="Enter your name">
                        @error('cust_name')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                     </div>
                     <div class="col-xl-12 col-lg-12 col-sm-12 col-12 form_filed">
                        <label class="form-check-label">Phone*</label>
                        <input class="input-field" type="tel" name="cus_phone" value="{{ old('cus_phone') }}" required placeholder="Enter your mobile number">
                        @error('cus_phone')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                     </div>
                     <div class="col-xl-12 col-lg-12 col-sm-12 col-12 form_filed">
                        <label class="form-check-label">Email*</label>
                        <input class="input-field" type="email"name="cus_email" value="{{ old('cus_email') }}" required placeholder="Enter Your Email">
                        @error('cus_email')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                     </div>
                     <div class="col-xl-12 col-lg-12 col-sm-12 col-12 form_filed">
                        <label class="form-check-label">Password*</label>
                        <input class="input-field" type="password" name="cus_pwd" value="{{ old('cus_pwd') }}" required placeholder="Mimimum 6 characters">
                        @error('cus_pwd')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                     </div>
                     <div class="col-xl-12 col-lg-12 col-sm-12 col-12 form_filed">
                        <label class="form-check-label">Confirm Password*</label>
                        <input class="input-field" type="password" name="cus_pwd_confirmation" value="{{ old('cus_pwd_confirmation') }}" required placeholder="Mimimum 6 characters">
                        @error('cus_pwd_confirmation')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                     </div>
                     <div class="form-group mb-3">
                        <select  id="country-dd" name="cus_country" class="form-control">
                           <option value="">Select Country</option>
                           @foreach ($countries as $data)
                           <option value="{{$data->co_code}}">
                              {{$data->co_name}}
                           </option>
                           @endforeach
                        </select>
                        @error('cus_country')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                     </div>
                     <div class="form-group mb-3">
                        <select id="state-dd"  name="cus_state"  class="form-control">
                        </select>
                        @error('cus_state')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                     </div>
                     <div class="form-group">
                        <select id="city-dd"  name="cus_city" class="form-control">
                        </select>
                        @error('cus_city')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                     </div>
                     <div class="col-xl-12 col-lg-12 col-sm-12 col-12 termsconditons form_filed">
                        <label class="shop-check">By clicking signup i agree to Laravel Ecommerce <a href="termsandconditons.html">Terms and conditions</a>
                        <input  name="terms"  type="checkbox">
                        <span class="checkmark"></span>
                        </label>
                        @error('terms')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                     </div>
                     <div class="details-page-reply-btn-wrap">
                        <button type="submit" class="common-btn shop-details-review-btn">Register</button>
                     </div>
                     <p class="form-message"></p>
                  </div>
               </form>
            </div>
         </div>
         <div class="col-xl-3 col-lg-3 col-md-2 col-sm-12 col-12 mobilehidden"></div>
      </div>
   </div>
</div>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
   $(document).ready(function () {
       $('#country-dd').on('change', function () {
           var idCountry = this.value;
           $("#state-dd").html('');
           $.ajax({
               url: "{{url('api/fetch-states')}}",
               type: "POST",
               data: {
                  country_code: idCountry,
                  _token: '{{csrf_token()}}'
               },
               dataType: 'json',
               success: function (result) {
                   $('#state-dd').html('<option value="">Select State</option>');
                   $.each(result.states, function (key, value) {
                       $("#state-dd").append('<option  on value="' + value
                           .state_code + '">' + value.state_name + '</option>');
                   });
                   $('#city-dd').html('<option value="">Select City</option>');
               }
           });
       });
       $('#state-dd').on('change', function () {
           var idState = this.value;
           $("#city-dd").html('');
           $.ajax({
               url: "{{url('api/fetch-cities')}}",
               type: "POST",
               data: {
                   state_id: idState,
                   _token: '{{csrf_token()}}'
               },
               dataType: 'json',
               success: function (res) {
                   $('#city-dd').html('<option value="">Select City</option>');
                   $.each(res.cities, function (key, value) {
                       $("#city-dd").append('<option value="' + value
                           .ci_id + '">' + value.ci_name + '</option>');
                   });
               }
           });
       });
   });

</script>
