@extends('admin.layouts.master')
@section('title', 'Add new case')
@section('content')

<div class="card shadow">
    <form id="form">
        <ul id="progressbar">
            <li class="active" id="step1">
                <strong>Validation</strong>
            </li>
            <li id="step2"><strong>Victim's details</strong></li>
            <li id="step3"><strong>Incident details</strong></li>
            <li id="step4"><strong>Summary</strong></li>
            <li id="step5"><strong>Finish</strong></li>
        </ul>
        <div class="progress">
            <div class="progress-bar"></div>
        </div>
        <br />
        <div class="p-5" style="text-align: start">
            <fieldset>
                <h4 class="text-success">Validate Victim's Details</h5>
                <small>Provide the required details to validate if there exists the same case or report.</small>
                <hr>
                
                <div class="row">
                    <div class="col-lg">
                        <div class="mb-3">
                            <span>Firstname <sup>*</sup></span>
                            <input class="form-control" type="text" id="firstname">
                            <div class="text-danger display-none" id="alert-firstname">
                                Required fields!
                            </div>
                            
                        </div>
                        <div class="mb-3">
                            <span>Middlename</span>
                            <input class="form-control" itype="text" d="middlename">
                        </div>
                        <div class="mb-3">
                            <span>Lastname <sup>*</sup></span>
                            <input class="form-control"type="text" id="lastname">
                            <div class="text-danger display-none" id="alert-lastname">
                                Required fields!
                            </div>
                        </div>
                        
                    </div>

                    <div class="col-lg">
                        <div class="mb-3">
                            <span>LRN</span>
                            <input class="form-control" type="text">
                        </div>
                    </div>
                </div>
                
                <a href="#table-validation" class="btn btn-primary btn-sm" onclick="validation()">
                    Validate
                </a>
                <br>
                <br>
                <hr>
                <section class="display-none p-5" id="table-validation">
                    <h4 class="text-success">Match Results</h4>
                    <small>Please see matched results from the list.</small>

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Victim</th>
                                <th>LRN</th>
                                <th>No. of cases</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr data-bs-toggle="modal" data-bs-target="#viewCase">
                                <td>
                                    <b>Joshua Villanueva</b>
                                    <br>
                                    <span>Birthday: 07/27/2000</span>
                                    
                                </td>
                                <td>20192281</td>
                                <td>2</td>
                            </tr>
                        </tbody>
                    </table>
                </section>
            
                <input type="button" name="next-step" id="btn-validation" class="next-step btn btn-primary btn-sm" value="Add new report" style="display: none"/>

            </fieldset>

            <fieldset>
                <h4 class="text-success">Personal Information</h4>
                <small>Victim's personal information.</small>
                <hr>
                
                <div class="row">
                    <div class="col-lg">
                        <div class="mb-3">
                            <span>Firstname <sup>*</sup></span>
                            <input class="form-control" type="text" id="victim-firstname">
                            <div class="text-danger display-none" id="alert-victim-firstname">
                                Required fields!
                            </div>
                            
                        </div>
                        <div class="mb-3">
                            <span>Middlename</span>
                            <input class="form-control" itype="text" id="victim-middlename">
                        </div>
                        <div class="mb-3">
                            <span>Lastname <sup>*</sup></span>
                            <input class="form-control"type="text" id="victim-lastname">
                            <div class="text-danger display-none" id="alert-victim-lastname">
                                Required fields!
                            </div>
                        </div>
                    </div>

                    <div class="col-lg">
                        <div class="mb-3">
                            <span>LRN</span>
                            <input class="form-control" type="text">
                        </div>
                        <div class="mb-3">
                            <span>Date of Birth</span>
                            <input class="form-control" type="date">
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <div class="mb-3">
                                    <span>Gender</span>
                                    <select class="form-control">
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Prefer not to say">Prefer not to say</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="mb-3">
                                    <span>Religion</span>
                                    <select class="form-control">
                                        <option value="Christian">Christian</option>
                                        <option value="Judaism">Judaism</option>
                                        <option value="Prefer not to say">Prefer not to say</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h5 class="text-success">Other victim information</h5>
                <hr>
                <div class="">
                    <div class="row p-3">
                        <div class="col-md-3">
                            <a class="btn btn-secondary mb-2 w-100" id="btn-contact-information" onclick="contactInformation()">
                                Contact information
                            </a>

                            <a class="btn mb-2 w-100" id="btn-guardian-information" onclick="guardianInformation()">
                                Guardian's information
                            </a>
                        </div>

                        <div class="col-md">
                            <div id="form-contact-information">
                                <p>Contact information <span class="text-primary">(Maximum of 5 entries)</span></p>
                                <p>List of all contact information that the victim can provide.</p>
                                <button class="btn btn-primary float-right btn-sm" data-bs-toggle="modal" data-bs-target="#victim-contact">Add contacts</button>

                                <table class="table my-3">
                                    <thead>
                                        <tr>
                                            <th>Contact Type</th>
                                            <th>Value</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Contact number</td>
                                            <td>09760070541</td>
                                            <td>
                                                
                                                <div class="dropdown">
                                                    <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="bi bi-three-dots-vertical"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#victim-contact">Update</a></li>
                                                        <li><a class="dropdown-item" href="#">Remove</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>

                            <div id="form-guardian-information" style="display: none">
                                <p>Victim's Guardian information <span class="text-primary">(Maximum of 5 entries)</span></p>
                                <p>Victim’s closest living relative/s or closest relation.</p>
                                <button class="btn btn-primary float-right btn-sm" data-bs-toggle="modal" data-bs-target="#victim-guardian">Add next of Guardian</button>

                                <table class="table my-3">
                                    <thead>
                                        <tr>
                                            <th>Relationship</th>
                                            <th>Name</th>
                                            <th>Contact number</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Father</td>
                                            <td>John Doe</td>
                                            <td>09460070541</td>
                                            <td>
                                                
                                                <div class="dropdown">
                                                    <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="bi bi-three-dots-vertical"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#victim-guardian">Update</a></li>
                                                        <li><a class="dropdown-item" href="#">Remove</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                            
                            

                        </div>
                    </div>
                </div>

                <input type="button" name="next-step" class="next-step btn btn-primary btn-sm" value="Next Step"/>
                <input type="button" name="previous-step" class="previous-step btn btn-secondary btn-sm" value="Previous Step" />
            </fieldset>

            <fieldset>
                <h4 class="text-success">Incidence details</h4>
                <small>Indicate information of the report.</small>
                <hr>
                <p class="text-primary">Type of complaint</p>

                <div class="row">
                    <div class="col-lg p-3 shadow">
                        
                        <p>A. Minor Offences</p>
                        
                        
                        
                        <section id="minor-offense">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="offense-minor-1">
                                <label class="form-check-label" for="offense-minor-1">
                                    Pagkakalat ng basura kung saan mang bahagi ng paaralan
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="offense-minor-2">
                                <label class="form-check-label" for="offense-minor-2">
                                    Paglagay ng anumang dekorasyon sa bibig, dila, ilong o sa kahit anumang bahagi ng katawan maliban lamang sa tanggap na pagsusuot ng hikaw sa mga babae

                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="offense-minor-3">
                                <label class="form-check-label" for="offense-minor-3">
                                    Pagtambay sa oras ng klase

                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="offense-minor-4">
                                <label class="form-check-label" for="offense-minor-4">
                                    Pagdadala ng Mobile Phone, Tablet at anumang kahalintudad na bagay na makakasagabal sa pagbibigay tuon sa pag aaral

                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="offense-minor-4">
                                <label class="form-check-label" for="offense-minor-4">
                                    Paglalagay ng kung anu-anong kulay (make-up), tattoo, paso o anumang marka sa katawan

                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="offense-minor-5">
                                <label class="form-check-label" for="offense-minor-5">
                                    Pagtakas o sadyang pag-alis sa loob ng silid-aralan (cutting classes) upang di pasukan ang asignatura

                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="offense-minor-6">
                                <label class="form-check-label" for="offense-minor-6">
                                    Hindi pagbibigay ng sulat o liham paanyaya para sa magulang ukol sa pagpupulong o mahahalagang bagay na dapat pag-usapan


                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="offense-minor-7">
                                <label class="form-check-label" for="offense-minor-7">
                                    Hindi pakikiisa sa gawaing pampaaralan (flag ceremony, flag retreat at mga opisyal na gawaing pampaaralan


                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="offense-minor-8">
                                <label class="form-check-label" for="offense-minor-8">
                                    Pag-iingay sa koridor (hallway) habang may nagkaklase


                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="offense-minor-9">
                                <label class="form-check-label" for="offense-minor-9">
                                    Pagpasok ng huli sa klase (late)
                                </label>
                            </div>
                            {{-- <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="offense-minor-10" onchange="offenseMinorOthers(this.value)">
                                <label class="form-check-label" for="offense-minor-10">
                                    Others
                                </label>
                            </div> --}}
                            {{-- <div class="form-group">
                                <input class="form-control" id="offense-minor-11" placeholder="Please specify..." style="display: none">
                            </div> --}}
                        </section>


                        
                        

                        
                        
                        

                        
                    </div>



                    <div class="col-lg p-3 shadow">
                        
                        <p>B. Major Offences</p>
                        
                        <section id="major-offense">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="offense-major-1">
                                <label class="form-check-label" for="offense-major-1">
                                    Paninigarilyo sa loob at labas ng paaralan
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="offense-major-2">
                                <label class="form-check-label" for="offense-major-2">
                                    Pagsusugal sa loob at labas ng silid-aralan
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="offense-major-3">
                                <label class="form-check-label" for="offense-major-3">
                                    Pagtalon sa bakod, pagtakas, paglabas ng paaralan ng walang pahintulot
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="offense-major-4">
                                <label class="form-check-label" for="offense-major-4">
                                    Walang pahintulot na paggamit at paninira ng anumang kagamitang pampaaralan

                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="offense-major-5">
                                <label class="form-check-label" for="offense-major-5">
                                    Pagdadala ng mga bagay na nakakasakit sa kapwa tulad ng baril, patalim o katulad na bagay
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="offense-major-6">
                                <label class="form-check-label" for="offense-major-6">
                                    Pagtatag o pagsapi sa mga samahan na tulad ng fraternity o sorority sa loob at labas ng paaralan
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="offense-major-7">
                                <label class="form-check-label" for="offense-major-7">
                                    Pagsusulat sa alinmang bahagi ng kuwarto, silya sa kuwarto sa loob at labas ng paaralan

                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="offense-major-8">
                                <label class="form-check-label" for="offense-major-8">
                                    Di Kaaya-ayang pagpapahayag ng damdamin tulad ng paghahalikan, pagyayakapan at iba pa
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="offense-major-9">
                                <label class="form-check-label" for="offense-major-9">
                                    Hayagang pakikipagrelasyon sa kapwa babae o kapwa lalaki (PDA)
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="offense-major-10">
                                <label class="form-check-label" for="offense-major-10">
                                    Pakkipag-ugnayang sekswal (pre-marital-sex)
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="offense-major-11">
                                <label class="form-check-label" for="offense-major-11">
                                    Pandaraya sa anumang pagsusulit
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="offense-major-12">
                                <label class="form-check-label" for="offense-major-12">
                                    Panggagaya ng lagda
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="offense-major-13">
                                <label class="form-check-label" for="offense-major-13">
                                    Pagnanakaw o pagkuha ng gamit ng kamag-aral o paaralan
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="offense-major-14">
                                <label class="form-check-label" for="offense-major-14">
                                    Pagbabago sa anumang papeles na may kaugnayan sap ag-aaral (hal: Report Card)?
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="offense-major-15">
                                <label class="form-check-label" for="offense-major-15">
                                    Pananakit, pananakot o pagbabanta sa kapwa mag-aaral at pakikisangkot sa anumang gulo at basag ulo?
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="offense-major-16">
                                <label class="form-check-label" for="offense-major-16">
                                    Paglapastangan (hal: pagsagot ng pabalang, pagmumura, pananakit at pagtatangka sa buhay ng guro o pamunuan at kawani ng paaralan.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="offense-major-17">
                                <label class="form-check-label" for="offense-major-17">
                                    Pagdadala o pagbebenta, paggamit o pagpasok na nasa impluwensiyang alak o bawal na gamot?
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="offense-major-18">
                                <label class="form-check-label" for="offense-major-18">
                                    Panunuod ng malalaswang panoorin, pagdadala at pagbabasa ng malalaswang babasahin?
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="offense-major-19">
                                <label class="form-check-label" for="offense-major-19">
                                    Paglabag sa safety health protocols (physical and mental health)
                                </label>
                            </div>
                            {{-- <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="offense-major-20" onchange="offenseMajorOthers(this.value)">
                                <label class="form-check-label" for="offense-major-20">
                                    Others
                                </label>
                            </div> --}}
                            {{-- <div class="form-group">
                                <input class="form-control" id="offense-major-20" placeholder="Please specify..." style="display: none">
                            </div> --}}
                        </section>
                    </div>

                </div>

                <input type="button" name="next-step" class="next-step btn btn-primary btn-sm" value="Next Step" />
                <input type="button" name="previous-step" class="previous-step btn btn-secondary btn-sm" value="Previous Step" />
            </fieldset>
            <fieldset>
                <h4 class="text-success">Summary</h4>
                <div class="">
                    <div class="row">
                        <div class="col-md">
                            <div class="row">
                                <div class="col-md-2">Fullname</div>
                                <div class="col-md">: Joshua Villanueva</div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">Grade Level</div>
                                <div class="col-md">: 8</div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">Section</div>
                                <div class="col-md">: C</div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="row">
                                <div class="col-md-2">LRN</div>
                                <div class="col-md">: 201922812019</div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">Birthday</div>
                                <div class="col-md">: 07/27/2000</div>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
                <hr>

                <h5 class="text-success">Victim's Details</h5>
                <br>
                <h6>Contact Information</h6>
                <div class="row">
                    <div class="col-md-2">Contact Number</div>
                    <div class="col-md">: 09300502556</div>
                </div>
                <h6>Guardian's Details</h6>
                <div class="row">
                    <div class="col-md-2">Relationship</div>
                    <div class="col-md">: Father</div>
                </div>
                <div class="row">
                    <div class="col-md-2">Fullname</div>
                    <div class="col-md">: John Doe</div>
                </div>
                <div class="row">
                    <div class="col-md-2">Contact</div>
                    <div class="col-md">: 093004502561</div>
                </div>
                <hr>

                <h5 class="text-success">Incidence's Details</h5>
                <br>
                <h6>Type of complaints</h6>
                <div class="row">
                    <div class="col-md-2">Minor offense</div>
                    <div class="col-md">: Pagkakalat ng basura kung saan mang bahagi ng paaralan</div>
                </div>
                <div class="row">
                    <div class="col-md-2">Minor offense</div>
                    <div class="col-md">: Paglagay ng anumang dekorasyon sa bibig, dila, ilong o sa kahit anumang bahagi ng katawan maliban lamang sa tanggap na pagsusuot ng hikaw sa mga babae</div>
                </div>
                <div class="row">
                    <div class="col-md-2">Major offense</div>
                    <div class="col-md">: Paninigarilyo sa loob at labas ng paaralan</div>
                </div>
                <div class="row">
                    <div class="col-md-2">Major offense</div>
                    <div class="col-md">: Pagsusugal sa loob at labas ng silid-aralan</div>
                </div>
                    
                
                <input type="button" name="next-step" class="next-step btn btn-primary btn-sm" value="Submit" />
                <input type="button" name="previous-step" class="previous-step btn btn-secondary btn-sm" value="Previous Step" />
            </fieldset>
            <fieldset>
                <div class="finish">
                    <h2 class="text text-center">
                        <h1 class="text-success">FINISHED</h1>
                    </h2>
                </div>
                <a href="{{ route('addCase') }}" class="btn btn-secondary btn-sm">Done</a>
                
            </fieldset>
        </div>
    </form>
</div>



@endsection