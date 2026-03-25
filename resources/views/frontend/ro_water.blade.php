@extends('frontend.includes.master')
@section('style')
<style>
    .ro-box {
        background: #fff;
        padding: 50px;
        border-radius: 20px;
        box-shadow: 0 20px 50px rgba(0,0,0,0.05);
        text-align: center;
        border-bottom: 6px solid #2ecc71;
    }
    .ro-icon {
        font-size: 80px;
        color: #3498db;
        margin-bottom: 30px;
    }
    .benefit-tag {
        display: inline-block;
        background: #eef9f1;
        color: #2ecc71;
        padding: 8px 15px;
        border-radius: 20px;
        margin: 5px;
        font-weight: 600;
        font-size: 13px;
    }
</style>
@endsection
@section('content')
<!--Breadcrumb Banner Area Start-->
@include('frontend.includes.breadcrumb', ['title' => 'REVERSE OSMOSIS (RO) '])
<!--End of Breadcrumb Banner Area-->

<!--About Page Area Start-->
<div class="about-page-area section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="ro-box">
                    <div class="ro-icon"><i class="fa fa-tint"></i></div>
                    <h3>Purified RO Drinking Water</h3>
                    <p class="lead mt-4">To ensure the health and well-being of our community, a state-of-the-art RO Water plant is installed in the college complex, providing pure drinking water facility.</p>
                    <div class="mt-4">
                        <span class="benefit-tag"><i class="fa fa-shield"></i> Prevents Waterborne Diseases</span>
                        <span class="benefit-tag"><i class="fa fa-heartbeat"></i> Improves Metabolism</span>
                        <span class="benefit-tag"><i class="fa fa-check"></i> Pure & Safe</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of About Page Area-->
@endsection
