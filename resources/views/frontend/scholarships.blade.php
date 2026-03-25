@extends('frontend.includes.master')
@section('style')
<style>
    .scholarship-box {
        background: #fff;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        border-top: 4px solid #3498db;
        margin-bottom: 20px;
        display: flex;
        align-items: center;
    }
    .sch-icon {
        font-size: 30px;
        color: #3498db;
        margin-right: 20px;
        min-width: 50px;
        text-align: center;
    }
    .sch-text {
        font-weight: 600;
        color: #444;
        font-size: 16px;
    }
</style>
@endsection
@section('content')
<!--Breadcrumb Banner Area Start-->
@include('frontend.includes.breadcrumb', ['title' => 'SCHOLARSHIPS / FELLOWSHIPS'])
<!--End of Breadcrumb Banner Area-->

<!--About Page Area Start-->
<div class="about-page-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title-wrapper">
                    <div class="section-title">
                        <h3><i class="fa fa-graduation-cap"></i> Scholarships & Fellowships</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="scholarship-box">
                    <div class="sch-icon"><i class="fa fa-university"></i></div>
                    <div class="sch-text">E-pass Scholarships for SC, ST, BC & EBC Students (Telangana State)</div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="scholarship-box">
                    <div class="sch-icon"><i class="fa fa-star"></i></div>
                    <div class="sch-text">Pratibha Scholarships for Meritorious Students</div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="scholarship-box">
                    <div class="sch-icon"><i class="fa fa-wheelchair"></i></div>
                    <div class="sch-text">Central Govt. Scholarships for Physically Challenged Students</div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="scholarship-box">
                    <div class="sch-icon"><i class="fa fa-search"></i></div>
                    <div class="sch-text">UGC & ICSSR Fellowships for Research Scholars</div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of About Page Area-->
@endsection
