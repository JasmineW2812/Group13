@extends('layouts.app')

@section('content')

@include('admin-menu')




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  
</head>
<header>
  <h1>Staff Members</h1>
  <div class="header-icons">
    <i class="fa-regular fa-bell"></i>
    <i class="fa-regular fa-user"></i>
  </div>

</header>
<body>

  <div class="admin-searchbar">
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search Staff Member" aria-label="Search">
        </form>
  </div>



  <div class="container">
        <div class="p-4 bg-light border rounded shadow">
        <h4>Staff Members:</h4>

            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title"></h5>
                <h6 class="card-subtitle mb-2 text-muted"></h6>
                <p class="card-text">.</p>
                <a href="#" class="card-link">Card link</a>
            </div>


        </div>
    </div>


</body>
</html>

@endsection
