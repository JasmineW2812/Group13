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
  <h1>Inventory</h1>
  <div class="header-icons"><a href="{{ route('admin.viewInventory') }}"><i class="fa-regular fa-bell"></i></a>
    <i class="fa-regular fa-user header-icons"></i>
  </div>

</header>
<body>


  <div class="admin-searchbar">
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search Product" aria-label="Search">
        </form>
  </div>


  <div class="container">
    <div class="p-4 bg-light border rounded shadow ">
    </div>
  </div>

</body>
</html>

@endsection
