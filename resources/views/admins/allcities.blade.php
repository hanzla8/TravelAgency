@extends('layouts.admin')
@section('content')

<div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('delete'))
                <div class="alert alert-danger">
                    {{ session('delete') }}
                </div>
            @endif
              <h5 class="card-title mb-4 d-inline">Cities</h5>
              <a  href="{{route('create.cities')}}" class="btn btn-primary mb-4 text-center float-right">Create cities</a>

              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">name</th>
                    <th scope="col">price</th>
                    <th scope="col">trip_days</th>
                    <th scope="col">image</th>
                    <th scope="col">delete</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($allCities as $allCities)
                  <tr>
                    <th>{{$allCities->id}}</th>
                    <td>{{$allCities->name}}</td>
                    <td>{{$allCities->num_days}}</td>
                    <td>{{$allCities->price}}</td>
                    <td><img src="/assets/images/{{$allCities->image}}" width="100px" height="100px" alt=""></td>
                     <td><a href="{{route('delete.cities', $allCities->id)}}" class="btn btn-danger  text-center ">delete</a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table> 
            </div>
          </div>
        </div>
      </div>






@endsection