@include("base.header")
<div class="body-wrapper-inner">
    <div class="container-fluid">
        <form action="/updatingCategory/{{ $data['id'] }}" method="POST">
            @csrf

            <label>Category Name:</label><br>
            <input type="text" class="form-control" name="name" value="{{ $data['categories_name'] }}"><br><br>

            <label>Description:</label><br>
            <input type="text" name="description" class="form-control" value="{{ $data['category_description'] }}"></input>

            <button type="submit" class="btn btn-primary">Update Category</button>
        </form>
    </div>
</div>
@include("base.footer")