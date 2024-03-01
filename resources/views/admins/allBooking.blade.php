@extends('layouts.admin')
@section('content')

<div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
            @if (session('update'))
                <div class="alert alert-success">
                    {{ session('update') }}
                </div>
            @endif

            <!-- Delete Message -->
            @if (session('delete'))
                <div class="alert alert-danger">
                    {{ session('delete') }}
                </div>
            @endif
              <h5 class="card-title mb-4 d-inline">Bookings</h5>
            
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">name</th>
                    <th scope="col">phone_number</th>
                    <th scope="col">num_of_geusts</th>
                    <th scope="col">checkin_date</th>
                    <th scope="col">destination</th>
                    <th scope="col">status</th>
                    <th scope="col">payment</th>
                    <th scope="col">Change Status</th>
                    <th scope="col">delete</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($allReservations as $reserve)
                  <tr>
                    <th>{{$reserve->id}}</th>
                    <td>{{$reserve->name}}</td>
                    <td>{{$reserve->phone_number}}</td>
                    <td>{{$reserve->num_guests}}</td>
                    <td>{{$reserve->cheak_in_date}}</td>
                    <td>{{$reserve->destination}}</td>
                    <td>{{$reserve->status}}</td>
                    <td>{{$reserve->price}}</td>
                    <td><a href="{{route('edit.booking', $reserve->id)}}" class="btn btn-warning  text-center text-light">Change Status</a></td>
                     <td><a href="{{route('delete.booking', $reserve->id)}}" class="btn btn-danger  text-center ">delete</a></td>
                  </tr>
                    @endforeach
                </tbody>
              </table> 
            </div>
          </div>
        </div>
      </div>




@endsection