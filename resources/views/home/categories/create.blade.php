@extends('app')
@section('content')
    <div class = "container">
        <div class = "row">
            <div class = "col-md-12">
                <div class = "card">
                    <div class = "card-header">
                        <h3 class = "card-title">Add Product</h3>
                    </div>
                    <div class = "card-body">
                        <form action = "{{route('categories.store')}}" method = "post" enctype = "multipart/form-data">
                            @csrf
                            <div class = "form-group">
                                <label for = "name">Name</label>
                                <input type = "text" name = "name" id = "name" class = "form-control" placeholder = "Name">
                                @error('name')
                                <div class = "alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type = "submit" class = "btn btn-success">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
