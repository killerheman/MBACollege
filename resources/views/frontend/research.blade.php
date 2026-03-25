@extends('frontend.includes.master')
@section('style')
<style>
    .research-card {
        background: #fff;
        padding: 35px;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        margin-bottom: 30px;
        border-left: 6px solid #3498db;
    }
    .research-card h4 {
        color: #3498db;
        font-weight: 700;
        margin-bottom: 15px;
        display: flex;
        align-items: center;
    }
    .research-card h4 i {
        margin-right: 15px;
        font-size: 24px;
    }
    .research-text {
        line-height: 1.8;
        color: #555;
    }
</style>
@endsection
@section('content')
<!--Breadcrumb Banner Area Start-->
@include('frontend.includes.breadcrumb', ['title' => 'RESEARCH'])
<!--End of Breadcrumb Banner Area-->

<!--About Page Area Start-->
<div class="about-page-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title-wrapper">
                    <div class="section-title">
                        <h3><i class="fa fa-flask"></i> Research Excellence</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="research-card">
                    <h4><i class="fa fa-line-chart"></i> University Department of Commerce and Business Administration</h4>
                    <p class="research-text">The University Department of Commerce and Business Administration played a major role in setting up the Institute of Public Enterprise, which has grown into a premier research and consultancy Institute working in the area of Public Enterprise. To meet the needs of academics, industry, society etc., the Department has been offering various courses and conducting Research in various fields and offering solutions to the contemporary problems of Indian economic and commerce environment.</p>
                </div>
                <div class="research-card">
                    <h4><i class="fa fa-briefcase"></i> Department of Business Management</h4>
                    <p class="research-text">The Department of Business Management has been striving for excellence in the field of Management. The performance of the Department in the area of research field is quiet impressive. To provide the best infrastructure in teaching and research, for the students to become academically and professionally excellent in order to be accepted by the best employment \ Research Entrepreneurial agencies to be placed in high levels of society in the service of the nation and the society.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of About Page Area-->
@endsection
