<header>
    <nav>
       <div class="header-menu-area hone-one-header-menu-area d-md-none d-none d-lg-block">
          <div class="container-fluid">
             <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5">
                   <a href="javascript:void(0)" class="hidden-lg hamburger">
                   <span class="h-top"></span>
                   <span class="h-middle"></span>
                   <span class="h-bottom"></span>
                   </a>
                   <nav class="main-nav">
                      <div class="logo mobile-ham-logo d-lg-none d-block text-left">
                         <a href="{{url('/')}}"><img src={{ env('ADMIN_ASSET_URL').'logo/'.$logo->imgs_name}} alt=""></a>
                      </div>
                      <div class="menu-category-icon">
                         <a href="#"><i class='bx bx-slider-alt'></i></a>
                      </div>
                      <ul>
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><a href="{{url("shop")}}">Shop</a></li>
                        <li><a href="{{url("/")}}">Categories</a>
                        </li>
                        <li><a href="contact-us.html">Contact Us</a></li>
                      </ul>
                   </nav>
                </div>
                <div class="col-xl-2 col-lg-2 col-sm-6 col-6">
                   <div class="logo text-center">
                      <a href="{{url('/')}}"><img src={{ env('ADMIN_ASSET_URL').'logo/'.$logo->imgs_name}}  alt=""></a>
                   </div>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5">
                   <div class="menu-right-item">
                      <ul>
                        @guest
                            <li><a href="{{url('login')}}">Customer Login</a></li>
                        @endguest
                        @auth
                            <li><a href="{{url('logout')}}">Logout</a></li>
                        @endauth
                         <li><span></span></li>
                         <li><a href="#"><i class='bx bx-search menu-search-click'></i></a></li>
                         <li><a href="#"><i class='bx bx-heart'><span>2</span></i></a></li>
                         <li><a href="{{url('/cart')}}"><i class='bx bx-shopping-bag'><span>9</span></i></a></li>
                      </ul>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <div class="header-menu-area hone-one-header-menu-area d-lg-none d-block d-md-block">
          <div class="container-fluid">
             <div class="row">
                <div class="col-xl-2 col-lg-2 col-sm-3 col-3">
                   <div class="logo text-center">
                      <a href="{{url('/')}}"><img src={{ asset("/images/logo.png") }}  alt=""></a>
                   </div>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-7 col-sm-7 col-7">
                   <div class="menu-right-item">
                      <ul>
                        @guest
                            <li><a href="{{url('login')}}">Customer Login</a></li>
                        @endguest
                        @auth
                            <li><a href="{{url('logout')}}">Logout</a></li>
                        @endauth
                         <li><span></span></li>
                         <li><a href="#"><i class='bx bx-search menu-search-click'></i></a></li>
                         <li><a href="#"><i class='bx bx-heart'><span>2</span></i></a></li>
                         <li><a href="{{url('/cart')}}"><i class='bx bx-shopping-bag'><span>18</span></i></a></li>
                      </ul>
                   </div>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-2 col-sm-2 col-2">
                   <a href="javascript:void(0)" class="hidden-lg hamburger">
                   <span class="h-top"></span>
                   <span class="h-middle"></span>
                   <span class="h-bottom"></span>
                   </a>
                   <nav class="main-nav">
                      <div class="logo mobile-ham-logo d-lg-none d-block text-left">
                         <a href="{{url('/')}}"><img src={{ asset("/images/logo.png") }}  alt=""></a>
                      </div>
                      <div class="menu-category-icon d-xl-block d-lg-none d-md-none d-none">
                         <a href="#"><i class='bx bx-slider-alt'></i></a>
                      </div>
                      <ul>
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><a href="{{url("shop")}}">Shop</a></li>
                        <li><a href="{{url("/")}}">Categories</a></li>
                        <li><a href="contact-us.html">Contact Us</a></li>
                      </ul>
                   </nav>
                </div>
             </div>
          </div>
       </div>
    </nav>
    <div class="search-bar-wrap ">
       <span class="search-close"><i class='bx bx-x'></i></span>
       <div class="search-bar-content text-center">
          <div class="search-bar-inner">
             <h2>Search</h2>
             <div class="error-search apply-copon subscribe-search search-wrap-search">
                <form action="#">
                   <input type="text" placeholder="Search Text"><button>Search</button>
                </form>
             </div>
          </div>
       </div>
    </div>
    @if(count($banners))
    <div class="home-one-hero-area d-none d-md-none d-lg-block">
       <div class="container-fluid">
          <div class="row align-items-center home-one-hero-padding">
             <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="home-one-hero-slide-content-wrap">
                   @foreach ($banners as $banner )
                   <div class="single-home-three-hero-content single-home-one-hero-content">
                    <span>{{$banner->bn_upper_title}}</span>
                    <h1>{{$banner->bn_title}}</h1>
                    <p>{{$banner->bn_description}}</p>
                      <div class="home-three-hero-btn-wrap">
                        @if($banner->bn_route!==null)
                        <a class="common-btn home-one-hero-btn" href="{{route($banner->bn_route)}}">{{$banner->bn_button_text}}</a>
                    @else
                        <a class="common-btn home-one-hero-btn" href="{{$banner->bn_redirecturl}}">{{$banner->bn_button_text}}</a>
                    @endif
                      </div>
                   </div>
                   @endforeach
                </div>
             </div>
             <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="home-one-hero-slide-img-wrap">
                    @foreach ($banners as $banner)
                    <div class="single-home-one-hero-img text-center">
                        <img src={{ env('ADMIN_ASSET_URL').$banner->bn_img }}  alt="">
                     </div>
                   @endforeach
                </div>
             </div>
          </div>
       </div>
    </div>
    @endif

    @if(count($banners))
    <div class="home-one-hero-area d-block d-md-block d-lg-none">
       <div class="container">
          <div class="row">
             <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="home-three-hero-slide-img-wrap">

                    @foreach ($banners as $banner)
                    <div class="single-home-three-hero-img">
                        <img src={{ env('ADMIN_ASSET_URL').$banner->bn_img }}  alt="">
                   </div>
                   @endforeach;
                </div>
             </div>
             <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="home-three-hero-slide-content-wrap  text-center">
                   @foreach ($banners as $banner )
                   <div class="single-home-three-hero-content single-home-one-hero-content">
                      <span>{{$banner->bn_upper_title}}</span>
                      <h1>{{$banner->bn_title}}</h1>
                      <p>{{$banner->bn_description}}</p>
                      <div class="home-three-hero-btn-wrap">
                        @if($banner->bn_route!==null)
                            <a class="common-btn home-one-hero-btn" href="{{route($banner->bn_route)}}">{{$banner->bn_button_text}}</a>
                        @else
                            <a class="common-btn home-one-hero-btn" href="{{$banner->bn_redirecturl}}">{{$banner->bn_button_text}}</a>
                        @endif
                      </div>
                   </div>
                   @endforeach
                </div>
             </div>
          </div>
       </div>
    </div>
    @endif
 </header>
