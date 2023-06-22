@extends('homepage.layout.master')
@section('content')
            <!-- Page Content-->
            <section class="py-5">
                <div class="container px-5 my-5">
                    <div class="text-center mb-5">
                        <h1 class="fw-bolder">Frequently Asked Questions</h1>
                        <p class="lead fw-normal text-muted mb-0">How can we help you?</p>
                    </div>
                    <div class="row gx-5">
                        <div class="col-xl-8">
                            <!-- FAQ Accordion 1-->
                            <h2 class="fw-bolder mb-3"> How S-Guide System Works</h2>
                            <div class="accordion mb-5" id="accordionExample">
                                <div class="accordion-item">
                                    <h3 class="accordion-header" id="headingOne"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Website designed to support</button></h3>
                                    <div class="accordion-collapse collapse show" id="collapseOne" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <strong>S-guide is a website designed to support</strong>
                                             both students and counselors in their academic and personal journeys. The website is created in a way that ensures that it is user-friendly and easy to navigate. It is structured to provide valuable information on different topics such as managing case reports and counseling services.
                                            <code>topics</code>
                                            such as managing case reports and counseling services.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-header" id="headingTwo"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">The system that allows users</button></h3>
                                    <div class="accordion-collapse collapse" id="collapseTwo" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <strong>The system that allows users </strong>
                                            to file a complaint report through a complaint form is a convenient and efficient way of reporting issues.This process is typically used in organizations or companies to streamline the complaint process, making it easier for users to provide
                                            <code>relevant information </code>
                                            and enabling the organization to take appropriate action.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-header" id="headingThree"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">process of filing a complaint report</button></h3>
                                    <div class="accordion-collapse collapse" id="collapseThree" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <strong>The process of filing a complaint report</strong>
                                            usually involves filling out an online form with the required information. This information could include the user's contact information
                                            <code>a description of the issue, </code>
                                            and any supporting documents or evidence related to the complaint.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Accordion 2-->
                            <h2 class="fw-bolder mb-3">How S-guide handle Case Report?</h2>
                            <div class="accordion mb-5 mb-xl-0" id="accordionExample2">
                                <div class="accordion-item">
                                    <h3 class="accordion-header" id="headingOne"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne2" aria-expanded="true" aria-controls="collapseOne2">Case Reports</button></h3>
                                    <div class="accordion-collapse collapse show" id="collapseOne2" aria-labelledby="headingOne" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            <strong>When filing a case report, it can be classified as either major or minor depending on the nature and severity of the issue. </strong>
                                            <code>the appropriate  </code>
                                            level of response and resources required to address the issue.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-header" id="headingTwo"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">Major offense</button></h3>
                                    <div class="accordion-collapse collapse" id="collapseTwo2" aria-labelledby="headingTwo" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            <strong>A major case report typically involves a severe or urgent </strong>
                                            <code>issue that requires immediate attention and action.</code>
                                            Examples of major case reports could include cases of harassment, bullying, physical violence, or sexual assault. These cases require prompt and thorough investigation and may involve a higher level of risk to the safety or well-being of the individuals involved.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-header" id="headingThree"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree2" aria-expanded="false" aria-controls="collapseThree2">Minor offense</button></h3>
                                    <div class="accordion-collapse collapse" id="collapseThree2" aria-labelledby="headingThree" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            <strong>On the other hand, a minor case report involves an issue that is less severe or urgent and may not require immediate action.</strong>
                                            that requires immediate attention and action. Examples of major case reports could include cases of harassment, bullying, physical violence, or sexual assault
                                            <code>Examples of minor case reports could include cases of minor misconduct or violations of school policies. </code>
                                            These cases still require attention and follow-up but may not pose an immediate risk to the safety or well-being of individuals involved
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card border-0 bg-light mt-xl-5">
                                <div class="card-body p-4 py-lg-5">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <div class="text-center">
                                            <div class="h6 fw-bolder">Have more questions?</div>
                                            <p class="text-muted mb-4">
                                                Contact us at
                                                <br />
                                                <a href="#!">S-guide@gmail.com</a>
                                            </p>
                                            <div class="h6 fw-bolder">Follow us</div>
                                            <a class="fs-5 px-2 link-dark" href="#!"><i class="bi-twitter"></i></a>
                                            <a class="fs-5 px-2 link-dark" href="#!"><i class="bi-facebook"></i></a>

                                            <!-- <a class="fs-5 px-2 link-dark" href="#!"><i class="bi-youtube"></i></a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
@endsection
