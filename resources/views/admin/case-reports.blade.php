@extends('admin.layouts.master')
@section('title', 'Case reports')
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
                        <th scope="col">Chairmanship</th>
                        <th scope="col">Position</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Joshua Villanueva</th>
                        <td>Commitee on Infra</td>
                        <td>Coulcilor 6</td>
                        <td>
                            <span class="badge badge-primary">Active</span>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-three-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#viewCase">Edit</a></li>
                                    <li><a class="dropdown-item" href="#">Delete</a></li>                                
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