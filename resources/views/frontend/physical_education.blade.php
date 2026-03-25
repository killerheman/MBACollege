@extends('frontend.includes.master')
@section('style')
<style>
    .sport-card {
        background: #fff;
        padding: 25px;
        border-radius: 12px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        margin-bottom: 30px;
        height: 100%;
    }
    .sport-card h4 {
        color: #3498db;
        font-weight: 700;
        margin-bottom: 15px;
        border-bottom: 2px solid #eef7ff;
        padding-bottom: 10px;
    }
    .sport-item {
        margin-bottom: 8px;
        display: flex;
        align-items: center;
    }
    .sport-item i {
        color: #3498db;
        margin-right: 12px;
        font-size: 14px;
    }
</style>
@endsection
@section('content')
<!--Breadcrumb Banner Area Start-->
@include('frontend.includes.breadcrumb', ['title' => 'DEPARTMENT OF PHYSICAL EDUCATION'])
<!--End of Breadcrumb Banner Area-->

<!--About Page Area Start-->
<div class="about-page-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title-wrapper">
                    <div class="section-title">
                        <h3><i class="fa fa-trophy"></i> Sports & Physical Education</h3>
                    </div>
                </div>
                <p class="mb-5 lead">The Department of Physical Education is providing facilities for indoor and outdoor games to college students, selecting talented players to represent the college at inter-university levels.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="sport-card">
                    <h4><i class="fa fa-home"></i> Indoor Games</h4>
                    <div class="sport-item"><i class="fa fa-check"></i> Table Tennis</div>
                    <div class="sport-item"><i class="fa fa-check"></i> Carroms</div>
                    <div class="sport-item"><i class="fa fa-check"></i> Chess</div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="sport-card">
                    <h4><i class="fa fa-sun-o"></i> Outdoor Games</h4>
                    <div class="sport-item"><i class="fa fa-check"></i> Cricket</div>
                    <div class="sport-item"><i class="fa fa-check"></i> Athletics</div>
                    <div class="sport-item"><i class="fa fa-check"></i> Volley Ball</div>
                    <div class="sport-item"><i class="fa fa-check"></i> Badminton</div>
                    <div class="sport-item"><i class="fa fa-check"></i> Kho-kho</div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of About Page Area-->
@endsection
