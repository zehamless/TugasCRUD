<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="/">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-12 main-section">
                        <div class="dropdown">
                            <button type="button" class="btn btn-info" data-toggle="dropdown">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span
                                    class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                            </button>
                            <div class="dropdown-menu">
                                <div class="row total-header-section">
                                    <div class="col-lg-6 col-sm-6 col-6">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span
                                            class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                                    </div>
                                    @php $total = 0 @endphp
                                    @foreach((array) session('cart') as $id => $details)
                                        @php $total += $details['price'] * $details['quantity'] @endphp
                                    @endforeach
                                    <div class="col-lg-6 col-sm-6 col-6 total-section text-right">
                                        <p>Total: <span class="text-info">Rp: {{ $total }}</span></p>
                                    </div>
                                </div>
                                @if(session('cart'))
                                    @foreach(session('cart') as $id => $details)
                                        <div class="row cart-detail">
                                            <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                                <img src="{{asset('storage/'. $details['image']) }}"/>
                                            </div>
                                            <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                                <p>{{ $details['name'] }}</p>
                                                <span class="price text-info"> Rp: {{ $details['price'] }}</span> <span
                                                    class="count"> Quantity:{{ $details['quantity'] }}</span>
                                            </div>
                                            <div class="input-group input-group-sm mb-3">
                                                <form method="post" action="{{ route('update.cart') }}">
                                                    @csrf
                                                    @method('PATCH')
                                                    <div class="input-group-sm mb-3 ">
                                                    <input type="hidden" class="form-control quantity update-cart"
                                                           name="id" value="{{ $id }}">
                                                        <div class="w-25 p-3">
                                                    <input type="number" name="quantity"
                                                           value="{{ $details['quantity'] }}"/>
                                                        </div>
                                                    <button type="submit" class="btn btn-success">Update</button>
                                                    </div>
                                                </form>
                                                <form method="POST"
                                                      action="{{route('remove.cart', $details)}}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </div>
                                        </div>

                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
