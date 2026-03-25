@extends('frontend.includes.master')
@section('style')
<style>
    .lab-card {
        background: #fff;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        margin-bottom: 30px;
        overflow: hidden;
        border: 1px solid #eee;
    }
    .lab-header {
        background: #3498db;
        color: #fff;
        padding: 20px;
        text-align: center;
    }
    .lab-body {
        padding: 30px;
    }
    .spec-list {
        list-style: none;
        padding: 0;
    }
    .spec-item {
        padding: 10px 0;
        border-bottom: 1px solid #f9f9f9;
        display: flex;
        justify-content: space-between;
        font-size: 14px;
    }
    .spec-label {
        font-weight: 600;
        color: #555;
    }
    .spec-value {
        color: #3498db;
    }
</style>
@endsection
@section('content')
<!--Breadcrumb Banner Area Start-->
@include('frontend.includes.breadcrumb', ['title' => 'COMPUTER LABS'])
<!--End of Breadcrumb Banner Area-->

<!--About Page Area Start-->
<div class="about-page-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title-wrapper">
                    <div class="section-title">
                        <h3><i class="fa fa-desktop"></i> Advanced Computing Facilities</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="lab-card">
                    <div class="lab-header">
                        <h4>University Department of Commerce and Business Administration</h4>
                    </div>
                    <div class="lab-body">
                        <ul class="spec-list">
                            <li class="spec-item"><span class="spec-label">Desktop Computers</span> <span class="spec-value">36 Units</span></li>
                            <li class="spec-item"><span class="spec-label">Processor</span> <span class="spec-value">Intel i-3</span></li>
                            <li class="spec-item"><span class="spec-label">RAM</span> <span class="spec-value">4 GB</span></li>
                            <li class="spec-item"><span class="spec-label">Storage</span> <span class="spec-value">500 GB HDD</span></li>
                            <li class="spec-item"><span class="spec-label">Software</span> <span class="spec-value">SPSS, Tally 9.0</span></li>
                            <li class="spec-item"><span class="spec-label">Surveillance</span> <span class="spec-value">CCTV Monitored</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="lab-card">
                    <div class="lab-header">
                        <h4>University Department of Commerce and Business Administration</h4>
                    </div>
                    <div class="lab-body">
                        <ul class="spec-list">
                            <li class="spec-item"><span class="spec-label">Desktop Computers</span> <span class="spec-value">36 Units</span></li>
                            <li class="spec-item"><span class="spec-label">Server</span> <span class="spec-value">Windows Server</span></li>
                            <li class="spec-item"><span class="spec-label">Connectivity</span> <span class="spec-value">LAN + UPS</span></li>
                            <li class="spec-item"><span class="spec-label">Database</span> <span class="spec-value">Oracle 9i, Prowess</span></li>
                            <li class="spec-item"><span class="spec-label">Software</span> <span class="spec-value">SPSS Ver 2.0</span></li>
                            <li class="spec-item"><span class="spec-label">Surveillance</span> <span class="spec-value">CCTV Monitored</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of About Page Area-->
@endsection
