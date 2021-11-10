@if(!empty($favoriteProducts))
<div class="home-one-favorite-product-area pb-76 pt-100">
    <div class="container">
       <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
             <div class="section-title text-center">
                <h3>Favorite Offers</h3>
                <p>Get Your Favorite Product with Great Offers</p>
             </div>
          </div>
       </div>
       <div class="row mt-50">
          <div class="single-home-one-favorite-slide owl-carousel">
             @foreach($favoriteProducts as $product)
             <div class="single-home-two-arrival-box">
                <div class="home-two-arrival-img">
                   <img src={{ env('ADMIN_ASSET_URL').'product/'.getProductSingleImage($product) }} alt="">
                   <div class="home-two-arrival-content text-center">
                      <h5><a href="{{url('product/'.$product->pro_id)}}">{{$product->pro_title}}</a></h5>
                      <p>${{number_format((float)$product->pro_disprice, 2, '.', '')}}</p>
                   </div>
                   <div class="home-two-arrival-cta home-two-arrival-cta-1">
                      <span>{{$product->pro_discount_percentage}}% Off</span>
                   </div>
                </div>
             </div>
             @endforeach
          </div>
       </div>
    </div>
 </div>
@endif
