@extends('themes.toko-sakti.layouts.app')
@include('themes.toko-sakti.shared.slider')

@section('content')
<section class="breadcrumb-section pb-4 pb-md-4 pt-4 pt-md-4">
      <div class="container">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Products</li>
          </ol>
        </nav>
      </div>
    </section>
    <section class="main-content">
      <div class="container">
        <div class="row">
          <aside class="col-lg-3 col-md-4 mb-6 mb-md-0">
            @include('themes.toko-sakti.products.sidebar', ['categories' => $categories])
          </aside>
          <section class="col-lg-9 col-md-12 products">
            <div class="card mb-4 bg-light border-0 section-header">
              <div class="card-body p-5">
                <h2 class="mb-0">Tag: {{ $tag->name }}</h2>
              </div>
            </div>
            <div class="row">
              <div class="d-lg-flex justify-content-between align-items-center">
                <div class="mb-3 mb-lg-0">
                  &nbsp;
                </div>
                <div class="d-flex mt-2 mt-lg-0">
                  <div class="me-2 flex-grow-1">
                    <!-- select option -->
                    <select class="form-select">
                      <option selected="">Show: 50</option>
                      <option value="10">10</option>
                      <option value="20">20</option>
                      <option value="30">30</option>
                    </select>
                  </div>
                  <div>
                    <!-- select option -->
                    <select class="form-select">
                      <option selected="">Sort by: Featured</option>
                      <option value="Low to High">Price: Low to High</option>
                      <option value="High to Low"> Price: High to Low</option>
                      <option value="Release Date"> Release Date</option>
                      <option value="Avg. Rating"> Avg. Rating</option>
    
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              @forelse ($products as $product)
                @include('themes.toko-sakti.products.product_box', ['product' => $product])
              @empty
                <p>Product empty</p>
              @endforelse
              <div class="col-lg-3 col-6">
                <div class="card card-product card-body p-lg-4 p3">
                  <a href="#"><img src="{{ asset('themes/toko-sakti/assets/img/shop_02.jpg') }}" alt="" class="img-fluid"></a>
                  <h3 class="product-name mt-3">Product 2</h3>
                  <div class="rating">
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                  </div>
                  <div class="detail d-flex justify-content-between align-items-center mt-4">
                     <p class="price">IDR 200.000</p>
                     <a href="#" class="btn-cart"><i class="bx bx-cart-alt"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-6 mt-3 mt-lg-0">
                <div class="card card-product card-body p-lg-4 p3">
                  <a href="#"><img src="{{ asset('themes/toko-sakti/assets/img/shop_03.jpg') }}" alt="" class="img-fluid"></a>
                  <h3 class="product-name mt-3">Product 3</h3>
                  <div class="rating">
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                  </div>
                  <div class="detail d-flex justify-content-between align-items-center mt-4">
                     <p class="price">IDR 200.000</p>
                     <a href="#" class="btn-cart"><i class="bx bx-cart-alt"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-6 mt-3 mt-lg-0">
                <div class="card card-product card-body p-lg-4 p3">
                  <a href="#"><img src="{{ asset('themes/toko-sakti/assets/img/shop_04.jpg') }}" alt="" class="img-fluid"></a>
                  <h3 class="product-name mt-3">Product 4</h3>
                  <div class="rating">
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                  </div>
                  <div class="detail d-flex justify-content-between align-items-center mt-4">
                     <p class="price">IDR 200.000</p>
                     <a href="#" class="btn-cart"><i class="bx bx-cart-alt"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-6">
                <div class="card card-product card-body p-lg-4 p3">
                  <a href="#"><img src="{{ asset('themes/toko-sakti/assets/img/shop_01.jpg') }}" alt="" class="img-fluid"></a>
                  <h3 class="product-name mt-3">Product 1</h3>
                  <div class="rating">
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                  </div>
                  <div class="detail d-flex justify-content-between align-items-center mt-4">
                     <p class="price">IDR 200.000</p>
                     <a href="#" class="btn-cart"><i class="bx bx-cart-alt"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-6">
                <div class="card card-product card-body p-lg-4 p3">
                  <a href="#"><img src="{{ asset('themes/toko-sakti/assets/img/shop_02.jpg') }}" alt="" class="img-fluid"></a>
                  <h3 class="product-name mt-3">Product 2</h3>
                  <div class="rating">
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                  </div>
                  <div class="detail d-flex justify-content-between align-items-center mt-4">
                     <p class="price">IDR 200.000</p>
                     <a href="#" class="btn-cart"><i class="bx bx-cart-alt"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-6 mt-3 mt-lg-0">
                <div class="card card-product card-body p-lg-4 p3">
                  <a href="#"><img src="{{ asset('themes/toko-sakti/assets/img/shop_03.jpg') }}" alt="" class="img-fluid"></a>
                  <h3 class="product-name mt-3">Product 3</h3>
                  <div class="rating">
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                  </div>
                  <div class="detail d-flex justify-content-between align-items-center mt-4">
                     <p class="price">IDR 200.000</p>
                     <a href="#" class="btn-cart"><i class="bx bx-cart-alt"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-6 mt-3 mt-lg-0">
                <div class="card card-product card-body p-lg-4 p3">
                  <a href="#"><img src="{{ asset('themes/toko-sakti/assets/img/shop_04.jpg') }}" alt="" class="img-fluid"></a>
                  <h3 class="product-name mt-3">Product 4</h3>
                  <div class="rating">
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                  </div>
                  <div class="detail d-flex justify-content-between align-items-center mt-4">
                     <p class="price">IDR 200.000</p>
                     <a href="#" class="btn-cart"><i class="bx bx-cart-alt"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="row mt-5">
              <div class="col-12">
                {!! $products->links() !!}
              </div>
            </div>
          </section>
        </div>
      </div>
</section>
@endsection
