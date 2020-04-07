<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script async="" defer="" src="https://buttons.github.io/buttons.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  </head>
  <body>
    <header>
      <div class="container"><a class="logo" href="/">City Storm</a>
        <nav>
          @guest
          <a href="/register">register</a>
          <a href="/login">login</a>
         @else
           <a href="/account">{{$user->name}}</a>
          <a href="{{ route('logout') }}"
             onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
          @endguest
        </nav>
      </div>
    </header>
    @yield('content')
  </body>
</html>
