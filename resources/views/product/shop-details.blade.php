@extends('layouts.main')
@section('title', 'Product Details')
@section('page', $product->pro_title)
@section('content')
<div class="shop-details-product mt-100">
   <div class="container">
      <div class="row">
         <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="shop-img-deails-wrap">
               <div class="tab-content" id="pills-tabContent">
                @if(!empty(getProductImages($product)))
                @foreach(getProductImages($product) as $key => $image)
                <div class="tab-pane fade show {{$key==0 ? "active" : ""}}" id="pills-{{$key}}" role="tabpanel" aria-labelledby="pills-{{$key}}-tab">
                     <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                           <div class="shop-img-deails">
                              <img style="width:100%" src={{ env('ADMIN_ASSET_URL').'product/'. $image }} alt={{$product->pro_title}}>
                              <div class="img-expand popup-gallery">
                                 <a href={{ env('ADMIN_ASSET_URL').'product/'. $image }} title="{{$product->pro_title}}"><i class="fas fa-expand"></i></a>
                              </div>
                              @if($product->pro_discount_percentage)
                              <div class="home-one-product-img-cta shop-details-img-cta">
                                 <span>{{$product->pro_discount_percentage}}% Off</span>
                              </div>
                              @endif
                           </div>
                        </div>
                     </div>
                  </div>
                  @endforeach
                  @endif
               </div>
               <ul class="nav nav-pills" id="pills-tab" role="tablist">
                @if(!empty(getProductImages($product)))
                @foreach(getProductImages($product) as $key => $image)
                  <li class="nav-item" role="presentation" style="border: 3px solid #0000001c;">
                     <button class="nav-link {{$key==0 ? "active" : ""}}" id="pills-{{$key}}-tab" data-bs-toggle="pill" data-bs-target="#pills-{{$key}}" type="button" role="tab" aria-controls="pills-{{$key}}" aria-selected="true"><img width="92" height="66" src={{ env('ADMIN_ASSET_URL').'product/'.$image }} alt=""></button>
                  </li>
                @endforeach
                @endif
               </ul>
            </div>
         </div>
         <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 both-small-50 ">
            <div class="shop-details-content-wrap">
               <div class="home-one-product-content shop-details-reoduct-content">
                  <h3>{{$product->pro_title}}</h3>
                  <div class="product-review">
                     <ul>
                        @for ($i=0;$i<$product->reviews;$i++)
                        <li><i class='bx bxs-star'></i></li>
                    @endfor
                    @for ($j=0;$j<5-$product->reviews;$j++)
                        <li><i class='bx bx-star'></i></li>
                    @endfor
                    <li><span>( {{$product->reviews}} reviews )</span></li>
                     </ul>
                  </div>
                  <div class="home-one-product-price-list">
                     <ul>
                        <li>${{number_format((float)$product->pro_disprice, 2, '.', '')}}</li>
                        <li><del>${{number_format((float)$product->pro_price, 2, '.', '')}}</del></li>
                     </ul>
                  </div>
                  <div class="home-one-product-color-list">
                     <ul>
                        @foreach(explode(',',$product->colors) as $color)
                            <li style="background:{{$color}};border:#00000029 1px solid"></li>
                        @endforeach
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
                     <a class="cart-btn" href="{{url("add-to-cart/".$product->pro_id)}}">Add To Cart</a>
                  </div>
                  <div class="cart-heart">
                     <a href="#"><i class='bx bx-heart'></i></a>
                  </div>
               </div>
               <div class="add-cart-content">
                  <p>{{$product->pro_desc}}</p>
               </div>
               <div class="shop-details-brand">
                  <ul>
                     @if($product->brand_name)
                     <li>Brand: <span>{{$product->brand_name}}</span></li>
                     @endif
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
