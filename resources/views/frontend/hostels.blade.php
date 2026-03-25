@extends('frontend.includes.master')
@section('style')
<style>
    .hostel-card {
        background: #fff;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        margin-bottom: 30px;
        text-align: center;
        transition: transform 0.3s;
    }
    .hostel-card:hover {
        transform: scale(1.05);
    }
    .hostel-icon {
        font-size: 50px;
        color: #3498db;
        margin-bottom: 20px;
    }
    .admin-card {
        background: #f8fbff;
        padding: 20px;
        border-radius: 10px;
        border: 1px dashed #3498db;
        margin-top: 40px;
    }
</style>
@endsection
@section('content')
<!--Breadcrumb Banner Area Start-->
@include('frontend.includes.breadcrumb', ['title' => 'HOSTELS'])
<!--End of Breadcrumb Banner Area-->

<!--About Page Area Start-->
<div class="about-page-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mb-5">
                <div class="section-title-wrapper">
                    <div class="section-title">
                        <h3><i class="fa fa-bed"></i> Residential Facilities</h3>
                    </div>
                </div>
                <p class="lead">The college provides dedicated residential facilities for both boys and girls to ensure a comfortable learning environment.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="hostel-card">
                    <div class="hostel-icon"><i class="fa fa-male"></i></div>
                    <h4>Boys Hostel</h4>
                    <p>Secured and fully-equipped accommodation for male students.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="hostel-card">
                    <div class="hostel-icon"><i class="fa fa-female"></i></div>
                    <h4>Girls Hostel</h4>
                    <p>Safe and comfortable residential facility for female students.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="admin-card text-center">
                    <h5><i class="fa fa-user-secret"></i> Hostel Administration</h5>
                    <p class="mb-0 text-muted italic">Details about hostel administrators and contact persons will be updated periodically.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of About Page Area-->
@endsection
