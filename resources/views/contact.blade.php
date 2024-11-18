@extends('layouts.app')

@section('content')
<!-- Breadcrumb End -->
<div class="el-breadcrumb-wrapper">
    <div class="container">
        <div class="el-breadcrmb-inner">
            <h1>contact us</h1>
            <ul>
                <li>
                    <a href="index.html">home</a>
                </li>
                <li>></li>
                <li>contact us</li>
            </ul>
        </div>
    </div>
</div>
<!-- Breadcrumb Start -->

<!-- Contact Page -->
<div class="el-contact-page-wrapper">
    <div class="container">
        <div class="el-contact-page-box title-box">
            <div class="section-color-layer"></div>
            <div class="el-contact-map">
                <h2 class="el-main-heading">Get in Touch with Us</h2>
                <h3 class="location-header">
                   Contact Details
                
                </h3>
                <p><b>Address:</b> 410, Ashoka palace, Shobhagpura, Udaipur (Raj.) 313001</p>
                <p><b>Phone:</b> +(1) 512772194 </p>
                <p><b>Phone:</b> +(91) 8693085077 </p>
            </div>
            <div class="el-contact-page-info">
                <h2 class="el-main-heading">Leave a Message</h2>
                <form method="POST" action="{{ route('contact.store') }}">
                    @csrf
                    <div class="form-row">
                        <!-- First Name Input -->
                        <div class="form-group">
                            <input type="text" name="name" value="{{ old('name') }}" placeholder="First Name" required>
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Last Name Input -->
                        <div class="form-group">
                            <input type="text" name="last_name" value="{{ old('last_name') }}" placeholder="Last Name"
                                required>
                            @error('last_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Email Input -->
                        <div class="form-group">
                            <input type="email" name="email" value="{{ old('email') }}" placeholder="Your Email"
                                required>
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Mobile Input -->
                        <div class="form-group">
                            <input type="number" name="mobile" value="{{ old('mobile') }}" placeholder="Mobile"
                                required>
                            @error('mobile')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Message Textarea -->
                        <div class="form-group full-width">
                            <textarea name="message" placeholder="Message" required>{{ old('message') }}</textarea>
                            @error('message')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <div class="form-group full-width">
                            <button type="submit" class="el-btn">Send Message</button>
                        </div>
                    </div>
                </form>

                <!-- Success Message -->
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
            </div>

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

<!-- Newsletter Section Start -->
<div class="el-newsletter-wrapper">
    <div class="container">
        <div class="el-newsltr-flex">
            <div class="el-nesltr-left">
                <h4>Subscribe Our Newsletter</h4>
                <p class="el-para">Subscribed to our newsletter to get regular update about
                    our Services. <br>
                    Get latest news in your inbox.</p>
            </div>
            <div class="el-nesltr-right">
                <div class="el-input-field">
                    <input type="text" placeholder="Your email here...">
                    <a href="javascript:;" class="el-btn">search</a>
                </div>
            </div>
        </div>
    </div>
</div>
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