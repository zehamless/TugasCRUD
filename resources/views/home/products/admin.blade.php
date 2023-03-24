@extends('app')
@section('content')
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row">
            <div class="col-md-12">
                <a href="{{route('products.create')}}" class="btn btn-success">Add Product</a>
            </div>
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

            @foreach($products as $item)
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Sale badge-->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                        <!-- Product image-->
                        <img class="card-img-top" src="{{asset('storage/'. $item->image)}}" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">{{$item->name}}</h5>
                                <h6 class="fw-lighter">{{$item->category->name}}</h6>
                                <!-- Product price-->
                                <p class="fw-bolder">{{$item->price}}</p>
                                <hr>
                                <p class="text-muted">{{$item->description}}</p>
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{route('products.edit', $item->id)}}">Edit</a></div>
                            <form class="form-horizontal" method="POST" action="{{route('products.destroy', $item->id)}}">
                                @csrf
                                @method('DELETE')
                                <div class="text-center"><button type="submit" class="btn btn-outline-dark mt-auto">Delete</button></div>
                            </form>
                        </div>
                    </div>
                </div>
    @endforeach

@endsection

