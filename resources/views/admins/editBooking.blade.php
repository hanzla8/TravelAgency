@extends('layouts.admin')
@section('content')

<div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-5 d-inline">UPDATE BOOKINGS</h5>
              <p>Current Status <b>{{ $booking->status }}</b></p>
          <form method="POST" action="{{route('update.booking', $booking->id)}}" enctype="multipart/form-data">
          @csrf

<div class="form-outline mb-4 mt-4">
    <select name="status" class="form-select form-control" aria-label="Default select example">
        <option selected>Choose Status</option>
        <option value="Processing">Processing</option>
        <option value="Booked Successfully">Booked Successfully</option>
    </select>
</div>

@if($errors->has('status'))
    <p class="alert alert-danger">
        {{ $errors->first('status') }}
    </p>
@endif

<br>
<br>

<!-- Submit button -->
<button type="submit" name="submit" class="btn btn-primary mb-4 text-center">create</button>

              </form>

            </div>
          </div>
        </div>
      </div>


@endsection