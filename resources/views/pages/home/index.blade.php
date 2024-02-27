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




    <!--Mobile Products-->
    @include('compononts.Home_Components.mobile_Products')
    <!--End of Mobile Products-->


    <!--Smart Watch-->
    @include('compononts.Home_Components.smartWatch')
    <!--End of Smart Watch-->


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
