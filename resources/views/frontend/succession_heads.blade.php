@extends('frontend.includes.master')
@section('style')
<style>
    .succession-table {
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        margin-bottom: 30px;
    }
    .succession-table thead {
        background: linear-gradient(45deg, #3498db, #2980b9);
        color: #fff;
    }
    .succession-table th {
        border: none;
        padding: 15px;
        font-weight: 600;
        text-transform: uppercase;
    }
    .succession-table td {
        padding: 15px;
        vertical-align: middle;
        border-bottom: 1px solid #eee;
    }
    .dept-title {
        color: #3498db;
        border-bottom: 2px solid #3498db;
        display: inline-block;
        padding-bottom: 5px;
        margin-bottom: 20px;
        font-weight: 700;
    }
</style>
@endsection
@section('content')
<!--Breadcrumb Banner Area Start-->
@include('frontend.includes.breadcrumb', ['title' => 'SUCCESSION LIST OF HEADS'])
<!--End of Breadcrumb Banner Area-->

<!--About Page Area Start-->
<div class="about-page-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title-wrapper">
                    <div class="section-title">
                        <h3><i class="fa fa-users" aria-hidden="true"></i> SUCCESSION LIST OF HEADS</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <h4 class="dept-title">University Department of Commerce and Business Administration</h4>
                <div class="table-responsive">
                    <table class="table succession-table">
                        <thead>
                            <tr>
                                <th style="width: 80px;">S.No</th>
                                <th>Name of the Head</th>
                                <th>From</th>
                                <th>To</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Prof. S.S. Rangachar</td>
                                <td>01-08-1971</td>
                                <td>11-10-1972</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Prof. J. Satyanarayana</td>
                                <td>12-10-1972</td>
                                <td>15-01-1976</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h4 class="dept-title">University Department of Commerce and Business Administration</h4>
                <div class="table-responsive">
                    <table class="table succession-table">
                        <thead>
                            <tr>
                                <th style="width: 80px;">S.No</th>
                                <th>Name of the Head</th>
                                <th>From</th>
                                <th>To</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Prof. J. Satyanarayana</td>
                                <td>01-11-1971</td>
                                <td>15-01-1976</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Prof. B. Brahamananda Rao</td>
                                <td>16-01-1976</td>
                                <td>24-11-1977</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of About Page Area-->
@endsection
