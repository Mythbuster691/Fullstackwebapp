@extends('pages.main')
@section('content')
<div class="container w-75 mt-4 bg-light py-3">
    <div class="row">
        @if ($message = Session::get('fail'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
    </div>
    <?php

    ?>
    <form action=" {{route('career.store')}} " method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <h2 class="text-center py-3 text-success fw-bold">Signup Your Application with The Mahir Travels</h2>
        </div>
        <div class="mb-3">
            <label for="exampleInputName" class="form-label">Name</label>
            <input type="text" class="form-control @error('name')is-invalid @enderror"" id=" exampleInputName"
                placeholder="Enter your name" name="name" value="{{ old('name') }}">
            @error('name')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <div class="row">
                <div class="col-md-6 mb-2">
                    <label for="exampleInputFName" class="form-label">Father's Name</label>
                    <input type="text" class="form-control  @error('fname')is-invalid @enderror" id="exampleInputFname"
                        placeholder="Enter Your Father's name" name="fname" value="{{ old('fname') }}">
                    @error('fname')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label for="exampleInputFDOB" class="form-label">D.O.B</label>
                    <input type="date" class="form-control @error('dob')is-invalid @enderror" id="exampleInputDOB"
                        name="dob" value="{{ old('dob') }}">
                    @error('dob')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

            </div>
        </div>
        <div class="mb-3">
            <label for="exampleInputNo" class="form-label">Contact no</label>
            <input type="number" class="form-control @error('contact')is-invalid @enderror" id="exampleInputNo"
                placeholder="Enter your 10 digit mobile number" name="contact" ">
            @error('contact')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail" class="form-label">Email address</label>
            <input type="email" class="form-control @error('email')is-invalid @enderror" id="exampleInputEmail"
                name="email" placeholder="Enter your email id" >
            @error('email')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <div class="row">
                <div class="col-md-4 mb-2">
                    <label for="exampleInputFName" class="form-label">District</label>
                    <select name="district" id="district"
                        class="form-control @error('district')is-invalid @enderror">
                        <option value="" selected>Select city</option>
                        @foreach ($districts as $key => $district)
                        <option value="{{ $key }}">{{ $district}}</option>
                        @endforeach
                    </select>
                    @error('district')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-4 mb-3">
                    <label for="exampleInputdestination" class="form-label">Interview Destination</label>
                    <select name="center" id="interviewdestination"
                        class="form-control @error('center')is-invalid @enderror ">
                    </select>
                    @error('center')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div>
                <div class="col-md-4 mb-3">
                    <label for="exampleInputapply" class="form-label">Apply For</label>
                    <select name="applyfor" class="form-control" id="exampleInputapply"
                        placeholder="applying  for" value="{{ old('applyfor') }}">
                        <option value="" selected>Select your post</option>
                        @foreach ($apply as $key => $a)
                        <option value="{{$key}}">{{ $a }}</option> @endforeach
                    </select>

                </div>
            </div>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Upload your Resume</label>
            <input type="File" class="form-control  @error('resume')is-invalid @enderror" id="exampleInputEmail1"
                name="resume">
            @error('resume')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
