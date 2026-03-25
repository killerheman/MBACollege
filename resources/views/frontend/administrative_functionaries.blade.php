@extends('frontend.includes.master')
@section('style')
<style>
    .functionary-card {
        border: none;
        border-radius: 12px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.08);
        transition: transform 0.3s;
        margin-bottom: 30px;
        background: #fff;
        padding: 20px;
        display: flex;
        align-items: center;
    }
    .functionary-card:hover {
        transform: translateY(-5px);
    }
    .functionary-img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        background: #f0f0f0;
        margin-right: 25px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 40px;
        color: #3498db;
    }
    .functionary-info h4 {
        margin-bottom: 5px;
        color: #333;
        font-weight: 700;
    }
    .functionary-info p {
        margin: 0;
        color: #666;
        font-size: 14px;
    }
    .designation {
        color: #3498db;
        font-weight: 600;
        text-transform: uppercase;
        font-size: 13px;
        display: block;
        margin-bottom: 5px;
    }
</style>
@endsection
@section('content')
<!--Breadcrumb Banner Area Start-->
@include('frontend.includes.breadcrumb', ['title' => 'ADMINISTRATIVE FUNCTIONARIES'])
<!--End of Breadcrumb Banner Area-->

<!--About Page Area Start-->
<div class="about-page-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title-wrapper">
                    <div class="section-title">
                        <h3><i class="fa fa-briefcase" aria-hidden="true"></i> ADMINISTRATIVE FUNCTIONARIES</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="functionary-card">
                    <div class="functionary-img">
                        <i class="fa fa-user"></i>
                    </div>
                    <div class="functionary-info">
                        <span class="designation">Director</span>
                        <h4>Prof. D. Chennappa</h4>
                        <p>University Department of Commerce and Business Administration, OU.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="functionary-card">
                    <div class="functionary-img">
                        <i class="fa fa-user"></i>
                    </div>
                    <div class="functionary-info">
                        <span class="designation">Vice-Director</span>
                        <h4>Dr. K. G. Chandrika</h4>
                        <p>University College of Commerce & Business Management, OU.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="functionary-card">
                    <div class="functionary-img">
                        <i class="fa fa-user"></i>
                    </div>
                    <div class="functionary-info">
                        <span class="designation">Head</span>
                        <h4>Prof. V. Appa Rao</h4>
                        <p>Department of Commerce, OU.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="functionary-card">
                    <div class="functionary-img">
                        <i class="fa fa-user"></i>
                    </div>
                    <div class="functionary-info">
                        <span class="designation">Head</span>
                        <h4>Prof. R. Nageswar Rao</h4>
                        <p>Department of Business Management, OU.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of About Page Area-->
@endsection
