@extends('layouts.app')

@section('content')
    @include('inventory-manager-menu')

    <header class="mb-4">
        <h1 class="text-center">View Inventory</h1>
    </header>

    <div class="admin-searchbar mb-4">
        <form class="form-inline my-2 my-lg-0" method="get" action="{{ route('inventory.manager.searchProduct') }}">
            <input class="form-control mr-sm-2 mb-2" type="search" name="search" placeholder="Search Product"
                aria-label="Search">
            <select class="form-control form-control-sm select-size mb-2" name="product_type">
                <option value="">Product Type</option>
                <option value="Game">Game</option>
                <option value="Console">Console</option>
                <option value="Accessory">Accessory</option>
            </select>
            <select class="form-control form-control-sm select-size mb-2" name="platform">
                <option value="">Platform</option>
                <option value="pc">PC</option>
                <option value="xbox">Xbox</option>
                <option value="playstation">Playstation</option>
            </select>
            <select class="form-control form-control-sm select-size mb-2" name="order">
                <option value="">Order by</option>
                <option value="Stock">Stock Low to High</option>
            </select>
            <button class="btn btn-primary" type="submit">Search</button>
        </form>
    </div>

    <div class="content">
        <h3 class="mb-4">Products</h3>
        <a href="{{ route('products.create') }}" class="btn btn-primary mb-4">Add Product</a>
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Product</th>
                        <th scope="col">Type</th>
                        <th scope="col">Platform</th>
                        <th scope="col">Price</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Units Sold</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Updated At</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $index => $product)
                        <tr>
                            <th scope="row">{{ $index + 1 }}</th>
                            <td data-toggle="tooltip" title="{{ $product->description }}">{{ $product->name }}</td>
                            <td>{{ $product->product_type }}</td>
                            <td>{{ $product->platform }}</td>
                            <td>£{{ number_format($product->price, 2) }}</td>
                            <td>{{ $product->stock_quantity }}</td>
                            <td>{{ $product->units_sold }}</td>
                            <td>{{ $product->created_at }}</td>
                            <td>{{ $product->updated_at }}</td>
                            <td>
                                <a href="{{ route('products.edit', $product->id) }}"
                                    class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                                    style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script>
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
@endsection
