@extends('layouts.main')
@section('title', 'Checkout Page')
@section('content')

<div class="checkout-area mt-100">
   <div class="container">
      <div class="row">
         <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="checkout-bill-title">
               <h4>Billing address</h4>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="checkout-form-wrap">
               <form id="contact-form-two" action="{{route('storeCheckout')}}" method="POST" class="contat-input checkout-form-input">
                  <div class="row">
                     <div class="col-xl-12 col-lg-12 col-sm-12 col-12">
                        <label class="form-check-label form-check-label-first">Full Name*</label>
                        <input type="text" name="name">
                     </div>
                     <div class="col-xl-12 col-lg-12 col-sm-12 col-12">
                        <label class="form-check-label">Company Name (optional)</label>
                        <input type="text" name="name">
                     </div>
                     <div class="col-xl-12 col-lg-12 col-sm-12 col-12">
                        <label class="form-check-label">Country*</label>
                        <input type="text" name="country">
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
                        <label class="form-check-label">Postal Code*</label>
                        <input type="text" name="code">
                     </div>
                     <div class="col-xl-12 col-lg-12 col-sm-12 col-12">
                        <label class="form-check-label">Field 7</label>
                        <input type="text" name="feild">
                     </div>
                     <div class="col-xl-12 col-lg-12 col-sm-12 col-12">
                        <label class="shop-check">Add additional information
                        </label>
                     </div>
                     <p class="form-message"></p>
                  </div>
               </form>
            </div>
         </div>
         <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
            <div class="cart-product-details-wrap checkout-product-details-wrap">
                <form id="checkout-info" method="post" action="{{ route('payment') }}">
               <table class="table">
                  <thead>
                     <tr>
                        <th>Product Name</th>
                        <th>Quantity</th>
                        <th>Product Price</th>
                     </tr>
                  </thead>
                  <tbody>
               @php $total = 0 @endphp
                       @if(session('cart'))
                           @foreach(session('cart') as $id => $details)
                               @php $total += $details['price'] * $details['quantity'] @endphp
                               <tr data-id="{{ $id }}">
                                   <td data-th="Product">
                                       {{ $details['name'] }}
                                   </td>
                                   <td data-th="quantity">{{$details['quantity']}}</td>
                                   <td data-th="Subtotal" >${{ $details['price'] * $details['quantity'] }}</td>

                               </tr>
                           @endforeach
                       @endif
                    <tr>
                        <td>Subtotal </td>
                        <td></td>
                        <td>${{$total}}</td>
                     </tr>
                       <tr>
                        <td>Shipping fee</td>
                        <td></td>
                        <td>${{$shipping}}</td>
                     </tr>
                     <tr>
                        <td>Total</td>
                        <td></td>
                        <td>${{$total + $shipping}}</td>
                     </tr>
                  </tbody>
               </table>

               <div class="payment-option-wrap">
                  <div class="form-check">
                     <input class="form-check-input" value="pay" type="radio" name="paymentOption" id="flexRadioDefault1">
                     <label class="form-check-label" for="flexRadioDefault1">
                     Online Payment
                     </label>
                     <p>Please send a check</p>
                  </div>
                  <div class="form-check">
                     <input class="form-check-input" value="cod" type="radio" name="paymentOption" id="flexRadioDefault2">
                     <label class="form-check-label" for="flexRadioDefault2">
                     Cash on delivery
                     </label>
                     <p>Pay with cash upon delivery.</p>
                  </div>
                  <ul>
                     <li><a href="#">Privacy Policy</a></li>
                     <li>
                        <button type="submit" class="common-btn shop-details-review-btn update-cart-content-btn">Place Order</button>
                     </li>
                  </ul>
               </div>
           </form>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
