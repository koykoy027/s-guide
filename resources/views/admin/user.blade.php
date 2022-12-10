@extends('admin.layouts.master')
@section('title', 'User')
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
                        <th scope="col">Fullname</th>
                        <th scope="col">Role</th>
                        <th scope="col">Status</th>
                        <th scope="col">Actions</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <b>John Doe</b>
                            <br>
                            <span>johndoe@gmail.com</span>
                        </td>
                        
                        <td>
                            Principal
                        </td>
                        <td> <span class="badge badge-primary">Active</span></td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-three-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#">Update</a></li>
                                    <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#delete-confirm">Delete</a></li>                                
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <b>Francis Hiloma Oliver</b>
                            <br>
                            <span>hilomaoliver@gmail.com</span>
                        </td>
                        
                        <td>
                            Vice Principal
                        </td>
                        <td> <span class="badge badge-danger">Inactive</span></td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-three-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#">Update</a></li>
                                    <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#delete-confirm">Delete</a></li>                                
                                </ul>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>        
    </div>
</div>



@endsection