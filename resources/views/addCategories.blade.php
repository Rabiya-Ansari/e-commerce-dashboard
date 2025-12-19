@include("base.header")

<div class="body-wrapper-inner">
    <div class="container-fluid">
        <form action="addCategories" method="POST">
            @csrf

            
            <label>Select Category:</label>
            <select class="form-control" onchange="setCategory(this.value)">
                <option value="">Select Category</option>
                <option value="Men">Men</option>
                <option value="Women">Women</option>
            </select>

            <br>

            
            <label>Category Name:</label>
            <input type="text" class="form-control" name="name" id="dropdown">

            <br>

            <label>Description:</label>
            <textarea name="description" class="form-control"></textarea>

            <br>

            <button type="submit" class="btn btn-primary">Add Category</button>
        </form>
    </div>
</div>

<script>
    function setCategory(value) {
        document.getElementById('dropdown').value = value;
    }
</script>

@include("base.footer")
