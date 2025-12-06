@include("base.header");
<div class="body-wrapper-inner">
    <div class="container-fluid">
        <table class="table">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Category Name</th>
                <th scope="col">Description</th>
                <th scope="col">Actions</th>
            </tr>

            @foreach ($data as $value)
                <tr>
                    <td>{{ $value['id'] }}</td>
                    <td>{{ $value['categories_name'] }}</td>
                    <td>{{ $value['category_description'] }}</td>
                    <td>
                        <button class="btn btn-primary"><a href="/updateCategory/{{ $value['id'] }}">Update</a></button>
                        <button class="btn btn-danger"><a href="/deleteCategories/{{ $value['id'] }}">Delete</a></button>
                    </td>
                </tr>

            @endforeach

        </table>
    </div>
</div>

@include("base.footer")