@extends('app')
@section('content')
    <div class = "container">
        <div class = "row">
            <div class = "col-md-12">
                <div class = "card">
                    <div class = "card-header">
                        <h3 class = "card-title">List of Categories</h3>
                        <a href = "{{route('categories.create')}}" class = "btn btn-primary float-right">Add Category</a>
                    </div>
                    <div class = "card-body">
                        <table class = "table">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>
                                        <a href = "{{route('categories.edit', $item->id)}}" class = "btn btn-primary">Edit</a>
                                        <form action = "{{route('categories.destroy', $item->id)}}" method = "post">
                                            @csrf
                                            @method('DELETE')
                                            <button type = "submit" class = "btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
