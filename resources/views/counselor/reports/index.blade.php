@extends('counselor.layout.master')
@section('title', 'REPORTS - WALK-IN')
@section('content')

    <div class="card shadow-lg">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <span>WALK-IN REPORTS</span>
                {{-- <a class="btn btn-primary btn-sm" href="{{ url('dashboard/reports/create') }}">Add report</a> --}}
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover" id="generalTable">
                    <thead>
                        <tr>
                            <th scope="col">Fullname</th>
                            <th scope="col">Program</th>
                            {{-- <th scope="col">Reporter</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($table as $tables)
                            <tr>
                                <td>
                                    <b>{{ $tables->lastname }} {{ $tables->firstname }} {{ $tables->middlename }}</b>
                                    <br>
                                    <span>{{ $tables->student_number }}</span>
                                </td>

                                <td class="d-flex justify-content-between">
                                    <p>{{ $tables->program }}</p>

                                    <div class="dropdown">
                                        <a class="text-dark" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu text-sm">
                                            <li>
                                                <a class="dropdown-item"
                                                    href="{{ url('counselor/reports/profile', ['id' => $tables->id]) }}">
                                                    View
                                                </a>
                                            </li>
                                            {{-- <li>
                                                <a class="dropdown-item" data-bs-toggle="modal"
                                                    data-bs-target="#delete-confirm">
                                                    Delete
                                                </a>
                                            </li> --}}
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>



@endsection
