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
                
                {{-- asd --}}
                <input type="button" name="next-step" id="btn-validation" class="next-step btn btn-primary btn-sm" value="Add new report" style="display: block"/>
                    
                    
                
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

                <div class="row">
                    <div class="col-lg-5 p-3 shadow">
                        <p class="text-primary">Type of complaint</p>
                        <p>Traffic in Persons Elements.</p>
                        
                        
                        <div class="mb-3">
                            <span>Type of offense</span>
                            <select class="form-control" id="type-of-offense" onchange="offenseType(this.value)">
                                <option value="Minor offense">Minor offense</option>
                                <option value="Major offense">Major offense</option>
                            </select>
                        </div>
                        <section id="minor-offense">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="offense-minor-1">
                                <label class="form-check-label" for="offense-minor-1">
                                    Minor offense 1
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="offense-minor-2">
                                <label class="form-check-label" for="offense-minor-2">
                                    Minor offense 2
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="offense-minor-3">
                                <label class="form-check-label" for="offense-minor-3">
                                    Minor offense 3
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="offense-minor-4">
                                <label class="form-check-label" for="offense-minor-4">
                                    Minor offense 4
                                </label>
                            </div>

                        </section>

                        <section id="major-offense" style="display: none">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="offense-major-1">
                                <label class="form-check-label" for="offense-major-1">
                                    Major offense 1
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="offense-major-2">
                                <label class="form-check-label" for="offense-major-2">
                                    Major offense 2
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="offense-major-3">
                                <label class="form-check-label" for="offense-major-3">
                                    Major offense 3
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="offense-major-4">
                                <label class="form-check-label" for="offense-major-4">
                                    Major offense 4
                                </label>
                            </div>

                        </section>
                        

                        
                        
                        

                        
                    </div>



                    <div class="col-lg">asd</div>

                </div>

                <input type="button" name="next-step" class="next-step btn btn-primary btn-sm" value="Next Step" />
                <input type="button" name="previous-step" class="previous-step btn btn-secondary btn-sm" value="Previous Step" />
            </fieldset>
            <fieldset>
                <h2>Welcome To GFG Step 4</h2>
                <input type="button" name="next-step" class="next-step btn btn-primary btn-sm" value="Next Step" />
                <input type="button" name="previous-step" class="previous-step btn btn-secondary btn-sm" value="Previous Step" />
            </fieldset>
            <fieldset>
                <div class="finish">
                    <h2 class="text text-center">
                        <strong>FINISHED</strong>
                    </h2>
                </div>
                <input type="button" name="previous-step" class="previous-step btn btn-secondary btn-sm" value="Previous Step" />
            </fieldset>
        </div>
    </form>
</div>



@endsection