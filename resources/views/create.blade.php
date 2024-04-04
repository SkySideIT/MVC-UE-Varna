@extends('layout')

@section('content')

<style>

  .uper {

    margin-top: 40px;

  }

</style>

<div class="card uper">

  <div class="card-header">

    Add Game Data

  </div>

  <div class="card-body">

    @if ($errors->any())

      <div class="alert alert-danger">

        <ul>

            @foreach ($errors->all() as $error)

              <li>{{ $error }}</li>

            @endforeach

        </ul>

      </div><br />

    @endif

      <form method="post" action="{{ route('games.store') }}">

          <div class="form-group">

              @csrf

              <label for="name">Name:</label>

              <input type="text" class="form-control" name="name"/>

          </div>

          <div class="form-group">

              <label for="platform">Platform:</label>

              <input type="text" class="form-control" name="platform"/>

          </div>

          <div class="form-group">

              <label for="price">Price:</label>

              <input type="text" class="form-control" name="price" style="width: 4em"/>

          </div>

          <div class="form-group">

              <label for="quantity">Quantity:</label>

              <input type="number" class="form-control" name="quantity" min="0" max="15" style="width: 4em"/>

          </div>

            <br>
          <button type="submit" class="btn btn-primary">Add Game</button>

      </form>

  </div>

</div>

@endsection