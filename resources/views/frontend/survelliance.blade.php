@extends('frontend.includes.master')
@section('style')
<style>
    .security-box {
        background: #fff;
        padding: 50px;
        border-radius: 20px;
        box-shadow: 0 20px 50px rgba(0,0,0,0.05);
        text-align: center;
        border: 1px solid #eee;
    }
    .security-icon {
        font-size: 80px;
        color: #e74c3c;
        margin-bottom: 30px;
    }
</style>
@endsection
@section('content')
<!--Breadcrumb Banner Area Start-->
@include('frontend.includes.breadcrumb', ['title' => '24X7 SURVEILLANCE'])
<!--End of Breadcrumb Banner Area-->

<!--About Page Area Start-->
<div class="about-page-area section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="security-box">
                    <div class="security-icon"><i class="fa fa-video-camera"></i></div>
                    <h3>24/7 Security & Surveillance</h3>
                    <p class="lead mt-4">CC TV cameras are installed throughout the college premises to provide a safe and secure campus, ensuring the highest standards of discipline and safety for both staff and students.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of About Page Area-->
@endsection
