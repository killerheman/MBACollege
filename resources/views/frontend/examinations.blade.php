@extends('frontend.includes.master')
@section('style')
<style>
    .exam-rule-box {
        background: #f8fbff;
        border-left: 5px solid #3498db;
        padding: 25px;
        margin-bottom: 30px;
        border-radius: 0 10px 10px 0;
    }
    .exam-rule-box h4 {
        color: #2c3e50;
        font-weight: 700;
        margin-bottom: 15px;
    }
    .cbcs-badge {
        background: #3498db;
        color: #fff;
        padding: 5px 15px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 600;
        display: inline-block;
        margin-bottom: 15px;
    }
    .evaluation-card {
        background: #fff;
        border: 1px solid #eee;
        padding: 20px;
        border-radius: 10px;
        height: 100%;
        transition: box-shadow 0.3s;
    }
    .evaluation-card:hover {
        box-shadow: 0 5px 20px rgba(0,0,0,0.05);
    }
    .percent-indicator {
        font-size: 24px;
        font-weight: 800;
        color: #3498db;
    }
</style>
@endsection
@section('content')
<!--Breadcrumb Banner Area Start-->
@include('frontend.includes.breadcrumb', ['title' => 'EXAMINATIONS'])
<!--End of Breadcrumb Banner Area-->

<!--About Page Area Start-->
<div class="about-page-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title-wrapper">
                    <div class="section-title">
                        <h3><i class="fa fa-pencil-square-o"></i> EXAMINATION RULES & REGULATIONS</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="exam-rule-box">
                    <span class="cbcs-badge">CBCS SYSTEM</span>
                    <h4>RESTRUCTURED CHOICE BASED CREDIT SYSTEM</h4>
                    <p>These Regulations shall be called Osmania University regulations governing Post Graduate Programmes under the Choice Based Credit System (CBCS). Effective for students admitted in Campus and Constituent Colleges from Academic Year 2011-2012.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12 mb-4">
                <div class="evaluation-card">
                    <h4>Theory Evaluation</h4>
                    <hr>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <span>Internal Assessment</span>
                        <span class="percent-indicator">20%</span>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <span>Semester-end Exam</span>
                        <span class="percent-indicator">80%</span>
                    </div>
                    <p class="small text-muted italic">* Pass marks in each paper: 40%</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 mb-4">
                <div class="evaluation-card">
                    <h4>Practical Evaluation</h4>
                    <hr>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <span>Practical Exam</span>
                        <span class="percent-indicator">50%</span>
                    </div>
                    <p class="small text-muted mt-4">Conducted at the end of every semester for science faculty courses.</p>
                    <p class="small text-muted italic">* Pass marks for practical: 50%</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of About Page Area-->
@endsection
