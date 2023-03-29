@extends('app')

@section('content')
    <div class="container px-4 px-lg-5 my-5">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            @foreach($products as $item)
            <div class="col">
                <div class="card shadow-sm h-100">
                    <div class="badge bg-danger text-white position-absolute top-0 start-0 mt-3 ms-3 rounded-pill py-2 px-3">Sale</div>
                    <img src="{{asset('storage/'. $item->image)}}" class="bd-placeholder-img card-img-top" width="100%" height="225">
                    <div class="card-body">
                        <h5 class="card-title">{{$item->name}}</h5>
                        <p class="card-text">{{$item->description}}</p>
                        <p class="card-text"><small class="text-muted">{{$item->category->name}}</small></p>
                    </div>
                    <div class="card-footer bg-transparent border-top-0">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="fw-bold text-danger">{{$item->price}}</h4>
                            <a class="btn btn-outline-dark" href="{{route('add.to.cart', $item->id)}}">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection