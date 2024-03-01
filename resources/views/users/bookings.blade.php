@extends('layouts.app')

@section('content')


<div class="page-heading">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2>My Bookings</h2>
        <h4>Bewafao Ko Jo palat kr dekhe &amp; Aagh os shaks ki aankho ko laga de jae</h4>
      </div>
    </div>
  </div>
</div>


<div class="amazing-deals">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 offset-lg-3">
        <div class="section-heading text-center">
          <h2>Here Are your Booking</h2>
          <p>Tum Jazib o Jameel Sahi, Husn Jazib o Jameel nahi & Mat kro bhes, haar jaogi. Husn Itni badi daleel Nahi</p>
        </div>
      </div>

      <div class="table-responsive-md">
        <table class="table table-striped table-hover table-borderless table-primary align-middle">
          <thead class="table-light">
            <caption>
              My Bookings
            </caption>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>phone_number</th>
              <th>num_guests</th>
              <th>cheak_in_date</th>
              <th>price</th>
              <th>user_id</th>
              <th>status</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">

          @foreach($bookings as $booking)
            <tr class="table-primary">
              <td>{{ $booking->id }}</td>
              <td>{{ $booking->name }}</td>
              <td>{{ $booking->phone_number }}</td>
              <td>{{ $booking->num_guests }}</td>
              <td>{{ $booking->cheak_in_date }}</td>
              <td>{{ $booking->price }}</td>
              <td>{{ $booking->user_id }}</td>
              <td>{{ $booking->status }}</td>
            </tr>
          @endforeach
          </tbody>
          <tfoot>

          </tfoot>
        </table>
      </div>



    </div>
  </div>
</div>

@endsection