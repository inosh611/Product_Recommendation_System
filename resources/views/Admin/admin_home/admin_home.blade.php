@extends('layout.app')

@section('content')

    <!--Header Section with nav-->
    @include('compononts.admin_Components.nav')

     <!--End of Header Section with nav-->

    <!--Slide bar-->
    @include('compononts.common_compononts.slidebar')

    <!--Company Service-->
    @include('compononts.common_compononts.company_services')
    <!--Company Service-->




    <!--Mobile Products-->
    <section id="mobile-products" class="product-store position-relative padding-large no-padding-top">
    <div class="container">
      <div class="row">
        <div class="display-header d-flex justify-content-between pb-3">
          <h2 class="display-7 text-dark text-uppercase">Mobile Products</h2>
          {{-- <div class="btn-right">
            <a href="shop.html" class="btn btn-medium btn-normal text-uppercase">Go to Shop</a>
          </div> --}}
        </div>
        <div class="swiper product-swiper">
          <div class="swiper-wrapper">
            @foreach($products as $key =>$data)
            <div class="swiper-slide">
                <div class="product-card position-relative">
                  <div class="image-holder">
                    <img src="{{ asset('../productImages/'.$data->tumbnail)}}" style="width:500px;height:425px" alt="product-item" class="img-fluid">
                  </div>
                  <div class="cart-concern position-absolute">
                    <div class="cart-button d-flex">
                      <a href="#" class="btn btn-medium btn-black">Add to Cart<svg class="cart-outline"><use xlink:href="#cart-outline"></use></svg></a>
                    </div>
                  </div>
                  <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                    <h3 class="card-title text-uppercase">
                      <a href="#">{{ $data->product_name}}</a>
                    </h3>
                    <span class="item-price text-primary">{{ $data->price}}</span>
                  </div>
                </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
    <div class="swiper-pagination position-absolute text-center"></div>
  </section>

    <!--End of Mobile Products-->


    <!--Smart Watch-->
    <section id="smart-watches" class="product-store padding-large position-relative">
        <div class="container">
          <div class="row">
            <div class="display-header d-flex justify-content-between pb-3">
              <h2 class="display-7 text-dark text-uppercase">Smart Watches</h2>
              {{-- <div class="btn-right">
                <a href="shop.html" class="btn btn-medium btn-normal text-uppercase">Go to Shop</a>
              </div> --}}
            </div>
            <div class="swiper product-watch-swiper">
              <div class="swiper-wrapper">

                @foreach($productswatch as $key =>$data)
                <div class="swiper-slide">
                  <div class="product-card position-relative">
                    <div class="image-holder">
                      <img src="{{ asset('../productImages/'.$data->tumbnail)}}"  style="width:500px;height:425px" alt="product-item" class="img-fluid">
                    </div>
                    <div class="cart-concern position-absolute">
                      <div class="cart-button d-flex">
                        <a href="#" class="btn btn-medium btn-black">Add to Cart<svg class="cart-outline"><use xlink:href="#cart-outline"></use></svg></a>
                      </div>
                    </div>
                    <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                      <h3 class="card-title text-uppercase">
                        <a href="#">{{ $data->product_name}}</a>
                      </h3>
                      <span class="item-price text-primary">{{ $data->price}}</span>
                    </div>
                  </div>
                </div>
                @endforeach


              </div>
            </div>
          </div>
        </div>
        <div class="swiper-pagination position-absolute text-center"></div>
      </section>

    <!--End of Smart Watch-->


    <!--New Year Sale-->
    @include('compononts.common_compononts.new_Year_Sale')
    <!--End of New Year Sale-->


    <!--Lates Posts-->
    @include('compononts.common_compononts.lates_post')
    <!--End of Lates Posts-->



    <!--Testimonials-->
    @include('compononts.common_compononts.testimonials')
    <!--End of Testimonials-->

    <!--Shop Our Insta-->
    @include('compononts.common_compononts.shop_Our_Insta')
     <!--End of Shop Our Insta-->


    <!--Footer-->
    @include('compononts.common_compononts.footer')
    <!--end of Footer section -->
@endsection
