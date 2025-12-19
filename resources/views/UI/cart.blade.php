@include("UI.base.header")


<div class="body-wrapper-inner">
    <div class="container-fluid">

        <table class="table">
            <tr>
                <th scope="col">Index</th>
                <th scope="col">Item</th>
                <th scope="col">Price</th>
                <th scope="col">Detail</th>
                <th scope="col">Action</th>
            </tr>
            @foreach($cart as $item)
                <tr>
                    <td>1</td>
                    <td>{{$item['item']}}</td>
                    <td>{{$item['price']}}</td>
                    <td>{{$item['detail']}}</td>
                    <td>
                        <button class="btn btn-primary"><a href="/removeitem/{{$item['id']}}">Remove</a></button>
                        
                    </td>
                </tr>
            @endforeach

        </table>
    </div>
</div>
 

@include("UI.base.footer")