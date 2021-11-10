@if($featuredProducts)
<div class="home-one-featured-area mt-100 mb-76">
    <div class="container">
       <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
             <div class="section-title text-center">
                <h3>Featured Product</h3>
                <p>Wide Range of Our Premium Products</p>
             </div>
          </div>
       </div>
       <div class="row mt-50">
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
             <div class="row">
              @foreach($featuredProducts as $key => $product)
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                   <div class="single-home-two-arrival-box home-one-featured-box">
                      <div class="home-two-arrival-img home-one-featured-img">
                         <img src={{ env('ADMIN_ASSET_URL').'product/'. getProductSingleImage($product) }} alt="">
                         <div class="home-two-arrival-content home-one-featured-content">
                            <h3>{{$product->mc_name}}</h3>
                            <h5><a href="shop-details.html">{{$product->pro_title}}</a></h5>
                            <p>${{number_format((float)$product->pro_disprice, 2, '.', '')}} </p>
                         </div>
                         <div class="home-two-arrival-cta home-two-arrival-cta-1 home-one-featured-cta">
                            <span>{{$product->pro_discount_percentage}}% Off</span>
                         </div>
                      </div>
                   </div>
                </div>
                @if($key>=1)
                    @break
                @endif
              @endforeach
             </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
            @foreach($featuredProducts as $key => $product)
            @if($key<4)
                @continue
            @endif
             <div class="single-home-two-arrival-box home-one-featured-box">
                <div class="home-two-arrival-img home-one-featured-img">
                   <img src={{ asset("/images/home-one/home-one-featured-img-3.png") }} alt="">
                   <div class="home-two-arrival-content home-one-featured-content">
                      <h3>{{$product->mc_name}}</h3>
                      <h5><a href="shop-details.html">{{$product->pro_title}}</a></h5>
                      <p>${{number_format((float)$product->pro_disprice, 2, '.', '')}}<del>${{number_format((float)$product->pro_price, 2, '.', '')}}</del></p>
                   </div>
                   <div class="home-two-arrival-cta home-two-arrival-cta-1 home-one-featured-cta">
                      <span>{{$product->pro_discount_percentage}}%</span>
                   </div>
                </div>
             </div>
             @if($key==5)
                      @break
                  @endif
                @endforeach
          </div>
          <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
            <div class="row">
                @foreach($featuredProducts as $key => $product)
                @if($key<=1)
                    @continue
                @endif
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                     <div class="single-home-two-arrival-box home-one-featured-box">
                        <div class="home-two-arrival-img home-one-featured-img">
                           <img src={{ env('ADMIN_ASSET_URL').'product/'. getProductSingleImage($product) }} alt="">
                           <div class="home-two-arrival-content home-one-featured-content">
                              <h3>{{$product->mc_name}}</h3>
                              <h5><a href="shop-details.html">{{$product->pro_title}}</a></h5>
                              <p>${{number_format((float)$product->pro_disprice, 2, '.', '')}} </p>
                           </div>
                           <div class="home-two-arrival-cta home-two-arrival-cta-1 home-one-featured-cta">
                              <span>{{$product->pro_discount_percentage}}% Off</span>
                           </div>
                        </div>
                     </div>
                  </div>
                  @if($key>=3)
                      @break
                  @endif
                @endforeach
               </div>
          </div>
       </div>
    </div>
 </div>
@endif
