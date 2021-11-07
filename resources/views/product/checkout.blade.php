@extends('layouts.main')
@section('title', 'Shop Page')
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
    <form id="contact-form-two" action="https://demo.egenslab.com/html/foxture/mail.php" method="POST" class="contat-input checkout-form-input">
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
    <table class="table">
    <thead>
    <tr>
    <th>Product Name</th>
    <th>Product Price</th>
    </tr>
    </thead>
    <tbody>
    <tr>
    <td>Subtotal </td>
    <td>$1,300.00</td>
    </tr>
    <tr>
    <td>Shipping fee</td>
    <td>$7.00</td>
    </tr>
    <tr>
    <td>Total</td>
    <td>$20.00</td>
    </tr>
    </tbody>
    </table>
    <div class="payment-option-wrap">
    <div class="form-check">
    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    <label class="form-check-label" for="flexRadioDefault1">
    Bank
    </label>
    <p>Please send a check</p>
    </div>
    <div class="form-check">
    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
    <label class="form-check-label" for="flexRadioDefault2">
    Cash on delivery
    </label>
    <p>Pay with cash upon delivery.</p>
    </div>
    <ul>
    <li><a href="#">Privacy Policy</a></li>
    <li>
    <button type="submit" class="common-btn shop-details-review-btn update-cart-content-btn">Proceed To Payment</button>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

@endsection
