@extends('layout.app')

@section('content')

    <!--Header Section with nav-->
    @include('compononts.Home_Components.nav')

     <!--End of Header Section with nav-->

    <!--Slide bar-->
    @include('compononts.Home_Components.slidebar')

    <!--Company Service-->
    @include('compononts.Home_Components.company_services')
    <!--Company Service-->

    <!--Table Section-->
    <div class="col-lg-12 col-md-0">
        <div>
          <table class="table table-striped" style="margin-bottom:300px" >
              <thead>
              <tr>
                  <th scope="col">#</th>
                  <th scope="col">Title</th>
                  <th scope="col">Ststus</th>
                  <th scope="col">Actione</th>
              </tr>
              </thead>
              <tbody>
                  <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td><a href="" class="btn btn-primary">Buy</a></td>
                  </tr>
                  <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td><a href="" class="btn btn-primary">Buy</a></td>
                  </tr>
                  <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td><a href="" class="btn btn-primary">Buy</a></td>
                  </tr>
                  <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td><a href="" class="btn btn-primary">Buy</a></td>
                  </tr>
              </tbody>
          </table>
      </div>

    </div>

    <!--End Table Section-->
























    <!--New Year Sale-->
    @include('compononts.Home_Components.new_Year_Sale')
    <!--End of New Year Sale-->


    <!--Lates Posts-->
    @include('compononts.Home_Components.lates_post')
    <!--End of Lates Posts-->



    <!--Testimonials-->
    @include('compononts.Home_Components.testimonials')
    <!--End of Testimonials-->

    <!--Shop Our Insta-->
    @include('compononts.Home_Components.shop_Our_Insta')
     <!--End of Shop Our Insta-->


    <!--Footer-->
    @include('compononts.Home_Components.footer')
    <!--end of Footer section -->
@endsection
