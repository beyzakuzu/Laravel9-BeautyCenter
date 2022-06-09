<!-- Carousel Start -->
<div class="container-fluid p-0 pb-5">
    <div class="owl-carousel header-carousel position-relative">

        @foreach($sliderdata as $rs)
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="{{Storage::url($rs->image)}}" style="width: 1920px; height: 855px">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(53, 53, 53, .7);">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-8 text-center">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Güzellik Merkezine Hoş Geldiniz</h5>
                            <h1 {{$rs->title}}</h1>
                            <p class="fs-5 fw-medium text-white mb-4 pb-2">Kendinizi Yenileyin</p>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                            <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight"> Online Randevu</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="{{asset('assets')}}/img/service-8.jpg"  style="width: 1920px; height: 855px">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(53, 53, 53, .7);">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-8 text-center">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Welcome To WooDY</h5>
                            <h1 class="display-3 text-white animated slideInDown mb-4">Best Carpenter & Craftsman Services</h1>
                            <p class="fs-5 fw-medium text-white mb-4 pb-2">Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea elitr.</p>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                            <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Free Quote</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="{{asset('assets')}}/img/carousel-3.jpg" alt="">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(53, 53, 53, .7);">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-8 text-center">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Welcome To WooDY</h5>
                            <h1 class="display-3 text-white animated slideInDown mb-4">Best Carpenter & Craftsman Services</h1>
                            <p class="fs-5 fw-medium text-white mb-4 pb-2">Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea elitr.</p>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                            <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Free Quote</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- Carousel End -->

