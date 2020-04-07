@extends('layouts/account')

@section('title')
  Account - Dashboard
@endsection

@section('content')
  <div>
    <h1>Create Project</h1>
    <h6>Create your new project here</h6>
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
              <form class="" action="/account/projects" method="post">
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
                    <input type="text" name="title" value="">
                  </div>
                </div>
                <button type="submit" name="button">Save</button>
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
