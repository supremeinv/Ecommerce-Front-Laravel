@if(!@empty($deals))
<div class="home-one-offer-product-area mt-100 mb-76">
   <div class="container-fluid">
      <div class="row home-one-offer-product-area-padding">
          @foreach ($deals as $deal )
         <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="home-two-deal-item home-one-offer-item">
               <div class="home-two-deal-item-img">
                  <img src={{ env('ADMIN_ASSET_URL').'deals/'.$deal->deal_image }} alt="">
                  <div class="home-two-deal-item-content home-two-deal-item-content-type-1">
                    <div class="home-two-deal-type-one-content">
                        <p>{{'Discount Upto '.$deal->deal_discount_percentage.'%'}}</p>
                        <h3>{{\Illuminate\Support\Str::limit($deal->deal_title, 10, $end='') }}</h3>
                        <p><a href="shop-details.html">Shop Now</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         @endforeach
      </div>
   </div>
</div>
@endif
