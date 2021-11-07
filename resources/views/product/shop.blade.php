@extends('layouts.main')
@section('title', 'Shop Page')
@section('content')

<div class="shop-area mt-100">
    <div class="container">
    <div class="row">
    <div class="col-xl-3 col-lg-4 col-md-12 col-sm-12 col-12">
    <div class="shope-sidebar-wrap">
    <div class="single-shop-sidebar"> 
    <div class="shop-sidebar-title">
    <h4>Categories</h4>
    </div>
    <div class="shop-sidebar-category-list">
    <ul>
    <li><a href="#">Computer accessories</a></li>
    <li><a href="#">Women dress</a></li>
    <li><a href="#">Coffee & Tables</a></li>
    <li><a href="#">Shoes</a></li>
    <li><a href="#">Electronics</a></li>
    <li><a href="#">T-Shirts</a></li>
    <li><a href="#">Beds</a></li>
    </ul>
    </div>
    </div>
    </div>
    <div class="shope-sidebar-wrap">
    <div class="single-shop-sidebar">
    <div class="shop-sidebar-title">
    <h4>Price</h4>
    </div>
    <div class="price-range">
    <section class="range-slider" id="facet-price-range-slider" data-options='{"output":{"prefix":"$"},"maxSymbol":"+"}'>
    <input name="range-1" value="0" min="0" max="1250" step="1" type="range">
    <input name="range-2" value="1250" min="0" max="1250" step="1" type="range">
    </section>
    </div>
    </div>
    </div>
    <div class="shope-sidebar-wrap">
    <div class="single-shop-sidebar">
    <div class="shop-sidebar-title">
    <h4>Color</h4>
    </div>
    <div class="sidebar-color">
    <ul>
    <li><a style="background: #7A78C0;" href="#"></a></li>
    <li><a style="background: #B9B288 ;" href="#"></a></li>
    <li><a style="background: #303030 ;" href="#"></a></li>
    <li><a style="background: #94C1CE ;" href="#"></a></li>
    <li><a style="background: #E1E1E1 ;" href="#"></a></li>
    <li><a style="background: #96B2D6 ;" href="#"></a></li>
    <li><a style="background: #F5F5F5 ;" href="#"></a></li>
    </ul>
    </div>
    </div>
    </div>
    <div class="shope-sidebar-wrap">
    <div class="single-shop-sidebar">
    <div class="shop-sidebar-title">
    <h4>Brand</h4>
    </div>
    <div class="shop-sidebar-category-list">
    <ul>
    <li><a href="#">Pendent</a></li>
    <li><a href="#">Skye light</a></li>
    <li><a href="#">Watch</a></li>
    <li><a href="#">Shoe</a></li>
    <li><a href="#">Electronics</a></li>
    <li><a href="#">T-shirt </a></li>
    <li><a href="#">Beds</a></li>
    </ul>
    </div>
    </div>
    </div>
    <div class="shope-sidebar-wrap">
    <div class="single-shop-sidebar">
    <div class="shop-sidebar-title">
    <h4>New Arrival</h4>
    </div>
    <div class="shop-sidebar-arrival-wrap">
    <div class="shop-sidebar-arrival-img">
    <img src={{ asset("/images/shop/sidebar-arrival-img-1.png") }}  alt="">
    </div>
    <div class="shop-sidebar-arrival-content">
    <h4><a href="shop-details.html">State Sammi sunachair</a></h4>
    <p>$39.00</p>
    </div>
    </div>
    <div class="shop-sidebar-arrival-wrap">
    <div class="shop-sidebar-arrival-img">
    <img src={{ asset("/images/shop/sidebar-arrival-img-2.png") }}  alt="">
    </div>
    <div class="shop-sidebar-arrival-content">
    <h4><a href="shop-details.html">Adipisci orci Incididunt</a></h4>
    <p>$65.00</p>
    </div>
    </div>
    <div class="shop-sidebar-arrival-wrap">
    <div class="shop-sidebar-arrival-img">
    <img src={{ asset("/images/shop/sidebar-arrival-img-3.png") }}  alt="">
    </div>
    <div class="shop-sidebar-arrival-content">
    <h4><a href="shop-details.html">Voluptatibus sapien</a></h4>
    <p>$59.00</p>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="col-xl-9 col-lg-8 col-md-12 col-sm-12 col-12">
    <div class="shop-two-showing-wrap">
    <div class="row">
    <div class="col-xl-2 col-lg-2 col-md-12 col-sm-12 col-12">
    <div class="grid-list-icon d-xl-block d-lg-none d-none d-md-none">
    <ul>
    <li class="shop-icon-three shop-grid-active-color"><a href="#"><i class='bx bx-grid-horizontal'></i></a></li>
    <li class="shop-icon-two "><a href="#"><i class='bx bx-grid-small'></i></a></li>
    </ul>
    </div>
    </div>
    <div class="col-xl-10 col-lg-12 col-md-12 col-sm-12 col-12 both-small-50">
    <div class="shop-two-showing">
    <ul>
    <li>Showing 1–27 of 300 results</li>
    <li>Short by:
    <select class="shop-category-select">
    <option selected>Featured</option>
    <option value="1">Featured 1</option>
    <option value="2">Featured 2</option>
    <option value="3">Featured 3</option>
    </select>
    </li>
    <li>Short by:
    <select class="shop-category-select" aria-label="Default select example">
    <option selected>Price</option>
    <option value="1">Price 1</option>
    <option value="2">Price 2</option>
    <option value="3">Price 3</option>
    </select>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    <div class="row shop-grid-three">
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
    <div class="home-one-product-box">
    <div class="home-one-product-img">
    <img src={{ asset("/images/shop/shope-two-prodict-img-1.png") }}  alt="">
    <div class="home-one-product-img-cta home-one-product-img-cta-design-two">
    <span>60% Off</span>
    </div>
    <div class="home-one-product-option">
    <ul>
    <li><a href="#"><i class='bx bx-refresh'></i></a></li>
    <li><a href="#"><i class='bx bxs-heart'></i></a></li>
    <li><a href="#"><i class='bx bxs-cart-download'></i></a></li>
    <li><a href="#"><i class='bx bx-show'></i></a></li>
    </ul>
    </div>
    </div>
    <div class="home-one-product-content">
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
    <h4><a href="shop-details.html">Pendent light roof minimal</a></h4>
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
    <li style="background: #E5DDB6;"></li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
    <div class="home-one-product-box">
    <div class="home-one-product-img">
    <img src={{ asset("/images/shop/shope-two-prodict-img-2.png") }}  alt="">
    <div class="home-one-product-img-cta">
    <span>New</span>
    </div>
    <div class="home-one-product-option">
    <ul>
    <li><a href="#"><i class='bx bx-refresh'></i></a></li>
    <li><a href="#"><i class='bx bxs-heart'></i></a></li>
    <li><a href="#"><i class='bx bxs-cart-download'></i></a></li>
    <li><a href="#"><i class='bx bx-show'></i></a></li>
    </ul>
    </div>
    </div>
    <div class="home-one-product-content">
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
    <h4><a href="shop-details.html">Mobile headphone</a></h4>
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
    <li style="background: #E5DDB6;"></li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
    <div class="home-one-product-box">
    <div class="home-one-product-img">
    <img src={{ asset("/images/shop/shope-two-prodict-img-3.png") }}  alt="">
    <div class="home-one-product-img-cta">
    <span>-60% Offer</span>
    </div>
    <div class="home-one-product-option">
    <ul>
    <li><a href="#"><i class='bx bx-refresh'></i></a></li>
    <li><a href="#"><i class='bx bxs-heart'></i></a></li>
    <li><a href="#"><i class='bx bxs-cart-download'></i></a></li>
    <li><a href="#"><i class='bx bx-show'></i></a></li>
    </ul>
    </div>
    </div>
    <div class="home-one-product-content">
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
    <h4><a href="shop-details.html">Apple music setup</a></h4>
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
    </ul>
    </div>
    </div>
    </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
    <div class="home-one-product-box">
    <div class="home-one-product-img">
    <img src={{ asset("/images/shop/shope-two-prodict-img-4.png") }}  alt="">
    <div class="home-one-product-img-cta home-one-product-img-cta-design-two">
    <span>60% Off</span>
    </div>
    <div class="home-one-product-option">
    <ul>
    <li><a href="#"><i class='bx bx-refresh'></i></a></li>
    <li><a href="#"><i class='bx bxs-heart'></i></a></li>
    <li><a href="#"><i class='bx bxs-cart-download'></i></a></li>
    <li><a href="#"><i class='bx bx-show'></i></a></li>
    </ul>
    </div>
    </div>
    <div class="home-one-product-content">
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
    <h4><a href="shop-details.html">Pendent light roof minimal</a></h4>
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
    <li style="background: #ECB399;"></li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
    <div class="home-one-product-box">
    <div class="home-one-product-img">
    <img src={{ asset("/images/shop/shope-two-prodict-img-5.png") }}  alt="">
    <div class="home-one-product-img-cta home-one-product-img-cta-design-two">
    <span>60% Off</span>
    </div>
    <div class="home-one-product-option">
    <ul>
    <li><a href="#"><i class='bx bx-refresh'></i></a></li>
    <li><a href="#"><i class='bx bxs-heart'></i></a></li>
    <li><a href="#"><i class='bx bxs-cart-download'></i></a></li>
    <li><a href="#"><i class='bx bx-show'></i></a></li>
    </ul>
    </div>
    </div>
    <div class="home-one-product-content">
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
    <h4><a href="shop-details.html">Pendent roof light</a></h4>
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
    <li style="background: #ECB399;"></li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
    <div class="home-one-product-box">
    <div class="home-one-product-img">
    <img src={{ asset("/images/shop/shope-two-prodict-img-6.png") }}  alt="">
    <div class="home-one-product-img-cta home-one-product-img-cta-design-two">
    <span>60% Off</span>
    </div>
    <div class="home-one-product-option">
    <ul>
    <li><a href="#"><i class='bx bx-refresh'></i></a></li>
    <li><a href="#"><i class='bx bxs-heart'></i></a></li>
    <li><a href="#"><i class='bx bxs-cart-download'></i></a></li>
    <li><a href="#"><i class='bx bx-show'></i></a></li>
    </ul>
    </div>
    </div>
    <div class="home-one-product-content">
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
    <h4><a href="shop-details.html">Life saver watch</a></h4>
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
    <li style="background: #ECB399;"></li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
    <div class="home-one-product-box">
    <div class="home-one-product-img">
    <img src={{ asset("/images/shop/shope-two-prodict-img-7.png") }}  alt="">
    <div class="home-one-product-img-cta home-one-product-img-cta-design-two">
    <span>60% Off</span>
    </div>
    <div class="home-one-product-option">
    <ul>
    <li><a href="#"><i class='bx bx-refresh'></i></a></li>
    <li><a href="#"><i class='bx bxs-heart'></i></a></li>
    <li><a href="#"><i class='bx bxs-cart-download'></i></a></li>
    <li><a href="#"><i class='bx bx-show'></i></a></li>
    </ul>
    </div>
    </div>
    <div class="home-one-product-content">
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
    <h4><a href="shop-details.html">Camera lens clipart</a></h4>
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
    <li style="background: #ECB399;"></li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
    <div class="home-one-product-box">
    <div class="home-one-product-img">
    <img src={{ asset("/images/shop/shope-two-prodict-img-8.png") }}  alt="">
    <div class="home-one-product-img-cta">
    <span>New</span>
    </div>
    <div class="home-one-product-option">
    <ul>
    <li><a href="#"><i class='bx bx-refresh'></i></a></li>
    <li><a href="#"><i class='bx bxs-heart'></i></a></li>
    <li><a href="#"><i class='bx bxs-cart-download'></i></a></li>
    <li><a href="#"><i class='bx bx-show'></i></a></li>
    </ul>
    </div>
    </div>
    <div class="home-one-product-content">
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
    <h4><a href="shop-details.html">Mobile headphone</a></h4>
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
    <li style="background: #ECB399;"></li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
    <div class="home-one-product-box">
    <div class="home-one-product-img">
    <img src={{ asset("/images/shop/shope-two-prodict-img-9.png") }}  alt="">
    <div class="home-one-product-img-cta">
    <span>-60% Offer</span>
    </div>
    <div class="home-one-product-option">
    <ul>
    <li><a href="#"><i class='bx bx-refresh'></i></a></li>
    <li><a href="#"><i class='bx bxs-heart'></i></a></li>
    <li><a href="#"><i class='bx bxs-cart-download'></i></a></li>
    <li><a href="#"><i class='bx bx-show'></i></a></li>
    </ul>
    </div>
    </div>
    <div class="home-one-product-content">
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
    <h4><a href="shop-details.html">Apple music setup</a></h4>
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
    <li style="background: #ECB399;"></li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="row shop-grid-two shop-grid-none">
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
    <div class="home-one-product-box">
    <div class="home-one-product-img">
    <img src={{ asset("/images/shop/shope-two-prodict-img-1.png") }}  alt="">
    <div class="home-one-product-img-cta home-one-product-img-cta-design-two">
    <span>60% Off</span>
    </div>
    <div class="home-one-product-option">
    <ul>
    <li><a href="#"><i class='bx bx-refresh'></i></a></li>
    <li><a href="#"><i class='bx bxs-heart'></i></a></li>
     <li><a href="#"><i class='bx bxs-cart-download'></i></a></li>
    <li><a href="#"><i class='bx bx-show'></i></a></li>
    </ul>
    </div>
    </div>
    <div class="home-one-product-content">
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
    <h4><a href="shop-details.html">Pendent light roof minimal</a></h4>
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
    <li style="background: #E5DDB6;"></li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
    <div class="home-one-product-box">
    <div class="home-one-product-img">
    <img src={{ asset("/images/shop/shope-two-prodict-img-2.png") }}  alt="">
    <div class="home-one-product-img-cta">
    <span>New</span>
    </div>
    <div class="home-one-product-option">
    <ul>
    <li><a href="#"><i class='bx bx-refresh'></i></a></li>
    <li><a href="#"><i class='bx bxs-heart'></i></a></li>
    <li><a href="#"><i class='bx bxs-cart-download'></i></a></li>
    <li><a href="#"><i class='bx bx-show'></i></a></li>
    </ul>
    </div>
    </div>
    <div class="home-one-product-content">
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
    <h4><a href="shop-details.html">Mobile headphone</a></h4>
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
    <li style="background: #E5DDB6;"></li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
    <div class="home-one-product-box">
    <div class="home-one-product-img">
    <img src={{ asset("/images/shop/shope-two-prodict-img-3.png") }}  alt="">
    <div class="home-one-product-img-cta">
    <span>-60% Offer</span>
    </div>
    <div class="home-one-product-option">
    <ul>
    <li><a href="#"><i class='bx bx-refresh'></i></a></li>
    <li><a href="#"><i class='bx bxs-heart'></i></a></li>
    <li><a href="#"><i class='bx bxs-cart-download'></i></a></li>
    <li><a href="#"><i class='bx bx-show'></i></a></li>
    </ul>
    </div>
    </div>
    <div class="home-one-product-content">
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
    <h4><a href="shop-details.html">Apple music setup</a></h4>
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
    </ul>
    </div>
    </div>
    </div>
    </div>
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
    <div class="home-one-product-box">
    <div class="home-one-product-img">
    <img src={{ asset("/images/shop/shope-two-prodict-img-4.png") }}  alt="">
    <div class="home-one-product-img-cta home-one-product-img-cta-design-two">
    <span>60% Off</span>
    </div>
    <div class="home-one-product-option">
    <ul>
    <li><a href="#"><i class='bx bx-refresh'></i></a></li>
    <li><a href="#"><i class='bx bxs-heart'></i></a></li>
    <li><a href="#"><i class='bx bxs-cart-download'></i></a></li>
    <li><a href="#"><i class='bx bx-show'></i></a></li>
    </ul>
    </div>
    </div>
    <div class="home-one-product-content">
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
    <h4><a href="shop-details.html">Pendent light roof minimal</a></h4>
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
    <li style="background: #ECB399;"></li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
    <div class="home-one-product-box">
    <div class="home-one-product-img">
    <img src={{ asset("/images/shop/shope-two-prodict-img-5.png") }}  alt="">
    <div class="home-one-product-img-cta home-one-product-img-cta-design-two">
    <span>60% Off</span>
    </div>
    <div class="home-one-product-option">
    <ul>
    <li><a href="#"><i class='bx bx-refresh'></i></a></li>
    <li><a href="#"><i class='bx bxs-heart'></i></a></li>
    <li><a href="#"><i class='bx bxs-cart-download'></i></a></li>
    <li><a href="#"><i class='bx bx-show'></i></a></li>
    </ul>
    </div>
    </div>
    <div class="home-one-product-content">
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
    <h4><a href="shop-details.html">Pendent roof light</a></h4>
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
    <li style="background: #ECB399;"></li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
    <div class="home-one-product-box">
    <div class="home-one-product-img">
    <img src={{ asset("/images/shop/shope-two-prodict-img-6.png") }}  alt="">
    <div class="home-one-product-img-cta home-one-product-img-cta-design-two">
    <span>60% Off</span>
    </div>
    <div class="home-one-product-option">
    <ul>
    <li><a href="#"><i class='bx bx-refresh'></i></a></li>
    <li><a href="#"><i class='bx bxs-heart'></i></a></li>
    <li><a href="#"><i class='bx bxs-cart-download'></i></a></li>
    <li><a href="#"><i class='bx bx-show'></i></a></li>
    </ul>
    </div>
    </div>
    <div class="home-one-product-content">
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
    <h4><a href="shop-details.html">Life saver watch</a></h4>
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
    <li style="background: #ECB399;"></li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
    <div class="home-one-product-box">
    <div class="home-one-product-img">
    <img src={{ asset("/images/shop/shope-two-prodict-img-7.png") }}  alt="">
    <div class="home-one-product-img-cta home-one-product-img-cta-design-two">
    <span>60% Off</span>
    </div>
    <div class="home-one-product-option">
    <ul>
    <li><a href="#"><i class='bx bx-refresh'></i></a></li>
    <li><a href="#"><i class='bx bxs-heart'></i></a></li>
    <li><a href="#"><i class='bx bxs-cart-download'></i></a></li>
    <li><a href="#"><i class='bx bx-show'></i></a></li>
    </ul>
    </div>
    </div>
    <div class="home-one-product-content">
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
    <h4><a href="shop-details.html">Camera lens clipart</a></h4>
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
    <li style="background: #ECB399;"></li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
    <div class="home-one-product-box">
    <div class="home-one-product-img">
    <img src={{ asset("/images/shop/shope-two-prodict-img-8.png") }}  alt="">
    <div class="home-one-product-img-cta">
    <span>New</span>
    </div>
    <div class="home-one-product-option">
    <ul>
    <li><a href="#"><i class='bx bx-refresh'></i></a></li>
    <li><a href="#"><i class='bx bxs-heart'></i></a></li>
    <li><a href="#"><i class='bx bxs-cart-download'></i></a></li>
    <li><a href="#"><i class='bx bx-show'></i></a></li>
    </ul>
    </div>
    </div>
    <div class="home-one-product-content">
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
    <h4><a href="shop-details.html">Mobile headphone</a></h4>
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
    <li style="background: #ECB399;"></li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
    <div class="home-one-product-box">
    <div class="home-one-product-img">
    <img src={{ asset("/images/shop/shope-two-prodict-img-9.png") }}  alt="">
    <div class="home-one-product-img-cta">
    <span>-60% Offer</span>
    </div>
    <div class="home-one-product-option">
    <ul>
    <li><a href="#"><i class='bx bx-refresh'></i></a></li>
    <li><a href="#"><i class='bx bxs-heart'></i></a></li>
    <li><a href="#"><i class='bx bxs-cart-download'></i></a></li>
    <li><a href="#"><i class='bx bx-show'></i></a></li>
    </ul>
    </div>
    </div>
    <div class="home-one-product-content">
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
    <h4><a href="shop-details.html">Apple music setup</a></h4>
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
    <li style="background: #ECB399;"></li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="row">
    <div class="pagination-wrap">
    <ul>
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><span>.</span><span>.</span><span>.</span><span>.</span></li>
    <li><a href="#">9</a></li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
@endsection
