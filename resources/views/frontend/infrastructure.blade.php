@extends('frontend.includes.master')
@section('style')
<style>
    .amenity-detail-box {
        background: #fff;
        padding: 40px;
        border-radius: 20px;
        box-shadow: 0 10px 40px rgba(0,0,0,0.05);
        border-left: 6px solid #3498db;
    }
    .amenity-icon-large {
        font-size: 50px;
        color: #3498db;
        margin-bottom: 25px;
        display: block;
    }
    .feature-list {
        list-style: none;
        padding: 0;
        margin-top: 25px;
    }
    .feature-item {
        padding: 10px 0;
        border-bottom: 1px dashed #eee;
        display: flex;
        align-items: center;
    }
    .feature-item i {
        color: #3498db;
        margin-right: 15px;
    }
</style>
@endsection
@section('content')
<!--Breadcrumb Banner Area Start-->
@include('frontend.includes.breadcrumb', ['title' => 'INFRASTRUCTURE'])
<!--End of Breadcrumb Banner Area-->

<!--About Page Area Start-->
<div class="about-page-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title-wrapper">
                    <div class="section-title">
                        <h3><i class="fa fa-building-o" aria-hidden="true"></i> Infrastructure</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="amenity-detail-box">
                    <i class="fa fa-university amenity-icon-large"></i>
                    <p class="lead">Provision of Internet facilities through Wi-Fi round the clock, use of Audio-visual aids in the class rooms.</p>
                    <p>To expose the faculty, students and researchers to modern teaching and e-learning process, the Department provides Information Technology laboratory with Internet, Fax, Web Camera, Digital Camera, LCD Projector, Over Head Projector, Copying facilities etc. There is also a seminar hall fully furnished and air-conditioned, catering to the academic requirements of the Department.</p>
                    
                    <ul class="feature-list">
                        <li class="feature-item"><i class="fa fa-check-circle"></i> Modern Audio-visual Aids like LCD projectors</li>
                        <li class="feature-item"><i class="fa fa-check-circle"></i> Document Cameras used for classroom teaching</li>
                        <li class="feature-item"><i class="fa fa-check-circle"></i> Public addressing system & cordless mikes</li>
                        <li class="feature-item"><i class="fa fa-check-circle"></i> Fully Air-Conditioned Seminar Hall</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of About Page Area-->
@endsection
