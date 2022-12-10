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
                        <th scope="col">LRN</th>
                        <th scope="col">Total number of cases</th>
                        <th scope="col">Actions</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <b>Joshua Villanueva</b>
                            <br>
                            <span>Birthday: 07/27/2000</span>
                        </td>
                        
                        <td>
                            20192281235
                        </td>
                        <td>3</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-three-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#viewCase">View</a></li>
                                    <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#delete-confirm">Delete</a></li>                                
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <b>CzarMcGokou Sebastian</b>
                            <br>
                            <span>Birthday: 06/21/2001</span>
                        </td>
                        
                        <td>
                            460070541
                        </td>
                        <td>3</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-three-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#viewCase">View</a></li>
                                    <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#delete-confirm">Delete</a></li>                                
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <b>Mark Joel Calimag</b>
                            <br>
                            <span>Birthday: 01/13/2003</span>
                        </td>
                        
                        <td>
                            9300502556
                        </td>
                        <td>3</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-three-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#viewCase">View</a></li>
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