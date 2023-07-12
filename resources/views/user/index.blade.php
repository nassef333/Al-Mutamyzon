<!DOCTYPE html>
<html class="no-js" lang="zxx">

@include('user.static.head')

<body>


    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- /End Preloader -->

    @include('user.static.header')

    <!-- Start Hero Area -->
    <section class="hero-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12 custom-padding-right">
                    <div class="slider-head">
                        <!-- Start Hero Slider -->
                        <div class="hero-slider">
                            <!-- Start Single Slider -->
                                @foreach ($swipers as $swiper)
                                <div class="single-slider"
                                style="background-image: url({{ asset("storage/".$swiper->image)}});">
                                <div class="content">
                                    <h2><span>Don't miss!</span>
                                        {{$swiper->title}}
                                    </h2>
                                    <p>{{$swiper->description}}</p>
                                    <h3><span>Order Now!</span> </h3>
                                    <div class="button">
                                        <a href="{{url('/category/'. $swiper->category_id)}}" class="btn">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                                @endforeach
                            <!-- End Single Slider -->
                        </div>
                        <!-- End Hero Slider -->
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-6 col-12 md-custom-padding">
                            <!-- Start Small Banner -->
                            <div class="hero-small-banner"
                            style="background-image: url({{ asset("storage/".$swipers->last()->image)}});">
                            <div class="content">
                                    <h2>
                                        <span>SALES!</span>
                                        {{$swipers->last()->title}}                                    </h2>
                                        <h3><span>Order Now!</span> </h3>
                                </div>
                            </div>
                            <!-- End Small Banner -->
                        </div>
                        <div class="col-lg-12 col-md-6 col-12">
                            <!-- Start Small Banner -->
                            <div class="hero-small-banner style2">
                                <div class="content">
                                    <h2>Weekly Sale!</h2>
                                    <p>Saving up to 50% off all online store items this week.</p>
                                    <div class="button">
                                        <a class="btn" href="/advanced-search">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Start Small Banner -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Area -->

    <!-- Start Trending Product Area -->
    <section class="trending-product section" style="margin-top: 12px;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Latest Product</h2>
                        <p>Discover the newest and most cutting-edge computer products designed to enhance your computing experience and boost productivity.</p>
                    </div>
                </div>
            </div>
            <div class="row" style="display: flex; flex-wrap: wrap;">
            @foreach ($products as $product)
                <div class="col-lg-3 col-md-6 col-12" style="display: flex; flex-direction: column; margin-bottom: 20px;">
                    <!-- Start Single Product -->
                        <div class="single-product" style="display: flex; flex-direction: column; height: 100%; justify-content: space-between;">
                        <div class="product-image">
                        @php
                            $images = $product->image;
                            $images = explode(",", $images);
                        @endphp
                            <img src="{{ asset("storage/".$images[0])}}" alt="Product Image">
                            @if($product->old_price)
                                <span class="sale-tag">
                                    @php
                                        $discountPercentage = 100 - (($product->price / $product->old_price) * 100);
                                        echo number_format($discountPercentage, 2).'%';
                                    @endphp
                                </span>
                            @endif
                            <div class="button">
                                <a class="btn" href="/product/{{ $product->id }}"> View Product</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <span class="category">{{$product->category->name}}</span>
                            <h4 class="title">
                                <a href="/product/{{$product->id}}" >{{$product->name}}</a>
                            </h4>
                            <ul class="review">
                                <span>{{$product->rate}}</span>
                                <li><i class="lni lni-star-filled"></i></li>
                                <span>Stars</span>
                            </ul>
                            <div class="price">
                                <span>AED {{$product->price}}</span>
                                @if($product->old_price)
                                    <span class="discount-price">AED {{$product->old_price}}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product -->
                </div>
            @endforeach
            </div>
        </div>
    </section>
    <!-- End Trending Product Area -->

    <!-- Start Call Action Area -->
    <section class="call-action section">
        <div class="container">
            <div class="row ">
                <div class="col-lg-8 offset-lg-2 col-12">
                    <div class="inner">
                        <div class="content">
                            <h2 class="wow fadeInUp" data-wow-delay=".4s">Unlock the future of computing</h2>
                            <p class="wow fadeInUp" data-wow-delay=".6s">Unleash your curiosity and dive into a world of endless possibilities. By browsing now, you'll discover a treasure trove of additional pages, exciting features, and a commercial license.</p>
                            <div class="button wow fadeInUp" data-wow-delay=".5s">
                                <a href="/advanced-search" class="btn">Browse Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Call Action Area -->

    <!-- Start Banner Area -->
    <section class="banner section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="single-banner" style="background-image:url('assets/user/images/banner/banner-1-bg.jpg')">
                        <div class="content">
                            <h2>Smart Watch 2.0</h2>
                            <p>Space Gray Aluminum Case with <br>Black/Volt Real Sport Band </p>
                            <div class="button">
                                <a href="product-grids.html" class="btn">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="single-banner custom-responsive-margin"
                        style="background-image:url('assets/user/images/banner/banner-2-bg.jpg')">
                        <div class="content">
                            <h2>Smart Headphone</h2>
                            <p>Lorem ipsum dolor sit amet, <br>eiusmod tempor
                                incididunt ut labore.</p>
                            <div class="button">
                                <a href="/advanced-search" class="btn">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!-- Start Shipping Info -->
    <section class="shipping-info">
        <div class="container">
            <ul>
                <!-- Free Shipping -->
                <li>
                    <div class="media-icon">
                        <i class="lni lni-delivery"></i>
                    </div>
                    <div class="media-body">
                        <h5>Fast Shipping</h5>
                        <span>Over All Orders</span>
                    </div>
                </li>
                <!-- Money Return -->
                <li>
                    <div class="media-icon">
                        <i class="lni lni-support"></i>
                    </div>
                    <div class="media-body">
                        <h5>24/7 Support.</h5>
                        <span>Hotline.</span>
                    </div>
                </li>
                <!-- Support 24/7 -->
                <li>
                    <div class="media-icon">
                        <i class="lni lni-credit-cards"></i>
                    </div>
                    <div class="media-body">
                        <h5>Online Payment.</h5>
                        <span>Secure Payment Services.</span>
                    </div>
                </li>
                <!-- Safe Payment -->
                <li>
                    <div class="media-icon">
                        <i class="lni lni-reload"></i>
                    </div>
                    <div class="media-body">
                        <h5>Easy Return.</h5>
                        <span>Hassle Free Shopping.</span>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- End Shipping Info -->

    @include('user.static.footer')

    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top">
        <i class="lni lni-chevron-up"></i>
    </a>

    <!-- ========================= JS here ========================= -->
    <script src="assets/user/js/bootstrap.min.js"></script>
    <script src="assets/user/js/tiny-slider.js"></script>
    <script src="assets/user/js/glightbox.min.js"></script>
    <script src="assets/user/js/main.js"></script>
    <script type="text/javascript">
        //========= Hero Slider
        tns({
            container: '.hero-slider',
            slideBy: 'page',
            autoplay: true,
            autoplayButtonOutput: false,
            mouseDrag: true,
            gutter: 0,
            items: 1,
            nav: false,
            controls: true,
            controlsText: ['<i class="lni lni-chevron-left"></i>', '<i class="lni lni-chevron-right"></i>'],
        });

        //======== Brand Slider
        tns({
            container: '.brands-logo-carousel',
            autoplay: true,
            autoplayButtonOutput: false,
            mouseDrag: true,
            gutter: 15,
            nav: false,
            controls: false,
            responsive: {
                0: {
                    items: 1,
                },
                540: {
                    items: 3,
                },
                768: {
                    items: 5,
                },
                992: {
                    items: 6,
                }
            }
        });
    </script>

</body>

</html>
