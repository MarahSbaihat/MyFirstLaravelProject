@extends('layouts.master')
@section('content')
    <main role="main" class="">
        <header>
            <div id="carouselExampleFade" class="h-100vh carousel slide carousel-fade">
                <div class="h-100vh carousel-inner">
                    <div class="carousel-item h-100vh active">
                        <img src="assets/image/carousel/images (1).jpeg" class="d-block h-100 w-100" alt="...">
                    </div>
                    <div class="carousel-item h-100vh">
                        <img src="assets/image/carousel/images.jpeg" class="d-block h-100 w-100" alt="...">
                    </div>
                    <div class="carousel-item h-100vh">
                        <img src="assets/image/carousel/تنزيل (1).jpeg" class="d-block h-100 w-100" alt="...">
                    </div>
                    <div class="carousel-item h-100vh">
                        <img src="assets/image/carousel/تنزيل (2).jpeg" class="d-block h-100 w-100" alt="...">
                    </div>
                    <div class="carousel-item h-100vh">
                        <img src="assets/image/carousel/تنزيل.jpeg" class="d-block h-100 w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </header>
        <section>
            <div class="row container">
                <h2>About</h2>
                <div class="d-flex align-items-center">
                    <div class="col-md-5">
                        <img class="w-100 about img" src="assets/image/our/تنزيل (4).jpeg" alt="">
                    </div>
                    <div class="offset-1 col-md-6">
                        <p>Welcome to "Designer Company", where we are proud to provide high-quality decoration services that transform places into artistic links that reflect elegance and sophistication. We at "Designer Company" believe that decoration is not just an addition to space, but rather an artistic expression that carries the special identity of each client. Offers Our specialized team of designers offer unique experiences in interior design, where creativity combines with comfort to create residential and commercial environments that inspire and delight the senses. Choose "Designer Company" as a trusted partner to bring timeless beauty to every corner of your place, as our passion is to transform your dreams into reality And beautiful.</p>
                    </div>
                </div>
                <section>
                    <div class="row">
                        <h2 style="margin-top: 40px;">Testimonials</h2>
                        <div class="col-md-4">
                            <fieldset>
                                <legend><img class="user" src="assets/image/image.png" alt=""></legend>
                                <h4>Layal Layal</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, facilis.</p>
                            </fieldset>
                        </div>
                        <div class="col-md-4">
                            <fieldset>
                                <legend><img class="user" src="assets/image/image.png" alt=""></legend>
                                <h4>Maryam Ameer</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, facilis.</p>
                            </fieldset>
                        </div>
                        <div class="col-md-4">
                            <fieldset>
                                <legend><img class="user" src="assets/image/image.png" alt=""></legend>
                                <h4>Abed Ali</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, facilis.</p>
                            </fieldset>
                        </div>
                    </div>
                </section>
            </div>
        </section>
    </main>
@endsection
