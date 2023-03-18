@include('app')
@section('content')
    <div class = "container">
        <div class = "row">
            <div class = "col-md-12">
                <div class = "card">
                    <div class = "card-header">
                        <h3 class = "card-title">Add Product</h3>
                    </div>
                    <div class = "card-body">
                        <form action = "{{route('products.update', $products->id)}}" method = "post" enctype = "multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class = "form-group">
                                <label for = "name">Name</label>
                                <input type = "text" name = "name" id = "name" class = "form-control" placeholder = "Name" value="{{$item->name}}">
                                @error('name')
                                    <div class = "alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class = "form-group">
                                <label for = "price">Price</label>
                                <input type = "text" name = "price" id = "price" class = "form-control" placeholder = "Price" value="{{$item->price}}">
                                @error('price')
                                    <div class = "alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class = "form-group">
                                <label for = "description">Description</label>
                                <input type = "text" name = "description" id = "description" class = "form-control" placeholder = "Description" value="{{$item->description}}">
                                @error('description')
                                    <div class = "alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class = "form-group">
                                <label for = "category_id">Category</label>
                                <select name = "category_id" id = "category_id" class = "form-control">
                                    <option value = "">Select Category</option>
                                    @foreach($categories as $category)
                                        <option value = "{{$category->id}}" {{$category->id == $item->category_id ? 'selected' : ''}}>{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class = "form-group">
                                <label for = "image">Image</label>
                                <input type = "file" name = "image" id = "image" class = "form-control">
                                @error('image')
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