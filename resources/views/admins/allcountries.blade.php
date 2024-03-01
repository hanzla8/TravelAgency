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
              <h5 class="card-title mb-4 d-inline">Countries</h5>
             <a  href="{{route('create.county')}}" class="btn btn-primary mb-4 text-center float-right">Create Country</a>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">name</th>
                    <th scope="col">continent</th>
                    <th scope="col">population</th>
                    <th scope="col">territory</th>
                    <th scope="col">Image</th>
                    <th scope="col">delete</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($allCountries as $allCountries)
                  <tr>
                    <th>{{$allCountries->id}}</th>
                    <td>{{$allCountries->name}}</td>
                    <td>{{$allCountries->continent}}</td>
                    <td>{{$allCountries->population}}</td>
                    <td>{{$allCountries->territory}}</td>
                    <td><img src="/assets/images/{{$allCountries->image}}" width="120px" height="120px" alt=""></td>
                    <td><a href="{{route('delete.country', $allCountries->id)}}" class="btn btn-danger  text-center ">Delete</a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table> 
            </div>
          </div>
        </div>
      </div>




@endsection
