@extends('layouts/account')

@section('title')
  Account - Dashboard
@endsection

@section('content')
  <div>
    <h1>Edit Project</h1>
    <h6>Edit {{$project->title}} here</h6>
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="row">
            <div class="col-md-2">
              <a href="/account/projects">Back To Projects</a>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-10">
              <form class="" action="/account/projects/{{$project->id}}" method="post">
                @method('PUT')
                @csrf
                <div class="row">
                  <div class="col-md-6">
                    <label for="title">
                      Title
                    </label>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <input type="text" name="title" value="{{$project->title}}">
                  </div>
                </div>
                <div class="img-section">
                  <div class="row">
                    @foreach ($project->inspirations as $inspiration)
                      <div class="col-md-3 box">
                        <div style="position: relative; background: url('{{$inspiration->image_url}}') no-repeat center center;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover; height: 200px;">
                        </div>
                        <a href="/projects/inspiration/{{$inspiration->image_info}}/delete">Delete</a>
                      </div>
                    @endforeach
                  </div>
                </div>
                <button type="submit" name="button">Save</button>
              </form>
              <form method="POST" action="/account/projects/{{$project->id}}/delete">
                @csrf
                @method('DELETE')
                <button style="background:red; border: 1px solid red; margin-top:20px;">
                  Delete
                </button>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.bundle.js"></script>
  <script>

  </script>
@endsection
