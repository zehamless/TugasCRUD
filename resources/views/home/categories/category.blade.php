@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="card-title">List of Categories</h3>
                        <a href="{{ route('categories.create') }}" class="btn btn-primary">Add Category</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($categories as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>
                                        <h5>{{ $item->name }}</h5>
                                        <div class="product-list">
                                            @forelse($item->products as $product)
                                            <span class="badge badge-pill badge-secondary">{{ $product->name }}</span>
                                            @empty
                                            <p>No products found</p>
                                            @endforelse
                                        </div>
                                    </td>
                                    <td>
                                        <div >
                                            <a href="{{ route('categories.edit', $item->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                            <form action="{{ route('categories.destroy', $item->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                @if ($item->products->count() > 0)
                                                <span class="badge badge-pill badge-danger">Can't delete category with products</span>
                                                @else
                                                <button type="submit" class="btn btn-sm btn-danger ">Delete</button>
                                                @endif
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="3">No categories found.</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection