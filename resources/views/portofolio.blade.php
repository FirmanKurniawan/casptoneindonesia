@extends('layouts.industry')
@section('content')
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
@endsection