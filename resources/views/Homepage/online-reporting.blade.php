@extends('adminLayout.app')
@section('content')
    

    
         <div class="container mt-3 mb-3">
 
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
 
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif
    
    <h3>Complain Form</h3>
    <form action="{{ route('online-reporting') }}" method="POST" enctype="multipart/form-data">
 
        @csrf
    
        <div class="form-group">
            <label>Complainant</label>
            <select class="form-control" name="title" id="title">
                <option value="">--</option>
                <option value="mr">Student</option>
                <option value="ms.">Guardian</option>
            </select>
        </div>

         <div class="form-group">
            <label>School ID</label>
            <select class="form-control" name="title" id="title">
                <option value="">--</option>
                <option value="TalaHighSchool">305380</option>
                <option value="UrdujaELementary">136638</option>
            </select>
        </div>
 
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name" id="name">
        </div>
 
        <div class="form-group">
            <label>Date of Incidence</label>
            <input type="date" class="form-control" name="bday" id="bday">
        </div>
 
        <div class="form-group">
            <label>Age</label>
            <input type="number" class="form-control" name="age" id="age">
        </div>
 
        <div class="form-group">
            <label>Gender</label>
            <select class="form-control" name="title" id="title">
                <option value="">--</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </div>
 
        <div class="form-group">
            <label>Phone</label>
            <input type="text" class="form-control" name="phone" id="phone">
        </div>
 
        <div class="form-group">
            <label>Statemet</label>
            <textarea class="form-control" name="address" id="address" rows="4"></textarea>
        </div>
 
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email" id="email">
        </div>
 
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="password" id="password">
        </div>
 
        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="1" id="t&c" name="t&c">
                <label class="form-check-label">
                    I agree to the terms and conditions.
                </label>
            </div>
        </div>
 
        <input type="reset" name="reset" value="Reset" class="btn btn-dark">
        <input type="submit" name="submit" value="Submit" class="btn btn-dark">
    
    </form>


@endsection
