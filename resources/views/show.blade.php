@extends('layouts.app')
@section('content')
<!-- Breadcrumb End -->
<div class="el-breadcrumb-wrapper">
    <div class="container">
        <div class="el-breadcrmb-inner">
            <h1>contact Data</h1>
            <ul>
                <li>
                    <a href="index.html">home</a>
                </li>
                <li>></li>
                <li>contact Data</li>
            </ul>
        </div>
    </div>
</div>
<!-- Breadcrumb Start -->

<!-- Contact Page -->
<div class="el-contact-page-wrapper">
    <div class="container">
        <div class="el-contact-page-box title-box">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">SR No</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">Email</th>
                        <th scope="col">Message</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contact_data as $data)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th> <!-- This will increment SR No dynamically -->
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->last_name }}</td>
                            <td>{{ $data->mobile }}</td>
                            <td>{{ $data->email }}</td>
                            <td>{{ $data->message }}</td>
                        </tr>
                    @endforeach
                </tbody>

            </table>

        </div>
    </div>
</div>

<style>
    .el-contact-page-wrapper {
        padding: 50px 0;
        background-color: #f9f9f9;
    }

    .title-box {
        position: relative;
        padding: 20px;
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    }

    .section-color-layer {
        position: absolute;
        top: 0;
        left: 0;
        width: 5px;
        height: 100%;
        background-color: #007bff;
        border-radius: 10px 0 0 10px;
    }

    .el-main-heading {
        font-weight: 500;
        font-size: 30px;
        color: #333;
        margin-bottom: 20px;
    }

    .location-header {
        font-weight: 500;
        font-size: 20px;
        color: #333;
        margin-bottom: 15px;
        display: flex;
        align-items: center;
    }

    .location-header img {
        margin-left: 10px;
    }

    p {
        font-size: 16px;
        color: #555;
        margin-bottom: 10px;
    }

    .el-contact-map p {
        margin-bottom: 0.5rem;
    }

    .form-row {
        display: flex;
        flex-wrap: wrap;
        gap: 15px;
    }

    .form-group {
        flex: 1;
        min-width: 220px;
    }

    .full-width {
        flex: 1 0 100%;
    }

    input,
    textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
    }

    textarea {
        height: 120px;
        resize: vertical;
    }

    .el-btn {
        display: inline-block;
        padding: 10px 20px;
        font-size: 16px;
        color: #fff;
        background-color: #007bff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        text-align: center;
        text-decoration: none;
        transition: background-color 0.3s;
    }

    .el-btn:hover {
        background-color: #0056b3;
    }
</style>

<!-- Contact Page -->


<style>
    .el-contact-page-wrapper {
        padding: 50px 0;
    }

    .title-box {
        position: relative;
        padding: 20px;
        background-color: #f8f9fa;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        height: 100%;
    }

    .section-color-layer {
        position: absolute;
        top: 0;
        left: 0;
        width: 5px;
        height: 100%;
        background-color: #007bff;
        border-radius: 10px 0 0 10px;
    }

    h2 {
        font-weight: 500;
        font-size: 30px;
        color: black;
    }

    h3 {
        font-weight: 500;
        font-size: 20px;
        color: black;
    }

    p {
        margin-bottom: 0.5rem;
    }

    .el-contact-map img {
        margin-left: 10px;
        vertical-align: middle;
    }

    .el-contact-map p {
        font-size: 16px;
        color: #555;
    }
</style>
@endsection