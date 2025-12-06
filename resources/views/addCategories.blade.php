@include("base.header")
<div class="body-wrapper-inner">
    <div class="container-fluid">
        <form action="addCategories" method="POST">
            @csrf

            <label>Category Name:</label><br>
            <input type="text" class="form-control" name="name"><br><br>

            <label>Description:</label><br>
            <textarea name="description" class="form-control"></textarea>

            <button type="submit" class="btn btn-primary">Add Category</button>
        </form>
    </div>
</div>
@include("base.footer")