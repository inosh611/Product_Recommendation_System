
@extends('layout.app')

@section('content')

    <!--Header Section with nav-->
    @include('compononts.Home_Components.nav')

     <!--End of Header Section with nav-->

    <!--Slide bar-->
    @include('compononts.Home_Components.slidebar')



                <section>
                <div class="container mt-5 pt-5">
                    <div class="row">
                    <div class="col-12 col-sm-7 col-md-6 m-auto">
                        <div class="card border-0 shadow">
                        <div class="card-body">
                            <svg class=" my-3" style="display:block; margin:auto" xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                            </svg>

                            <form action="{{ ('/reg') }}" method="POST">
                                @csrf
                            <input type="email" name="email" id="" class="form-control my-4 py-2" placeholder="User email" required/>
                            <input type="text" name="name" id="" class="form-control my-4 py-2" placeholder="User Name" required/>
                            <input type="password" name="password" id="" class="form-control my-4 py-2" placeholder="password" required/>
                            <input type="password" name="comfirmpassword" id="" class="form-control my-4 py-2" placeholder="comfirm pasword" required/>
                            @if(session('data'))
                                    <p style="color:brown">{{ session('data') }}</p>
                            @endif
                            <div class="text-center mt-3">
                                <button type="submit"  class="btn btn-primary">Register</button>
                                <a href="{{ ('login') }}" class="nav-link">Already have an account ?</a>
                            </div>
                            </form>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </section>

    <div class="demo" style="Margin-bottom: 100px"></div>
    <!--Footer-->
    @include('compononts.Home_Components.footer')
    <!--end of Footer section -->
@endsection


