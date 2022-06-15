@extends('auth.dashboard.admindashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="row py-3 ">
<div class="col-sm-5 align-self-center"><hr></div>
<div class="col-sm-2"> <button class="btn">
    <a class="btn btn-success mx-auto" href="{{ route('file-export') }}">Export data</a>
     </button></div>
<div class="col-sm-5 align-self-center"><hr></div>


        </div>
        <div class="col-md-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="col">ID</th>
                        <th scope="col">Booking_id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Contact</th>
                        <th scope="col">Slotdate</th>
                        <th scope="col">Slottime</th>
                        <th scope="col">center</th>
                        <th scope="col">Paymentstatus</th>
                        {{-- <th scope="col">Action</th>h> --}}

                    </tr>
                </thead>
                <tbody>


                    @foreach ($careers as $career)


                    <tr>
                        <th scope="row">{{ $career->id}}</th>
                        <td> {{ $career->booking_id}} </td>
                        <td> {{ $career->name}} </td>
                        <td> {{ $career->email}} </td>
                        <td> {{ $career->contact_no}} </td>
                        <td scope="row"> {{ $career->slotdate}} </td>
                        <td scope="row"> {{ $career->slottiming}} </td>
                        <td scope="row"> {{ $career->interview_destination}} </td>
                        <td scope="row">
                            @switch($career->paymentstatus )
                            @case(0)
                                <a  class="btn btn-danger">Pending</a>
                            @break
                            @case(1)
                                <a class="btn btn-success">Successful</a>
                            @break
                            @default

                            @endswitch

                        </td>
                        {{-- <td>@switch($career->status)
                            @case(0)
                                <a class="btn btn-primary">Pending</a>
                                @break
                            @case(1)
                                <a class="btn btn-success">Accepted</a>
                                @break
                                @case(2)
                                <a  class="btn btn-danger">Rejected</a>
                                @break
                            @default

                        @endswitch

                        <td>
                            <form action="{{ route('home.status', $career->id) }}" method="POST" >
                        @csrf
                        <select class="btn btn-light" name="status" id="statusval" onchange="this.form.submit()">
                            <option value="" class="btn" type="submit">change status</option>
                            <option value="0" class="btn" type="submit">Pending</option>
                            <option value="1" type="submit">Accept</option>
                            <option value="2" type="submit">Reject</option>
                        </select>
                        </form>
                        </td>
                    </tr> --}}
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                <span>
                    {{$careers->links()}}
                </span>
            </div>
        </div>
    </div>
</div>
@endsection


<style>
    .w-5 {
        display: none;
    }

</style>
