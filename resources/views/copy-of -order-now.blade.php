@extends('layouts.app')

@section('content')

<style>
	.container {
		max-width: 1200px;
		margin: 0 auto;
		padding: 0 20px;

	}
    .title{
   background: -webkit-gradient(linear, left top, right bottom, color-stop(0, #5195A8), color-stop(100, #70EAFF));
   background: -moz-linear-gradient(top left, #5195A8 0%, #70EAFF 100%);
   background: -ms-linear-gradient(top left, #5195A8 0%, #70EAFF 100%);
   background: -o-linear-gradient(top left, #5195A8 0%, #70EAFF 100%);
   background: linear-gradient(to bottom right, #5195A8 0%, #70EAFF 100%);
   border-radius:5px 5px 0 0 ;
   padding: 20px;
   color: #f6f6f6;
 }


	.title1 {
		background-color: #007AFF;
		color: #fff;
		padding: 100px 0;
		margin-top: 100px;
		text-align: center;

	}

	.title h1 {
		font-size: 48px;
		font-weight: 700;
		margin-bottom: 20px;
	}

	.message {
		padding: 100px 0;
		text-align: center;
	}

	.message p {
		font-size: 36px;
		font-weight: 500;
		line-height: 1.4;
	}

	.contact-section {
		margin-bottom: 150px;


	}

	.contact-section .row {
		display: flex;
		justify-content: space-between;
	}

	@media (max-width: 768px) {
		.contact-section .row {
			flex-direction: column;
		}
	}

	.contact-section .row .col {
		flex: 1;
		padding: 0 20px;
	}

	@media (max-width: 768px) {
		.contact-section .row .col {
			margin-bottom: 40px;
		}
	}


	.file-input {
		display: none;
	}

	/* Style the custom file upload button */
	.custom-file-upload {
		display: inline-flex;
		align-items: center;
		cursor: pointer;
		background-color: #f1f1f1;
		border: 1px solid #ccc;
		border-radius: 4px;
		padding: 10px 15px;
		height: 80px;
		width: 100%;
		font-size: 16px;
		color: #333;
		transition: background-color 0.3s, border-color 0.3s;
		justify-content: center;

	}

	.custom-file-upload:hover {
		background-color: #e0e0e0;
		border-color: #999;
	}

	.custom-file-upload svg {
		margin-right: 10px;
		color: #555;
	}

	/* Style the text inside the custom button */
	.upload-text {
		font-weight: bold;
	}

	/* Optional: Adjust label size */
	.custom-file-upload span {
		display: inline-block;
	}

	 /* new code */
	 

	 /* end new code */
</style>

<!-- <section class="title1" id="contact-title">
      <div class="container">
        <h1>
          Order Now
        </h1>
      </div>
  </section> -->


<div class="el-breadcrumb-wrapper">
	<div class="container">
		<div class="el-breadcrmb-inner">
			<h1>Order Now</h1>
			<ul>
				<li>
					<a href="index.html">home</a>
				</li>
				<li>></li>
				<li>Order-Now</li>
			</ul>
		</div>
	</div>
</div>



<section class="contact-section global py-5" id="contact-section">
	<div class="container">
		<div class="row">

			<div class="col-lg-8 col-md-12 col-sm-12">
				<div class="card" style="box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.10); background-color: #ffffff;">
					<form id="placeOrder" action="/placeNewOrder" method="POST" enctype="multipart/form-data">
						@csrf
						<div class="contact-form p-4">
							<div class="row">


								<!-- @if(Auth::user() == '') -->
								<div class="col-md-4">
									<div class="form-group mb-4">
										<label for="email">Enter Your Name </label>
										<input type="name" name="name" style="background-color:#f1f1f1; height: 45px;"
											class="form-control" placeholder="Your Name *" required>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group mb-4">
										<label for="email">Enter Your Email </label>
										<input type="email" name="email" style="background-color:#f1f1f1; height: 45px;"
											class="form-control" placeholder="Your Email *" required>
									</div>
								</div>

								<div class="col-md-4">
									<div class="form-group mb-4">
										<label for="contact">Enter Your Contact Details </label>
										<input type="hidden" name="countrycode" id="hidden_country_code">
										<input type="tel" name="mobile" style="background-color:#f1f1f1; height: 45px;"
											class="form-control" placeholder="Phone*" id="phone_number_input" required>
										<input type="hidden" name="full_phone_number" id="hidden_phone_number">
									</div>
								</div>
								<!-- @endif -->
								<div class="col-md-12">
									<div class="form-group mb-4">
										<label for="enterTopic">Enter Topic</label>
										<input type="text" name="topic" id="enterTopic" class="form-control"
											style="background-color:#f1f1f1; height: 45px;" placeholder="Enter Topic"
											required>
									</div>
								</div>

								<div class="col-md-12">
									<div class="form-group mb-4">
										<label for="requirements">Specify Your Requirements Here</label>
										<textarea name="requirements" id="requirements" class="form-control"
											style="background-color:#f1f1f1; height: 100px;"
											placeholder="The more instructions you provide, the better our writers can craft a paper that meets your needs."
											required></textarea>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group mb-4">
										<label for="fileUpload" class="custom-file-upload">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
												viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
												stroke-linecap="round" stroke-linejoin="round"
												class="feather feather-upload">
												<path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
												<polyline points="17 8 12 3 7 8"></polyline>
												<line x1="12" y1="3" x2="12" y2="15"></line>
											</svg>
											<span class="upload-text">Drop file here or Click to upload</span>
										</label>
										<input type="file" name="fileUpload[]" id="fileUpload" class="file-input"
											multiple>
									</div>
								</div>
							</div>


							<div class="policy_agree">
								 
								<input type="checkbox" id="agreeCheckbox"> 
								<label for="">&nbsp;I agree with Privacy Policy and Terms &amp; Conditions (Recommended)</label> 
							</div>
							<div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
							    <label for="">&nbsp;I agree with Privacy Policy and Terms &amp; Conditions (Recommended)</label> 
                             </div>
							



							<button id="placeOrderBtn" class="place-order mt-2 btn btn-primary btn-lg"
								type="submit">Place Order</button>

						</div>
					</form>
				</div>

			</div>
			<div class="col-lg-4 col-md-12 col-sm-12">
				<div class="card py-3" style="box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.10); background-color: #fffff;">

					<div class="Estimate-price" style="text-align: center; position: relative; z-index: 1;">
						<a href="/"><img style="height: 100px"
								src="assets/images/all-instructor/WhatsApp Image 2024-09-02 at 17.47.12_e1ba1275.jpg"
								alt="Logo"></a>


					</div>
				</div>
				<div class="card my-3 p-2"
					style="box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.10); background-color: #f8f9fa;">
					<h6 class="text-center" style="background-color: #5c577a; color: aliceblue; padding: 10px;">Offer
					</h6>
					<div id="orderSummary" style="padding: 10px; background-color: ##f8f9fa;">
                    <div class="Yorder">
    <table>
      <tr>
        <th colspan="2">Your order</th>
      </tr>
      <tr>
        <td>Product Name x 2(Qty)</td>
        <td>$88.00</td>
      </tr>
      <tr>
        <td>Subtotal</td>
        <td>$88.00</td>
      </tr>
      <tr>
        <td>Shipping</td>
        <td>Free shipping</td>
      </tr>
    </table>
	<br>
    
    <button type="button">Place Order</button>
  </div><!-- Yorder -->

					</div>
				</div>
				<div>
					<div class="cristmas"
						style="box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.10); background-color: #ffffff;">
						<a href="#">


							<img src="assets/images/all-instructor/ui-ux.png" width="100%" height="100%"
								alt="login-popup" class="order-web">
						</a>
					</div>
				</div>
			</div>


		</div>
	</div>
</section>
 
@endsection