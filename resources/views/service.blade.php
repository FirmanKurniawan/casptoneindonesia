@extends('layouts.industry')

@section('content')
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


@endsection