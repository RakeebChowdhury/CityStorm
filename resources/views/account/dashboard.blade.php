@extends('layouts/account')

@section('title')
  Account - Dashboard
@endsection

@section('content')
  <div>
    <h1>Dashboard</h1>
    <h6>This is your latest information</h6>
    <div class="row">
      <div class="col-md-6">
        <div class="box">
          <canvas id="myChart" width="400" height="200"></canvas>
        </div>
      </div>
      <div class="col-md-3">
        <div class="box projects-total">
          <h1>Projects Total </h1><span class="large-number">21</span>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.bundle.js"></script>
  <script>
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
    type: 'line',
    data: {
    labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
    datasets: [{
    label: '# of Votes',
    data: [12, 19, 3, 5, 2, 3],
    backgroundColor: [
    'rgba(255, 99, 132, 0.2)',
    'rgba(54, 162, 235, 0.2)',
    'rgba(255, 206, 86, 0.2)',
    'rgba(75, 192, 192, 0.2)',
    'rgba(153, 102, 255, 0.2)',
    'rgba(255, 159, 64, 0.2)'
    ],
    borderColor: [
    'rgba(255,99,132,1)',
    'rgba(54, 162, 235, 1)',
    'rgba(255, 206, 86, 1)',
    'rgba(75, 192, 192, 1)',
    'rgba(153, 102, 255, 1)',
    'rgba(255, 159, 64, 1)'
    ],
    borderWidth: 1
    }]
    },
    options: {
    scales: {
    yAxes: [{
    ticks: {
    beginAtZero:true
    }
    }]
    }
    }
    });
  </script>
@endsection
