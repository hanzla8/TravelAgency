@extends('layouts.admin')
@section('content')


<div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
                <!-- Admin created Message -->
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
                <!-- Admin created message ended -->
              <h5 class="card-title mb-4 d-inline">Admins</h5>
             <a  href="{{route('admins.create')}}" class="btn btn-primary mb-4 text-center float-right">Create Admins</a>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Admin Name</th>
                    <th scope="col">Email</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($allAdmins as $alladmin)
                  <tr>
                    <th>{{$alladmin->id}}</th>
                    <td>{{$alladmin->name}}</td>
                    <td>{{$alladmin->email}}</td>
                   
                  </tr>
                  @endforeach
                </tbody>
              </table> 
            </div>
          </div>
        </div>
      </div>


@endsection