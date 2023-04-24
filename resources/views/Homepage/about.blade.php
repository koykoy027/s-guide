@extends('Homepage.layout.master')
@section('content')


            <!-- Header-->
            <header class="py-5">
                <div class="container px-5">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-xxl-6">
                            <div class="text-center my-5">
                                <h1 class="fw-bolder mb-3"> S-Guide mission is to make easy way to open up your incidents or problems inside the campus.</h1>
                                <p class="lead fw-normal text-muted mb-4">opening up the problem can be a positive step towards healing and growth. It can help individuals develop resilience and build stronger, more supportive relationships with others.</p>
                                <a class="btn btn-primary btn-lg" href="#scroll-target">Read our story</a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- About section one-->
            <section class="py-5 bg-light" id="scroll-target">
                <div class="container px-5 my-5">
                    <div class="row gx-5 align-items-center">
                        <div class="col-lg-6"><img class="img-fluid rounded mb-5 mb-lg-0" src="{{ asset('images/LandingPage.png') }}" alt="..." /></div>
                        <div class="col-lg-6">
                            <h2 class="fw-bolder"><strong>About S-Guide</strong></h2>
                            <p class="lead fw-normal text-muted mb-0">S-GUIDE: School Case Analysis Using Data Science with Speech Recognition is a website designed to assist schools in managing and providing guidance services to students. It allows school counselors to track and monitor student progress, as well as create and manage student profiles and case files.</p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- About section two-->
            <section class="py-5">
                <div class="container px-5 my-5">
                    <div class="row gx-5 align-items-center">
                        <div class="col-lg-6 order-first order-lg-last"><img class="img-fluid rounded mb-5 mb-lg-0" src="{{ asset('images/vision.png') }}" alt="..." /></div>
                        <div class="col-lg-6">
                            <!-- <h2 class="fw-bolder"><strong>Vision</strong></h2> -->
                            <p class="lead fw-normal text-muted mb-0">A local government university with global quality of education imbued with desired knowledge, skills, and values for academic excellence, professional development, civic consciousness, resilient citizenry, technological advancement, ecological sustainability, and continual improvement.</p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- About section three-->
            <section class="py-5 bg-light" id="scroll-target">
                <div class="container px-5 my-5">
                    <div class="row gx-5 align-items-center">
                        <div class="col-lg-6"><img class="img-fluid rounded mb-5 mb-lg-0" src="{{ asset('images/mission.png') }}" alt="..." /></div>
                        <div class="col-lg-6">
                            <!-- <h2 class="fw-bolder"><strong>Mission</strong></h2> -->
                            <p class="lead fw-normal text-muted mb-0">To develop academically excellent, professionally progressive, industry sensitive, environmentally, and technologically conscious, globally competitive, and resilient graduates through quality instruction, functional co-curricular activities, responsive community immersion programs, intensive research and development and continually improved quality management system molding them to become effective social and cultural agent of change.</p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- About section four-->
            <section class="py-5">
                <div class="container px-5 my-5">
                    <div class="row gx-5 align-items-center">
                        <div class="col-lg-6 order-first order-lg-last"><img class="img-fluid rounded mb-5 mb-lg-0" src="{{ asset('images/goals.png') }}" width="900px" /></div>
                        <div class="col-lg-6">
                            <!-- <h2 class="fw-bolder"><strong>Goals</strong></h2> -->
                            <li><bold>To attain quality instruction and high level of teaching competency among the faculty members.</bold></li>
                            <li><bold>To provide priority programs that are relevant to community development and concern for the environment.</bold></li>
                            <li><bold>To strengthen linkages between the university and industry partners and professional organization.</bold></li>
                            <li><bold>To determine the opportunities provided by the university to develop students’ full potential, skills, and talents to make them competitive in the labor force in the city, in the national and global community as well.</bold></li>
                            <li><bold>To develop more immersion programs for students they will produce graduates with increased self-esteem, confidence, and resiliency.</bold></li>
                            <li><bold>To intensify student involvement and Academics leadership within the university and in the local and international sphere.</bold></li>
                            <li><bold>To embark on research undertaking, curricular enhancement, community development, environmental consciousness, industry sensitivity that significantly affect the academe.</bold></li>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Team members section-->
            <section class="py-5 bg-light">
                <div class="container px-5 my-5">
                    <div class="text-center">
                        <h2 class="fw-bolder">Our team</h2>
                        <p class="lead fw-normal text-muted mb-5">Dedicated to quality and your success</p>
                    </div>
                    <div class="row gx-5 row-cols-1 row-cols-sm-2 row-cols-xl-4 justify-content-center">
                        <div class="col mb-5 mb-5 mb-xl-0">
                            <div class="text-center">
                                <img class="img-fluid rounded-circle mb-4 px-4" src="{{ asset('images/jj.png') }}" alt="..." />
                                <h5 class="fw-bolder">Francis Oliver Hiloma</h5>
                                <div class="fst-italic text-muted">Software Manager &amp; Leader</div>
                                <div class="fst-italic text-muted">Front-End &amp; Back-End</div>
                            </div>
                        </div>
                        <div class="col mb-5 mb-5 mb-xl-0">
                            <div class="text-center">
                                <img class="img-fluid rounded-circle mb-4 px-4" src="{{ asset('images/mj.png') }}" alt="..." />
                                <h5 class="fw-bolder">Mark Joel Calimag</h5>
                                <div class="fst-italic text-muted">Data Analysis &amp; Researcher / Papers</div>
                            </div>
                        </div>
                        <div class="col mb-5 mb-5 mb-sm-0">
                            <div class="text-center">
                                <img class="img-fluid rounded-circle mb-4 px-4" src="{{ asset('images/sua.png') }}" alt="..." />
                                <h5 class="fw-bolder">Saturnino Ursua Jr</h5>
                                <div class="fst-italic text-muted">Graphics designer &amp; Researcher / Papers</div>
                            </div>
                        </div>
                        <div class="col mb-5">
                            <div class="text-center">
                                <img class="img-fluid rounded-circle mb-4 px-4" src="{{ asset('images/bay.png') }}" alt="..." />
                                <h5 class="fw-bolder">Christian Jamaybay</h5>
                                <div class="fst-italic text-muted">Graphics designer &amp; Researcher / Papers</div>
                            </div>
                        </div>
                        <div class="col mb-5">
                            <div class="text-center">
                                <img class="img-fluid rounded-circle mb-4 px-4" src="{{ asset('images/jim.png') }}" alt="..." />
                                <h5 class="fw-bolder">Jimuel Sanchez </h5>
                                <div class="fst-italic text-muted">Front-End Developer &amp; Researcher / Papers</div>
                            </div>
                        </div>
                        <div class="col mb-5">
                            <div class="text-center">
                                <img class="img-fluid rounded-circle mb-4 px-4" src="{{ asset('images/gok.jpg') }}" alt="..." />
                                <h5 class="fw-bolder">Czar Mcgokou Sebastian</h5>
                                <div class="fst-italic text-muted">Programmer</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            @endsection
