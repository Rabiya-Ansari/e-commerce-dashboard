@include("base.header");
<div class="body-wrapper-inner">
    <div class="container-fluid">
        <table class="table">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Product Name</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
                <th scope="col">Description</th>
                <th scope="col">Actions</th>
            </tr>
            @foreach ($data as $value)


                <tr>
                    <td>{{ $value['id'] }}</td>
                    <td>{{ $value['product_name'] }}</td>
                    <td>{{ $value['quantity'] }}</td>
                    <td>{{ $value['price'] }}</td>
                    <td>{{ $value['detail'] }}</td>
                    <td>
                        <button class="btn btn-primary"><a href="">Update</a></button>
                        <button class="btn btn-danger"><a href="">Delete</a></button>
                    </td>
                </tr>

            @endforeach

        </table>
    </div>
</div>

@include("base.footer")