<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="/">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">Cart
                        <span class="badge badge-pill badge-danger">
                            {{ count((array) session('cart')) }}</span></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li>
                            <div class="container-fluid">
                                <div class="row total-header-section">
                                    <div class="col-lg-6 col-sm-6 col-6">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i> 
										<span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                                        <span class="font-weight-bold">items</span>
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
                                                <img src="{{asset('storage/'. $details['image']) }}" alt=""
													 style="width: 100%; height: 100%; object-fit: contain;"/>
                                            </div>
                                            <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                                <p>{{ $details['name'] }}</p>
                                                <span class="price text-info">Rp: {{ $details['price'] }}</span>
                                                <span class="count"> Quantity:{{ $details['quantity'] }}</span>

                                                <form method="post" action="{{ route('update.cart') }}"
                                                      class="d-inline-block">
                                                    @csrf
                                                    @method('PATCH')

                                                    <input type="hidden" class="form-control quantity update-cart"
                                                           name="id" value="{{ $id }}">
                                                    <input type="number" name="quantity"
                                                           value="{{ $details['quantity'] }}"
                                                           class="d-inline-block ml-2" style="width: 4rem;">
                                                    <button type="submit" class="btn btn-success d-inline-block ml-2"><i class="bi bi-plus-circle-fill"></i></button>
                                                </form>

                                                <form method="POST" action="{{route('remove.cart', $details)}}"
                                                      class="d-inline-block">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger d-inline-block ml-2"><i class="bi bi-trash-fill"></i></button>
                                                </form>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
