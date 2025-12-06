@include("base.header")
<div class="body-wrapper-inner">
    <div class="container-fluid">
        <form action="/addProducts" method="POST">
            @csrf

            <label>Product Name:</label><br>
            <input type="text" class="form-control" name="name"><br><br>

            <label>Price:</label><br>
            <input type="text" class="form-control" name="price"><br><br>

            <label>Quantity</label><br>
            <input type="text" class="form-control" name="quantity"><br><br>

            <label>Detail:</label><br>
            <textarea name="details" class="form-control"></textarea>

            <button type="submit" class="btn btn-primary">Add Product</button>
        </form>
    </div>
</div>
@include("base.footer");