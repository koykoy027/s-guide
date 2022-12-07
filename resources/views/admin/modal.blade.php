<!-- VIEW CASE -->
<form class="modal fade" id="viewCase" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="true">
  <div class="modal-dialog modal-dialog-centered modal-scrollable modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">List of Case For Victim</h5>
         <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md">
            <p>
              <b>Name: </b>Joshua Villanueva
            </p>
          </div>

          <div class="col-md">
            <p>
              <b>LRN: </b>20192281
            </p>
          </div>
        </div>

        <div class="mt-3">
          <p><b>No. of case: </b>2</p>
          <div class="card p-3">
            <div class="row mb-3">
              <b class="col-md-2">Year</b>
              <p class="col-md">: 3</p>
            </div>
            <div class="row mb-3">
              <b class="col-md-2">Section</b>
              <p class="col-md">: C</p>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
        <button type="button" class="next-step btn btn-primary btn-sm" name="next-step">Add new report for this victim</button>
        {{-- <input type="button" name="next-step" id="btn-validation" class="next-step btn btn-primary btn-sm" value="Add new report"/> --}}
      </div>
    </div>
  </div>
</form>

<!-- VICTIM CONTACT -->
<form class="modal fade" id="victim-contact" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="true">
  <div class="modal-dialog modal-dialog-centered modal-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add Contact info</h5>
         <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
      </div>
      <div class="modal-body">
        <div class="row mb-3">
          <span>Contact type</span>
          <select class="form-control">
            <option value="Cellphone number">Cellphone number</option>
            <option value="Telephone number">Telephone number</option>
            <option value="Email Address">Email Address</option>
            <option value="Facebook Link">Facebook Link</option>
            <option value="Messenger Link">Messenger Link</option>
          </select>
        </div>
        <div class="row mb-3">
          <span>Contact type</span>
          <input type="text" class="form-control" required/>
        </div>

       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary btn-sm">Save</button>
        
      </div>
    </div>
  </div>
</form>

<!-- VICTIM GUARDIAN -->
<form class="modal fade" id="victim-guardian" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="true">
  <div class="modal-dialog modal-dialog-centered modal-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add Guardian info</h5>
         <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
      </div>
      <div class="modal-body">
        <div class="row mb-3">
          <span>Relationship</span>
          <select class="form-control">
            <option value="Father">Father</option>
            <option value="Mother">Mother</option>
            <option value="Siblings">Siblings</option>
            <option value="Classmate">Classmate</option>
            <option value="Others">Others</option>
          </select>
        </div>
        <div class="row mb-3">
          <span>Name</span>
          <input type="text" class="form-control" required/>
        </div>
        <div class="row mb-3">
          <span>Contact number</span>
          <input type="text" class="form-control" required/>
        </div>

       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary btn-sm">Save</button>
        
      </div>
    </div>
  </div>
</form>