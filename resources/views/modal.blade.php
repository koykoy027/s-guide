{{-- modal --}}
<div class="modal fade" id="logout" tabindex="-1" aria-labelledby="logoutLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title fs-5" id="logoutLabel">LOGOUT SESSION</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Do you want to logout your session?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">No. Cancel</button>

                <a type="button" class="btn btn-primary" href="{{ route('logout') }}"
                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    Yes. Logout
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </a>
            </div>
        </div>
    </div>
</div>
{{-- student modal --}}
<div class="modal fade" id="student" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="studentLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="studentLabel">Students Step By Step Guide</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img class="img-fluid rounded mb-4 mb-lg-0" src="{{ asset('images/guide.jpg') }}" alt="..." />


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                {{-- <button type="button" class="btn btn-primary">Understood</button> --}}
            </div>
        </div>
    </div>
</div>
{{-- teacher modal --}}
<div class="modal fade" id="teacher" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="teacherLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="teacherLabel">teacher Step By Step Guide</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img class="img-fluid rounded mb-4 mb-lg-0" src="{{ asset('images/guide.jpg') }}" alt="..." />

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                {{-- <button type="button" class="btn btn-primary">Understood</button> --}}
            </div>
        </div>
    </div>
</div>

{{-- Counselor modal --}}
<div class="modal fade" id="counselor" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="counselorLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="counselorLabel">Councelor Step By Step Guide</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img class="img-fluid rounded mb-4 mb-lg-0" src="{{ asset('images/guide.jpg') }}" alt="..." />

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                {{-- <button type="button" class="btn btn-primary">Understood</button> --}}
            </div>
        </div>
    </div>
</div>

{{-- parents modal --}}
<div class="modal fade" id="parent" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="parentLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="parentLabel">Parent Step By Step Guide</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img class="img-fluid rounded mb-4 mb-lg-0" src="{{ asset('images/guide.jpg') }}" alt="..." />

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                {{-- <button type="button" class="btn btn-primary">Understood</button> --}}
            </div>
        </div>
    </div>
</div>

{{-- friends modal --}}
<div class="modal fade" id="friends" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="friendsLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="friendsLabel">Friends Step By Step Guide</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img class="img-fluid rounded mb-4 mb-lg-0" src="{{ asset('images/guide.jpg') }}" alt="..." />

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                {{-- <button type="button" class="btn btn-primary">Understood</button> --}}
            </div>
        </div>
    </div>
</div>

{{-- classmate modal --}}
<div class="modal fade" id="classmate" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="classmateLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="classmateLabel">Classmate Step By Step Guide</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img class="img-fluid rounded mb-4 mb-lg-0" src="{{ asset('images/guide.jpg') }}" alt="..." />

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                {{-- <button type="button" class="btn btn-primary">Understood</button> --}}
            </div>
        </div>
    </div>
</div>
