@extends('layouts/main')

@section('title')
  Design Storm - Inspiration For Your Travels
@endsection

@section('content')
<div id="site-section">
  <div class="container">
    <div id="results">
      <div>
        <div class="search-container">
          <form class="" action="/results" method="post">
            @csrf
          <input class="search" type="text" value="{{$search}}" placeholder="Search" name="search">
        </form>
        </div>
        <div class="boxes">
          <div class="row">
            @if(count($filteredData) >= 1)
              @foreach($filteredData as $inspiration)
                <div class="col-md-3">
                  <div class="box">
                    <div style="position: relative; background: url('{{$inspiration->urls->regular}}') no-repeat center center;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover; height: 200px;">
                      @php
                      $codedUrl = urlencode($inspiration->urls->regular)
                      @endphp
                      <a href="/projects/inspiration/{{$inspiration->id}}/add?image_url={{$codedUrl}}">
                        <div class="add-btn "><i class="fa fa-check" aria-hidden="true"></i></div>
                      </a>
                    </div>
                  </div>
                </div>
              @endforeach
            @else
              <h1>Sorry No Results...Please Try Again</h1>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
