@extends('pages.main')
@section('content')
<div class="container w-75 mt-4 bg-grey py-3">
    <div class="row">
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
        <p>{{ $message }}</p>
        </div>
        @endif
    </div>
    <form action=" {{route('career.store')}} " method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <h2 class="text-center">Fill in your details</h2>
        </div>
        <div class="mb-3">
            <label for="exampleInputName" class="form-label">Name</label>
            <input type="text" class="form-control" id="exampleInputName" placeholder="Enter your name" name="name">
        </div>
        <div class="mb-3">
            <div class="row">
                <div class="col-md-6 mb-2">
                    <label for="exampleInputFName" class="form-label">Father's Name</label>
                    <input type="text" class="form-control" id="exampleInputFname" placeholder="Enter Your Father's name" name="fname">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="exampleInputFDOB" class="form-label">D.O.B</label>
                    <input type="date" class="form-control" id="exampleInputDOB" name="dob">
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label for="exampleInputNo" class="form-label">Contact no</label>
            <input type="number" class="form-control" id="exampleInputNo" placeholder="Enter your 10 digit mobile number" name="contact">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail" name="email" placeholder="Enter your email id">
        </div>
        <div class="mb-3">
            <div class="row">
                <div class="col-md-4 mb-2">
                    <label for="exampleInputFName" class="form-label">District</label>
                    <select name="parent_id" id="" class="form-control">
                        <option value="" selected>Select city</option>
                        @foreach ($city as $c)
                            <option value="{{ $c->id }}"->{{ $c->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="exampleInputdestination" class="form-label">Interview Destination</label>
                    <input type="text" class="form-control" id="exampleInputdestination" name="destination" placeholder="interview destination">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="exampleInputapply" class="form-label">Apply For</label>
                    <input type="text" class="form-control" id="exampleInputapply" placeholder="applying  for " name="applyfor">
                </div>
            </div>
        </div>

        <div class="mb-3">
            <div class="row">

                <div class="col-md-6 mb-3">
                    <label for="exampleInputdate" class="form-label">Date</label>
                    <input type="date" class="form-control" id="exampleInputdestination" name="examdate" placeholder="selectdate">
                </div>
                <div class="col-md-6 mb-2">
                    <label for="exampleInputFName" class="form-label">Timing slot</label>
                    <select name="time" id="" class="form-control">
                        <option value="" selected>Select Time</option>
                        @foreach ($timing as $t)
                            <option value="{{ $t->id }}"->{{ $t->timing }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Upload your Resume</label>
            <input type="File" class="form-control" id="exampleInputEmail1" name="resume">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
