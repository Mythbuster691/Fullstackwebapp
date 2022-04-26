@extends('auth.dashboard.admindashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="col">ID</th>
                        <th scope="col">Booking_id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Contact</th>
                        <th scope="col">status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $careers = DB::table('careers')->select('id','name','email','contact_no','status','booking_id')->get();
                    ?>
                    @foreach ($careers as $career)


                    <tr>
                        <th scope="row">{{ $career->id}}</th>
                        <td > {{ $career->booking_id}} </td>
                        <td> {{ $career->name}} </td>
                        <td> {{ $career->email}} </td>
                        <td> {{ $career->contact_no}} </td>
                        <td>@switch($career->status)
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
                               <select class="btn btn-light" name="status" id="statusval">
                                   <option value="0" class="btn" type="submit">Pending</option>
                                   <option value="1" type="submit">Accept</option>
                                   <option value="2" type="submit">Reject</option>
                               </select>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection


