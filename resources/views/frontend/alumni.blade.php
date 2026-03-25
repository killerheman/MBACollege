@extends('frontend.includes.master')
@section('style')
<style>
    .alumni-hero {
        background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('{{asset('frontend/img/slider/2.jpg')}}');
        background-size: cover;
        height: 250px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 15px;
        margin-bottom: 40px;
        color: #fff;
    }
    .alumni-box {
        background: #fff;
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 15px 40px rgba(0,0,0,0.06);
        text-align: center;
    }
    .alumni-icon {
        font-size: 60px;
        color: #3498db;
        margin-bottom: 25px;
    }
</style>
@endsection
@section('content')
<!--Breadcrumb Banner Area Start-->
@include('frontend.includes.breadcrumb', ['title' => 'ALUMNI'])
<!--End of Breadcrumb Banner Area-->

<!--About Page Area Start-->
<div class="about-page-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="alumni-hero">
                    <h2 class="text-white">Connecting Graduates, Empowering Success</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="alumni-box">
                    <div class="alumni-icon"><i class="fa fa-users"></i></div>
                    <h3>Alumni Association</h3>
                    <p class="lead mt-3">An Alumni Association has been formed by the Department of Commerce and Business Management during the Academic Year 2000-2001, to facilitate continuous interaction with alumni holding various important posts in Government/ Semi Government organizations.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of About Page Area-->
@endsection
