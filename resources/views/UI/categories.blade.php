@include("UI.base.header")

<div class="container my-5">
    <div class="row g-4">

        @foreach($data as $cat)
        <div class="col-md-4">
            <div class="card shadow-sm h-100 border-0 category-card">
                <div class="card-body">
                    <h5 class="card-title fw-bold text-primary">
                        {{ $cat['categories_name'] }}
                    </h5>

                    <p class="card-text text-muted mt-2">
                        {{ $cat['category_description'] }}
                    </p>
                </div>

                <div class="card-footer bg-transparent border-0">
                    <a href="#" class="btn btn-primary sm ">
                        View Products
                    </a>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>

@include("UI.base.footer")
