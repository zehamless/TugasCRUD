@extends('app')

@section('content')

<section class="py-5">
    <div class="container px-4 px-lg-5">

        <div class="row">
            <div class="col-lg-12 text-end mb-4">
                <a href="{{route('products.create')}}" class="btn btn-dark">Add Product</a>
            </div>
        </div>

        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            @foreach($products as $item)
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Sale badge-->
                    <div class="badge bg-success rounded-0 position-absolute top-0 start-0 mt-3 ms-3">Sale</div>
                    <!-- Product image-->
                    <img class="card-img-top rounded-0" src="{{asset('storage/'. $item->image)}}" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">{{$item->name}}</h5>
                            <!-- Category name -->
                            <h6 class="fw-light">{{$item->category->name}}</h6>
                            <!-- Product price-->
                            <div class="my-4">
                                <span class="h4 fw-bold">{{ $item->price }}</span>
                                <span class="h6 text-secondary ms-2">IDR</span>
                            </div>
                            <hr>
                            <p class="card-text text-muted">{{$item->description}}</p>
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer bg-white border-0">
                        <div class="d-flex justify-content-end">

                            <a class="btn btn-dark me-2" href="{{route('products.edit', $item->id)}}\"><i class="fas fa-edit me-2"></i>Edit</a>

                            <form class="form-horizontal" method="POST" action="{{route('products.destroy', $item->id)}}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-dark"><i class="fas fa-trash me-2"></i>Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>
@endsection