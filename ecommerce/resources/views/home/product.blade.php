<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- product section -->
<section class="product_section py-5 bg-light">
   <div class="container">
      <div class="heading_container text-center mb-4">
         <h2 class="fw-bold">
            Our <span class="text-primary">Products</span>
         </h2>
      </div>

      <!-- Search Form -->
      <div class="text-center mb-5">
         <form action="{{ url('product_search') }}" method="GET" class="d-flex justify-content-center gap-2">
            @csrf
            <input type="text" name="search" class="form-control w-50" placeholder="Search here">
            <button type="submit" class="btn btn-primary w-50">Search</button>
         </form>
      </div>

      <!-- Session Message -->
      @if(session()->has('message'))
         <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session()->get('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>
      @endif

      <!-- Product Cards -->
      <div class="row g-4">
         @foreach($product as $products)
         <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card h-100 shadow-sm">
               <img src="product/{{$products->image}}" class="card-img-top" alt="{{$products->title}}">
               <div class="card-body d-flex flex-column">
                  <h5 class="card-title">{{$products->title}}</h5>
                  
                  @if($products->discount_price != null)
                     <p class="text-danger fw-bold mb-1">Discount: ${{$products->discount_price}}</p>
                     <p class="text-muted text-decoration-line-through">Price: ${{$products->price}}</p>
                  @else
                     <p class="text-primary fw-bold">Price: ${{$products->price}}</p>
                  @endif

                  <div class="mt-auto">
                     <a href="{{ url('product_details', $products->id) }}" class="btn btn-outline-info btn-sm w-100 mb-2">Product Details</a>

                     <form action="{{ url('add_cart', $products->id) }}" method="POST" class="d-flex flex-column gap-2">
                        @csrf
                        <input type="number" name="quantity" value="1" min="1" class="form-control" placeholder="Quantity">
                        <button type="submit" class="btn btn-success btn-sm">Add to Cart</button>
                     </form>
                  </div>
               </div>
            </div>
         </div>
         @endforeach
      </div>

      <!-- Pagination -->
      <div class="d-flex justify-content-center mt-5">
         {!! $product->withQueryString()->links('pagination::bootstrap-5') !!}
      </div>
   </div>
</section>
