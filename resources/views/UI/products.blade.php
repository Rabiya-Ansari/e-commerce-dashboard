@include("UI.base.header")


<div class="container my-5">
    <div class="row g-4">

        @foreach($data as $pro)
        <div class="col-md-4">
            <div class="card shadow-sm h-100">

                <div class="card-body d-flex flex-column">
                    <h5 class="card-title fw-bold">
                        {{ $pro['product_name'] }}
                    </h5>

                    <p class="card-text text-muted">
                        {{ $pro['detail'] }}
                    </p>

                    <h6 class="text-success mb-3">
                        Rs {{ $pro['price'] }}
                    </h6>

                    <form action="/addtocart" method="POST" class="mt-auto">
                        @csrf
                        <input type="hidden" name="item" value="{{ $pro['product_name'] }}">
                        <input type="hidden" name="price" value="{{ $pro['price'] }}">
                        <input type="hidden" name="detail" value="{{ $pro['detail'] }}">

                        <button type="submit" class="btn btn-primary w-100">
                            Add to Cart
                        </button>
                    </form>
                </div>

            </div>
        </div>
        @endforeach

    </div>
</div>


@include("UI.base.footer")