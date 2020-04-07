@extends('layouts/main')

@section('title')
  City Storm - Inspiration For Your Travels
@endsection

@section('content')
  <div id="site-section">
    <div class="container">
      <div id="home">
        <div class="search-area">
          <div class="search-container">
            <form class="" action="/results" method="post">
              @csrf
              <h1>City Storm</h1>
              <input class="search" type="text" value="" placeholder="Search City..." name="search">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
