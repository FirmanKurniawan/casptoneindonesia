@extends('layouts.industry')

@section('content')

<?php
$profile = \App\Profile::where('id',1)->first();
?>

<!-- start banner Area -->
<section class="banner-area relative" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row fullscreen d-flex align-items-center justify-content-center">
            <div class="banner-content col-lg-12 col-md-12">
                <h6 class="text-uppercase">{{$profile->pengantar1}}</h6>
                <h1>
                    {{$profile->pengantar2}}            
                </h1>
                <p class="text-white">
                    {{$profile->pengantar3}}
                </p>
                <a href="#" class="primary-btn header-btn text-uppercase">Get Started</a>
            </div>                                              
        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- Start cat Area -->
<section class="cat-area section-gap" id="feature">
    <div class="container">     
        <div class="row justify-content-center">
            <div class="col-md-12 pb-30 header-text text-center">
                <h1 class="mb-10">Kelebihan Kami</h1>
                <p>
                    Who are in extremely love with eco friendly system..
                </p>
            </div>
        </div>                      
        <div class="row">
            <div class="col-lg-4">  
                <div class="single-cat d-flex flex-column">
                    <a href="#" class="hb-sm-margin mx-auto d-block"><span class="hb hb-sm inv hb-facebook-inv"><span class="lnr lnr-magic-wand"></span></span></a>
                    <h4 class="mb-20" style="margin-top: 23px;">Maintenance</h4>
                    <p>
                        inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why.
                    </p>
                </div>                                                          
            </div>
            <div class="col-lg-4">  
                <div class="single-cat">
                    <a href="#" class="hb-sm-margin mx-auto d-block"><span class="hb hb-sm inv hb-facebook-inv"><span class="lnr lnr-rocket"></span></span></a>
                    <h4 class="mt-40 mb-20">Residental Service</h4>
                    <p>
                        inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why.
                    </p>
                </div>                                                          
            </div>
            <div class="col-lg-4">
                <div class="single-cat">
                    <a href="#" class="hb-sm-margin mx-auto d-block"><span class="hb hb-sm inv hb-facebook-inv"><span class="lnr lnr-bug"></span></span></a>
                    <h4 class="mt-40 mb-20">Commercial Service</h4>
                    <p>
                        inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why.
                    </p>
                </div>                          
            </div>
        </div>
    </div>  
</section>
<!-- End cat Area -->       



<!-- Start service Area -->
<section class="service-area section-gap" id="service">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 pb-30 header-text text-center">
                <h1 class="mb-10">Pelayanan Kami</h1>
                <p>
                    Who are in extremely love with eco friendly system..
                </p>
            </div>
        </div>                      
        <div class="row">
            <div class="col-lg-4">
                <div class="single-service">
                    <div class="thumb">
                        <img src="{{ asset ('industry/img/s1.jpg')}}" alt="">                                   
                    </div>
                    <h4>Automotive Engineering</h4>
                    <p>
                        inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct women face higher conduct.
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-service">
                    <div class="thumb">
                        <img src="{{ asset ('industry/img/s2.jpg')}}" alt="">                                   
                    </div>
                    <h4>Construction & Engineering</h4>
                    <p>
                        inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct women face higher conduct.
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-service">
                    <div class="thumb">
                        <img src="{{ asset ('industry/img/s3.jpg')}}" alt="">                                   
                    </div>
                    <h4>Industrial Engineering</h4>
                    <p>
                        inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct women face higher conduct.
                    </p>
                </div>
            </div>                                              
        </div>
    </div>  
</section>
<!-- End service Area -->



<!-- Start project Area -->
<section class="project-area section-gap" id="project">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 pb-30 header-text text-center">
                <h1 class="mb-10">Portofolio</h1>
                <p>
                    Who are in extremely love with eco friendly system..
                </p>
            </div>
        </div>                      
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <a href="{{ asset ('industry/img/p1.jpg')}}" class="img-gal">
                    <img class="img-fluid single-project" src="{{ asset ('industry/img/p1.jpg')}}" alt="">
                </a>    
            </div>
            <div class="col-lg-4 col-md-4">
                <a href="{{ asset ('industry/img/p2.jpg')}}" class="img-gal">
                    <img class="img-fluid single-project" src="{{ asset ('industry/img/p2.jpg')}}" alt="">
                </a>    
            </div>                      
            <div class="col-lg-6 col-md-6">
                <a href="{{ asset ('industry/img/p3.jpg')}}" class="img-gal">
                    <img class="img-fluid single-project" src="{{ asset ('industry/img/p3.jpg')}}" alt="">
                </a>    
            </div>
            <div class="col-lg-6 col-md-6">
                <a href="{{ asset ('industry/img/p4.jpg')}}" class="img-gal">
                    <img class="img-fluid single-project" src="{{ asset ('industry/img/p4.jpg')}}" alt="">
                </a>    
            </div>      
        </div>
    </div>  
</section>
<!-- End project Area -->



@endsection