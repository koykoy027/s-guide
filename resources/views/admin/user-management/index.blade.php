@extends('adminLayout.master')
@section('title', 'USER')
@section('content')

    <div class="card shadow-lg">
        <div class="card-header">
            <span>Case reports</span>
            {{-- <button class="btn btn-primary float-right btn-sm" data-bs-toggle="modal" data-bs-target="#viewCase">Add Officials</button> --}}
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover" id="generalTable">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Gender</th>
                            <th scope="col">School</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $datas)
                            <tr>
                                <th>
                                    {{ $datas->lastname }} , {{ $datas->firstname }} {{ $datas->middlename }}
                                </th>

                                <td> {{ $datas->email }} </td>
                                <td class="d=flex justify-content-start">
                                    <p> {{ $datas->gender }} </p>
                                    {{-- <div class="dropdown">
                                        <a data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu text-sm">
                                            <li><a class="dropdown-item" type="button" data-bs-toggle="modal"
                                                    data-bs-target="#">Update</a></li>
                                            <li><a class="dropdown-item" data-bs-toggle="modal"
                                                    data-bs-target="#delete-confirm">Delete</a></li>
                                        </ul>
                                    </div> --}}
                                </td>
                                <td>
                                    <b> {{ $datas->schools->name }} </b>

                                    <br>
                                    <span> {{ $datas->schools->year_level }} </span>
                                </td>



                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>



@endsection
