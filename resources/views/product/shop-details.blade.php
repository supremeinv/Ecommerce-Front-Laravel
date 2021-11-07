@extends('layouts.main')
@section('title', 'Shop Page')
@section('content')

<div class="shop-details-product mt-100">
    <div class="container">
    <div class="row">
    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
    <div class="shop-img-deails-wrap">
    <div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-one" role="tabpanel" aria-labelledby="pills-one-tab">
    <div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="shop-img-deails">
    <img style="width:100%" src="assets/images/shop/shop-img-details-1.png" alt="">
    <div class="img-expand popup-gallery">
    <a href="assets/images/shop/shop-img-details-1.png" title="Cheir"><i class="fas fa-expand"></i></a>
    </div>
    <div class="home-one-product-img-cta shop-details-img-cta">
    <span>60% Off</span>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="tab-pane fade" id="pills-two" role="tabpanel" aria-labelledby="pills-two-tab">
    <div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="shop-img-deails">
    <img style="width:100%" src="assets/images/shop/shop-img-details-2.png" alt="">
    <div class="img-expand popup-gallery">
    <a href="assets/images/shop/shop-img-details-2.png" title="Cheir"><i class="fas fa-expand"></i></a>
    </div>
    <div class="home-one-product-img-cta shop-details-img-cta">
    <span>60% Off</span>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="tab-pane fade" id="pills-three" role="tabpanel" aria-labelledby="pills-three-tab">
    <div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="shop-img-deails">
    <img style="width:100%" src="assets/images/shop/shop-img-details-3.png" alt="">
    <div class="img-expand popup-gallery">
    <a href="assets/images/shop/shop-img-details-3.png" title="Cheir"><i class="fas fa-expand"></i></a>
    </div>
    <div class="home-one-product-img-cta shop-details-img-cta">
    <span>60% Off</span>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="tab-pane fade" id="pills-four" role="tabpanel" aria-labelledby="pills-four-tab">
    <div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="shop-img-deails">
    <img style="width:100%" src="assets/images/shop/shop-img-details-4.png" alt="">
    <div class="img-expand popup-gallery">
    <a href="assets/images/shop/shop-img-details-4.png" title="Cheir"><i class="fas fa-expand"></i></a>
    </div>
    <div class="home-one-product-img-cta shop-details-img-cta">
    <span>60% Off</span>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <ul class="nav nav-pills" id="pills-tab" role="tablist">
    <li class="nav-item" role="presentation">
    <button class="nav-link active" id="pills-one-tab" data-bs-toggle="pill" data-bs-target="#pills-one" type="button" role="tab" aria-controls="pills-one" aria-selected="true"><img src="assets/images/shop/shop-img-details-list-1.png" alt=""></button>
    </li>
    <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-two-tab" data-bs-toggle="pill" data-bs-target="#pills-two" type="button" role="tab" aria-controls="pills-two" aria-selected="false"><img src="assets/images/shop/shop-img-details-list-2.png" alt=""></button>
    </li>
    <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-three-tab" data-bs-toggle="pill" data-bs-target="#pills-three" type="button" role="tab" aria-controls="pills-three" aria-selected="false"><img src="assets/images/shop/shop-img-details-list-3.png" alt=""></button>
    </li>
    <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-four-tab" data-bs-toggle="pill" data-bs-target="#pills-four" type="button" role="tab" aria-controls="pills-four" aria-selected="false"><img src="assets/images/shop/shop-img-details-list-4.png" alt=""></button>
    </li>
    </ul>
    </div>
    </div>
    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 both-small-50 ">
    <div class="shop-details-content-wrap">
    <div class="home-one-product-content shop-details-reoduct-content">
    <h3>White chair tool making easer</h3>
    <div class="product-review">
    <ul>
    <li><i class='bx bxs-star'></i></li>
    <li><i class='bx bxs-star'></i></li>
    <li><i class='bx bxs-star'></i></li>
    <li><i class='bx bxs-star'></i></li>
    <li><i class='bx bxs-star'></i></li>
    <li><span>( 32 reviews )</span></li>
    </ul>
    </div>
    <div class="home-one-product-price-list">
    <ul>
    <li>$55.00</li>
    <li><del>$120.00</del></li>
    </ul>
    </div>
    <div class="home-one-product-color-list">
    <ul>
    <li style="background: #0B080E;"></li>
    <li style="background: #C2C2C2;"></li>
    <li style="background: #69D1E6;"></li>
    </ul>
    </div>
    </div>
    <div class="shop-details-add-cart-wrap">
    <div class="quantity buttons_added">
    <input type="button" value="-" class="minus">
    <input type="number" step="1" min="1" max="100" name="quantity" value="1" title="Qty" class="input-text qty text">
    <input type="button" value="+" class="plus">
    </div>
    <div class="cart-button-wrap">
    <a class="cart-btn" href="#">Add To Cart</a>
    </div>
    <div class="cart-heart">
    <a href="#"><i class='bx bx-heart'></i></a>
    </div>
    </div>
    <div class="add-cart-content">
    <p>Per ridiculus Penatibus, ullamcorper ipsam erat vitae nobis consequuntur voluptas nascetur, deserunt? Illum ultricies ligula, fermentum. Sagittis Habitasse, do elit odit eos! Laudantium integer</p>
    </div>
    <div class="shop-details-brand">
    <ul>
    <li>Brand: <span>RashPlastic</span></li>
    <li>Availability: <span>In Stock</span></li>
    </ul>
    </div>
    <div class="shop-details-share">
    <ul>
    <li><span>Share:</span></li>
    <li><a href="#"><i class='bx bxl-facebook'></i></a></li>
    <li><a href="#"><i class='bx bxl-twitter'></i></a></li>
    <li><a href="#"><i class='bx bxl-pinterest-alt'></i></a></li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    @endsection
