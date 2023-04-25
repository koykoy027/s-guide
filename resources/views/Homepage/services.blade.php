@extends('Homepage.layout.master')
@section('content')
        <!-- Page Content-->
        <div class="container px-4 px-lg-5">
            <!-- Heading Row-->
            <div class="row gx-4 gx-lg-5 align-items-center my-5">
                <div class="col-lg-7"><img class="img-fluid rounded mb-4 mb-lg-0" src="{{ asset('images/LandingPage.png') }}" alt="..." /></div>
                <div class="col-lg-5">
                    <h1 class="font-weight-light">You're in good hands in S-guide</h1>
                    <p>This is a template that is great for small businesses. It doesn't have too much fancy flare to it, but it makes a great use of the standard Bootstrap core components. Feel free to use this template for any project you want!</p>
                    <a class="btn btn-primary" href="#!">Call to Action!</a>
                </div>
            </div>
            <!-- Call to Action-->
            <div class="card text-white bg-secondary my-5 py-4 text-center">
                <div class="card-body"><p class="text-white m-0">This call to action card is a great place to showcase some important information or display a clever tagline!</p></div>
            </div>
            <!-- Content Row-->
            <div class="row gx-4 gx-lg-5">
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title">Student</h2>
                            <p class="card-text">Registered student are the only one who can use this platform. The main function of the system is  to help student to complaint easier so better be  honest and careful. For more info  click below.
</p>
                        </div>
                        <div class="card-footer"><a class="btn btn-primary btn-sm" href="#!">More Info</a></div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title">Teacher</h2>
                            <p class="card-text"> Teacher is the second parents of the students so please be fair to the students. They're also the one who can complaint . Listen and decide properly.  For more info click below.</p>
                        </div>
                        <div class="card-footer"><a class="btn btn-primary btn-sm" href="#!">More Info</a></div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title">Counsilor</h2>
                            <p class="card-text">Counselor was the initiative they are the responsible and guide. they're the one  can control the system and take responsibility. For more info click below</p>
                        </div>
                        <div class="card-footer"><a class="btn btn-primary btn-sm" href="#!">More Info</a></div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title">Parents</h2>
                            <p class="card-text">
         Parents has also the one who can complaint. they are the guardian of the students so they have the rights to protect child. For more info click below</p>
                        </div>
                        <div class="card-footer"><a class="btn btn-primary btn-sm" href="#!">More Info</a></div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title">Friends</h2>
                            <p class="card-text"> Your friend will also access the system and complain for you because Truly great friends are hard to find, difficult to leave, and impossible to forget. but also don't forget that friends will become your enemy one day. Choose properly.  Be a helpful friend. Protect and save them. For more info click below
</p>
                        </div>
                        <div class="card-footer"><a class="btn btn-primary btn-sm" href="#!">More Info</a></div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title">Classmate</h2>
                            <p class="card-text"> You're classmate can also access the system and can complain for you. Classmate is not just a classmate. For more info click below</p>
                        </div>
                        <div class="card-footer"><a class="btn btn-primary btn-sm" href="#!">More Info</a></div>
                    </div>
                </div>
            </div>
        </div>
      
        @endsection