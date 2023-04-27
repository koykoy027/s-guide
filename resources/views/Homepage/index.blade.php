@extends('homepage.layout.master')
@section('content')
    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-5">
            <div class="row gx-5 align-items-center justify-content-center">
                <div class="col-lg-8 col-xl-7 col-xxl-6">
                    <div class="my-5 text-center text-xl-start">
                        <h1 class="display-5 fw-bolder text-white mb-2">You're in Good Hands with S-Guide</h1>
                        <p class="lead fw-normal text-white-50 mb-4">In S-Guide your academic, personal, and social issues
                            are secured. It’s a safe space for everyone.</p>
                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                            <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#features">Get Started</a>
                            <!-- <a class="btn btn-outline-light btn-lg px-4" href="#!">Learn More</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5"
                        src="{{ asset('images/LandingPage.png') }}" /></div>
            </div>
        </div>
    </header>
    <!-- Features section-->
    <section class="py-5" id="features">
        <div class="container px-5 my-5">
            <div class="row gx-5">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h2 class="fw-bolder mb-0">The only way to do great work is to love what you do. <strong> </strong></h2>
                </div>
                <div class="col-lg-8">
                    <div class="row gx-5 row-cols-1 row-cols-md-2">
                        <div class="col mb-5 h-100">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="fa fa-wrench"
                                    aria-hidden="true"></i></div>
                            <h2 class="h5">Security</h2>
                            <p class="mb-0">S-Guide stands for student and security guidance. we guide. we service. we
                                respect the rights.</p>
                        </div>
                        <div class="col mb-5 h-100">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i
                                    class="fa-regular fa-hand"></i></div>
                            <h2 class="h5">Hand</h2>
                            <p class="mb-0">Rights for every student is our main goals. we helping individuals by applying
                                posivity and guidance.</p>
                        </div>
                        <div class="col mb-5 mb-md-0 h-100">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i
                                    class="fa-solid fa-hand-holding-heart"></i></div>
                            <h2 class="h5">Care</h2>
                            <p class="mb-0">Kindness over violence respect each other rights by preventing inconvenience
                                actions.</p>
                        </div>
                        <div class="col h-100">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i
                                    class="fa-regular fa-star"></i></i></div>
                            <h2 class="h5">Star</h2>
                            <p class="mb-0">The system will make you feel better that why your in good hands with S-Guide
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial section-->
    <div class="py-5 bg-light">
        <div class="container px-5 my-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-10 col-xl-7">
                    <div class="text-center">
                        <div class="fs-4 mb-4 fst-italic">"Opening up yourself is one of the bravest things you could ever
                            do. Because you want a better change for yourself and to your environment."</div>
                        <div class="d-flex align-items-center justify-content-center">
                            <img class="rounded-circle me-3" src="{{ asset('images/SG 2.png') }}" width="20px " />
                            <div class="fw-bold">
                                -GUIDE
                                <span class="fw-bold text-primary mx-1">~ </span>
                                Councelor
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
