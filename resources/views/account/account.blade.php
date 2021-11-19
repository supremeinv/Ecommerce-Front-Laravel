@extends('layouts.main')
@section('title', 'Account')
@section('page','My Account')
@section('content')

{{-- {{dd(session()->all())}} --}}
<style>
    .invalid-feedback{
        display:block !important;
    }
</style>
<div class="login-area-wrap mt-100">
    <div class="container">
       <div class="row mt-50">
           <div class="col-xl-1 col-lg-1 col-md-1 col-sm-12 col-12 mobilehidden"></div>
          <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 both-small-50">
             <div class="sign-wrap">

                <form id="contact-form-three" enctype="multipart/form-data" action="{{route('store-account-info')}}"method="POST" class="contat-input">
                    @csrf
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-sm-12 col-12 form_filed">
                           <label class="form-check-label form-check-label-first">Name*</label>
                           <input class="input-field" type="text" name="cus_name" value="{{ $customer->cus_name }}" required placeholder="Enter your name">
                           @error('cust_name')
                           <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                           </span>
                           @enderror
                        </div>
                        <div class="col-xl-12 col-lg-12 col-sm-12 col-12 form_filed">
                           <label class="form-check-label">Phone*</label>
                           <input class="input-field" type="tel" name="cus_phone" value="{{ $customer->cus_phone }}" required placeholder="Enter your mobile number">
                           @error('cus_phone')
                           <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                           </span>
                           @enderror
                        </div>
                        <div class="col-xl-12 col-lg-12 col-sm-12 col-12 form_filed">
                           <label class="form-check-label">Email*</label>
                           <input class="input-field" type="email"name="cus_email" value="{{ $customer->cus_email}}" required placeholder="Enter Your Email">
                           @error('cus_email')
                           <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                           </span>
                           @enderror
                        </div>
                        <div class="col-xl-12 col-lg-12 col-sm-12 col-12 form_filed">
                           <label class="form-check-label">Password*</label>
                           <input class="input-field" type="password" name="cus_pwd" value="" required placeholder="Mimimum 6 characters">
                           @error('cus_pwd')
                           <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                           </span>
                           @enderror
                        </div>
                        <div class="col-xl-12 col-lg-12 col-sm-12 col-12 form_filed">
                            <label class="form-check-label">Image*</label>
                            <input class="input-field" type="file"name="file" required placeholder="Choose Images">
                            @error('file')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                         </div>
                        <div class="form-group mb-3">
                           <select  id="country-dd" name="cus_country" class="form-control">
                              <option value="">Select Country</option>
                              @foreach ($countries as $data)
                              <option value="{{$data->co_code}}" {{ trim($data->co_code) == $customer->cus_country  ? 'selected' : ''}}>
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
                            @foreach ($states as $data)
                            <option value="{{$data->state_code}}" {{ trim($data->state_code) == $customer->cus_state  ? 'selected' : ''}}>
                               {{$data->state_name}}
                            </option>
                            @endforeach
                           </select>
                           @error('cus_state')
                           <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                           </span>
                           @enderror
                        </div>
                        <div class="form-group">
                           <select id="city-dd"  name="cus_city" class="form-control">
                            @foreach ($cities as $data)
                            <option value="{{$data->ci_id}}" {{ trim($data->ci_id) == $customer->cus_city  ? 'selected' : ''}}>
                               {{$data->ci_name}}
                            </option>
                            @endforeach
                           </select>
                           @error('cus_city')
                           <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                           </span>
                           @enderror
                        </div>

                        <div class="details-page-reply-btn-wrap form-group" style="margin-top:15px">
                           <button type="submit" class="common-btn shop-details-review-btn">Update</button>
                           <button type="" class="common-btn shop-details-review-btn" style="float:right">Cancel</button>
                        </div>
                        <p class="form-message"></p>
                     </div>
                </form>
             </div>
          </div>
           <div class="col-xl-1 col-lg-1 col-md-1 col-sm-12 col-12 mobilehidden"></div>
          <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 rightside_menu">
             <div class="sidebar-account block">
                <div class="sidebar-bar-title">
                   <h3>My Account</h3>
                </div>
                <div class="block-content">

                   <ul class="rightside_menusidebar">
                      <li class="liclass">
                         <a class="active" href="acc_dashboard.html"><i class="fa fa-angle-double-right icon"></i> Account Dashboard</a>
                      </li>
                      <li class="liclass">
                         <a href="product_paypal.html"><i class="fa fa-angle-double-right icon"></i> My Product PayPal</a>
                      </li>
                      <li class="liclass">
                         <a href="product_cod.html"><i class="fa fa-angle-double-right icon"></i> My Product COD</a>
                      </li>
                      <li class="liclass">
                         <a href="deal_paypal.html"><i class="fa fa-angle-double-right icon"></i> My Deal PayPal</a>
                      </li>
                      <li class="liclass">
                         <a href="deal_cod.html"><i class="fa fa-angle-double-right icon"></i> My Deal COD</a>
                      </li>
                      <li class="liclass">
                         <a href="user_wishlist.html"><i class="fa fa-angle-double-right icon"></i> My wishlist</a>
                      </li>
                      <li class="liclass">
                         <a href="shipping_address.html"><i class="fa fa-angle-double-right icon"></i> My Shipping Address</a>
                      </li>
                   </ul>

                </div>
                <figure class="figure">
                    <img src="{{asset($customer->cus_pic)}}" class="figure-img img-fluid rounded" alt="Profile Picture">
                    <figcaption class="figure-caption text-right">Profile Picture</figcaption>
                </figure>

             </div>
          </div>

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
                           .state_code + '" '+ value.state_code == {{$customer->cus_state}} ? "selected" : "" +'>' + value.state_name + '</option>');
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
