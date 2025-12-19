@include("UI.base.header")

<div class="container my-5">
<div class="row">

<!--  FORM -->
<div class="col-md-6">
    <h4 class="mb-3">Billing Information</h4>

    <form action="/place-order" method="POST">
        @csrf

        <input type="text" name="name" class="form-control mb-3" placeholder="Full Name" required>

        <input type="text" name="phone" class="form-control mb-3" placeholder="Phone Number" required>

        <textarea name="address" class="form-control mb-3" placeholder="Delivery Address" required></textarea>

        <input type="hidden" name="total" value="{{ $total }}">

        <button class="btn btn-success w-100">
            Place Order
        </button>
    </form>
</div>


<div class="col-md-6">
    <h4 class="mb-3">Order Summary</h4>

    <ul class="list-group mb-3">
        @foreach($cart as $item)
        <li class="list-group-item d-flex justify-content-between">
            <span>{{ $item->item }}</span>
            <strong>Rs {{ $item->price }}</strong>
        </li>
        @endforeach
    </ul>

    <h5>Total: Rs {{ $total }}</h5>
</div>

</div>
</div>

@include("UI.base.footer")
