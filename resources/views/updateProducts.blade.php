@include("base.header")
<link rel="stylesheet" href="assets/css/styles.min.css">
<div class="body-wrapper-inner">
    <div class="container-fluid">
        <form action="/updatingProducts/{{ $data['id'] }}" method="POST">
            @csrf

            <label>Product Name:</label><br>
            <input type="text" class="form-control" name="name" value="{{ $data['product_name'] }}"><br><br>

            <label>Quantity:</label><br>
            <input type="text" class="form-control" name="quantity" value="{{ $data['quantity'] }}"><br><br>

            <label>Price:</label><br>
            <input type="text" class="form-control" name="price" value="{{ $data['price'] }}"><br><br>

            <label>Details:</label><br>
            <input type="text" name="detail" class="form-control"
                value="{{ $data['detail'] }}"></input>

            <button type="submit" class="btn btn-primary">Update Products</button>
        </form>
    </div>
</div>
@include("base.footer")