@if(!@empty($products))
<div class="home-one-best-product-area mt-100">
    <div class="container">
       <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
             <div class=" home-one-best-product-area-top">
                <div class="row align-items-center">
                   <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                      <div class="section-title home-one-best-product-title">
                         <h3>Best Products</h3>
                      </div>
                   </div>
                   <div class="col-xl-6 col-lg-6 col-md-10 col-sm-9 col-9">
                      <div class="home-one-best-product-list-wrap text-center">
                         <ul class="nav nav-pills" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                               <button class="nav-link active" id="pills-one-tab" data-bs-toggle="pill" data-bs-target="#pills-one" type="button" role="tab" aria-controls="pills-one" aria-selected="true">Best Sellers</button>
                            </li>
                            <li class="nav-item" role="presentation">
                               <button class="nav-link" id="pills-two-tab" data-bs-toggle="pill" data-bs-target="#pills-two" type="button" role="tab" aria-controls="pills-two" aria-selected="false">Featured</button>
                            </li>
                            <li class="nav-item" role="presentation">
                               <button class="nav-link" id="pills-three-tab" data-bs-toggle="pill" data-bs-target="#pills-three" type="button" role="tab" aria-controls="pills-three" aria-selected="false">Top Products</button>
                            </li>
                         </ul>
                      </div>
                   </div>
                   <div class="col-xl-3 col-lg-3 col-md-2 col-sm-3 col-3">
                      <div class="home-one-best-product-see-all ">
                         <a href="{{url("shop")}}">See All <i class="fas fa-chevron-right"></i></a>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <div class="row mt-50">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
             <div class="home-one-best-product-tab-body-wrap">
                <div class="tab-content" id="pills-tabContent">
                   <div class="tab-pane fade show active" id="pills-one" role="tabpanel" aria-labelledby="pills-one-tab">
                      <div class="row">
                         @foreach ($products as $key => $product)
                         <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                            <a href="{{url("product/".$product->pro_id)}}" style="text-decoration: none">
                            <div class="home-one-product-box">
                               <div class="home-one-product-img">
                                  <img src={{ env('ADMIN_ASSET_URL').'product/'. getProductSingleImage($product) }} alt="">
                                  @if($product->pro_discount_percentage>0)
                                  <div class="home-one-product-img-cta home-one-product-img-cta-design-two">
                                     <span>{{$product->pro_discount_percentage}}% Off</span>
                                  </div>
                                  @endif
                                  <div class="home-one-product-option">
                                     <ul>
                                        <li><a href="#"><i class='bx bx-refresh'></i></a></li>
                                        <li><a href="#"><i class='bx bxs-heart'></i></a></li>
                                        <li><a href="#"><i class='bx bxs-cart-download'></i></a></li>
                                        <li><a href="{{url("product/".$product->pro_id)}}"><i class='bx bx-show'></i></a></li>
                                     </ul>
                                  </div>
                               </div>
                               <div class="home-one-product-content">
                                  <div class="product-review">
                                    <ul>
                                        @for ($i=0;$i<$product->reviews;$i++)
                                            <li><i class='bx bxs-star'></i></li>
                                        @endfor
                                        @for ($j=0;$j<5-$product->reviews;$j++)
                                            <li><i class='bx bx-star'></i></li>
                                        @endfor
                                        <li><span>( {{$product->ratings}} reviews )</span></li>
                                     </ul>
                                  </div>
                                  <h4><a href="{{url("product/".$product->pro_id)}}">{{$product->pro_title}}</a></h4>
                                  <div class="home-one-product-price-list">
                                     <ul>
                                        <li>${{number_format((float)$product->pro_disprice, 2, '.', '')}}</li>
                                        <li><del>${{number_format((float)$product->pro_price, 2, '.', '')}}</del></li>
                                     </ul>
                                  </div>
                                  <div class="home-one-product-color-list">
                                    @if($product->colors!='')
                                    <ul>
                                        @foreach(explode(',',$product->colors) as $color)
                                            <li style="background:{{$color}};border:#00000029 1px solid"></li>
                                        @endforeach
                                     </ul>
                                    @endif
                                  </div>
                               </div>
                            </div>
                            </a>
                         </div>
                         @if($key==7)
                            @break
                         @endif
                         @endforeach
                      </div>
                      <div class="row">
                         <div class="home-one-best-btn-wrap text-center">
                            <a class="common-btn home-two-best-btn shop-details-review-btn" href="{{url("shop")}}" tabindex="0">Load More</a>
                         </div>
                      </div>
                   </div>
                   <div class="tab-pane fade" id="pills-two" role="tabpanel" aria-labelledby="pills-two-tab">
                    <div class="row">
                        @foreach ($products as $key => $product)
                        @if($key<=7)
                            @continue
                        @endif
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                           <a href="{{url("product/".$product->pro_id)}}" style="text-decoration: none">
                           <div class="home-one-product-box">
                              <div class="home-one-product-img">
                                 <img src={{ env('ADMIN_ASSET_URL').'product/'. getProductSingleImage($product) }} alt="">
                                 @if($product->pro_discount_percentage>0)
                                 <div class="home-one-product-img-cta home-one-product-img-cta-design-two">
                                    <span>{{$product->pro_discount_percentage}}% Off</span>
                                 </div>
                                 @endif
                                 <div class="home-one-product-option">
                                    <ul>
                                       <li><a href="#"><i class='bx bx-refresh'></i></a></li>
                                       <li><a href="#"><i class='bx bxs-heart'></i></a></li>
                                       <li><a href="#"><i class='bx bxs-cart-download'></i></a></li>
                                       <li><a href="{{url("product/".$product->pro_id)}}"><i class='bx bx-show'></i></a></li>
                                    </ul>
                                 </div>
                              </div>
                              <div class="home-one-product-content">
                                 <div class="product-review">
                                   <ul>
                                       @for ($i=0;$i<$product->reviews;$i++)
                                           <li><i class='bx bxs-star'></i></li>
                                       @endfor
                                       @for ($j=0;$j<5-$product->reviews;$j++)
                                           <li><i class='bx bx-star'></i></li>
                                       @endfor
                                       <li><span>( {{$product->ratings}} reviews )</span></li>
                                    </ul>
                                 </div>
                                 <h4><a href="{{url("product/".$product->pro_id)}}">{{$product->pro_title}}</a></h4>
                                 <div class="home-one-product-price-list">
                                    <ul>
                                       <li>${{number_format((float)$product->pro_disprice, 2, '.', '')}}</li>
                                       <li><del>${{number_format((float)$product->pro_price, 2, '.', '')}}</del></li>
                                    </ul>
                                 </div>
                                 <div class="home-one-product-color-list">
                                   @if($product->colors!='')
                                   <ul>
                                       @foreach(explode(',',$product->colors) as $color)
                                           <li style="background:{{$color}};border:#00000029 1px solid"></li>
                                       @endforeach
                                    </ul>
                                   @endif
                                 </div>
                              </div>
                           </div>
                           </a>
                        </div>
                        @if($key==15)
                           @break
                        @endif
                        @endforeach
                     </div>
                      <div class="row">
                         <div class="home-one-best-btn-wrap text-center">
                            <a class="common-btn home-two-best-btn shop-details-review-btn" href="{{url("shop")}}" tabindex="0">Load More</a>
                         </div>
                      </div>
                   </div>
                   <div class="tab-pane fade" id="pills-three" role="tabpanel" aria-labelledby="pills-three-tab">
                    <div class="row">
                        @foreach ($products as $key => $product)
                        @if($key<=15)
                            @continue
                        @endif
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                           <a href="{{url("product/".$product->pro_id)}}" style="text-decoration: none">
                           <div class="home-one-product-box">
                              <div class="home-one-product-img">
                                 <img src={{ env('ADMIN_ASSET_URL').'product/'. getProductSingleImage($product) }} alt="">
                                 @if($product->pro_discount_percentage>0)
                                 <div class="home-one-product-img-cta home-one-product-img-cta-design-two">
                                    <span>{{$product->pro_discount_percentage}}% Off</span>
                                 </div>
                                 @endif
                                 <div class="home-one-product-option">
                                    <ul>
                                       <li><a href="#"><i class='bx bx-refresh'></i></a></li>
                                       <li><a href="#"><i class='bx bxs-heart'></i></a></li>
                                       <li><a href="#"><i class='bx bxs-cart-download'></i></a></li>
                                       <li><a href="{{url("product/".$product->pro_id)}}"><i class='bx bx-show'></i></a></li>
                                    </ul>
                                 </div>
                              </div>
                              <div class="home-one-product-content">
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
                                 <h4><a href="{{url("product/".$product->pro_id)}}">{{$product->pro_title}}</a></h4>
                                 <div class="home-one-product-price-list">
                                    <ul>
                                       <li>${{number_format((float)$product->pro_disprice, 2, '.', '')}}</li>
                                       <li><del>${{number_format((float)$product->pro_price, 2, '.', '')}}</del></li>
                                    </ul>
                                 </div>
                                 <div class="home-one-product-color-list">
                                   @if($product->colors!='')
                                   <ul>
                                       @foreach(explode(',',$product->colors) as $color)
                                           <li style="background:{{$color}};border:#00000029 1px solid"></li>
                                       @endforeach
                                    </ul>
                                   @endif
                                 </div>
                              </div>
                           </div>
                           </a>
                        </div>
                        @endforeach
                     </div>
                      <div class="row">
                         <div class="home-one-best-btn-wrap text-center">
                            <a class="common-btn home-two-best-btn shop-details-review-btn" href="{{url("shop")}}" tabindex="0">Load More</a>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
@endif
