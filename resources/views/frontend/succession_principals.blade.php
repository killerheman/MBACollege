@extends('frontend.includes.master')
@section('style')
<style>
    .succession-table {
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
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
    .succession-table tr:last-child td {
        border-bottom: none;
    }
    .succession-table tr:hover {
        background-color: #f9f9f9;
        transition: background 0.3s;
    }
    .icon-box-small {
        width: 40px;
        height: 40px;
        background: #eef7ff;
        color: #3498db;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 15px;
        font-size: 18px;
    }
</style>
@endsection
@section('content')
<!--Breadcrumb Banner Area Start-->
@include('frontend.includes.breadcrumb', ['title' => 'Succession List of Directors'])
<!--End of Breadcrumb Banner Area-->

<!--About Page Area Start-->
<div class="about-page-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title-wrapper">
                    <div class="section-title">
                        <h3><i class="fa fa-history" aria-hidden="true"></i> SUCCESSION LIST OF DIRECTORS</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="table-responsive">
                    <table class="table succession-table">
                        <thead>
                            <tr>
                                <th style="width: 80px;">S.No</th>
                                <th>Name of the Director</th>
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
                            <tr>
                                <td>3</td>
                                <td>Prof. P.H. Reddy</td>
                                <td>16-01-1976</td>
                                <td>24-11-1977</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Prof. J. Satyanarayana</td>
                                <td>25-11-1977</td>
                                <td>31-07-1978</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Prof. J. Laxmikantham</td>
                                <td>01-08-1978</td>
                                <td>28-02-1981</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Prof. B. Brahamananda Rao</td>
                                <td>01-03-1981</td>
                                <td>21-08-1983</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Prof. E.G. Purushothamam</td>
                                <td>22-08-1983</td>
                                <td>10-10-1985</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Prof. B. Brahamananda Rao</td>
                                <td>11-10-1985</td>
                                <td>07-07-1987</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>Prof. P.H. Reddy</td>
                                <td>08-07-1987</td>
                                <td>23-01-1989</td>
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
