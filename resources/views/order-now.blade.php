@extends('layouts.app')

@section('content')

 
 <style>
	.register {
  background: linear-gradient(to right, #3931af 0, #00c6ff 100%);
  margin-top: 3%;
  padding: 3%;
  overflow: hidden;
  margin-bottom: 20%;
}
.register .register-form {
  padding: 5%;
  margin-top: 1%;
  
}
@media (max-width: 991px) {
  .register .register-form {
    margin-top: 16%;
  }
}
@media (max-width: 667px) {
  .register .register-form {
    margin-top: 20%;
  }
}
.register .nav-tabs {
  margin-top: 3%;
  border: none;
  background: #0062cc;
  border-radius: 1.5rem;
  width: 28%;
  float: right;
}
@media (max-width: 991px) {
  .register .nav-tabs {
    width: 33%;
    margin-top: 8%;
  }
}
.register .nav-tabs .nav-link {
  padding: 2%;
  height: 34px;
  font-weight: 600;
  color: #fff;
  border-top-right-radius: 1.5rem;
  border-bottom-right-radius: 1.5rem;
}
.register .nav-tabs .nav-link:hover {
  border: none;
}
.register .nav-tabs .nav-link.active {
  width: 100px;
  color: #0062cc;
  border: 2px solid #0062cc;
  border-top-left-radius: 1.5rem;
  border-bottom-left-radius: 1.5rem;
}

.register-left {
  text-align: center;
  color: #fff;
  margin-top: 4%;
}
.register-left input {
  border: none;
  border-radius: 1.5rem;
  padding: 2%;
  width: 60%;
  background: #f8f9fa;
  font-weight: bold;
  color: #383d41;
  margin-top: 30%;
  margin-bottom: 3%;
  cursor: pointer;
}
.register-left img {
  margin-top: -20%;
  margin-bottom: 5%;
  width: 100%;
  -webkit-animation: mover 1s infinite alternate;
          animation: mover 1s infinite alternate;
}
.register-left p {
  font-weight: lighter;
  padding: 12%;
  margin-top: -9%;
}

.register-right {
  background: #f8f9fa;
  border-top-left-radius: 10% 50%;
  border-bottom-left-radius: 10% 50%;
}

@-webkit-keyframes mover {
  0% {
    transform: translateY(0);
  }
  100% {
    transform: translateY(-20px);
  }
}
@keyframes mover {
  0% {
    transform: translateY(0);
  }
  100% {
    transform: translateY(-20px);
  }
}
.btnRegister {
  float: right;
  margin-top: 3%;
  border: none;
  border-radius: 1.5rem;
  padding: 2%;
  background: #0062cc;
  color: #fff;
  font-weight: 600;
  width: 80%;
  cursor: pointer;
}

.register-heading {
  text-align: center;
  margin-top: 2%;
  margin-bottom: -4%;
  color: #495057;
}
@media (max-width: 991px) {
  .register-heading {
    font-size: 1.5rem;
  }
}

.box2 {
    height: 13px !important;
    background-color: var(--input-bg-color);
    border-radius: 10px;
    border: none !important;
    color: var(--text-color) !important;
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
		height: 60px;
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
 </style>
   
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

<div class="user-ragistration">
	<div class="container register">
                <div class="row">
                    <div class="col-md-4 register-left">
				 
                        <h3>Welcome</h3>
                        <p>Order-Now</p>
                        	<img src="assets\images\all-instructor\math-science-concept-with-school-lesson-items-retro-cartoon-style.png"
								alt="Logo">
                    </div>
                    <div class="col-md-8 register-right">
                       
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Order-Now</h3>
                                <div class="row register-form ">

                                    <div class="col-md-12">
									<form id="placeOrder" action="/placeNewOrder" method="POST" enctype="multipart/form-data">						
							@csrf
							<div class="contact-form ">
								<div class="row">
									 
								 	@if(Auth::user() == '')
									 <div class="col-md-6">
											<div class="form-group py-1">
												<label for="name">First Name</label>
												<input type="text" name="name" style="background-color:white; height: 45px;" class="form-control border border-secondary " placeholder="First Name" required >
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group py-1">
												<label for="name">Last Name</label> 
												<input type="text" name="last_name" style="background-color:white; height: 45px;" class="form-control border border-secondary" placeholder="Last Name" required >
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group py-1">
												<label for="email">Email </label>
												<input type="email" name="email" style="background-color:white; height: 45px;" class="form-control border border-secondary" placeholder="Your Email" required>
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group py-1">
												<label for="contact">Contact </label>
											 
												<input type="tel" name="mobile" style="background-color:white; height: 30px;" class="form-control border border-secondary" placeholder="Your Phone" id="phone_number_input" required>
											 
											</div>
										</div>									
									@endif

									 
									<div class="col-md-12">
										<div class="form-group py-1">
											<label for="requirements">Your Message</label>
											<textarea name="requirements" id="requirements" class="form-control border border-secondary" style="background-color:white; height: 100px;" placeholder="Your Message" required></textarea>
										</div>
									</div>
									<div class="col-md-12 py-3">
										<div class="form-group">
											<label for="fileUpload" class="custom-file-upload border border-secondary">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-upload">
													<path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
													<polyline points="17 8 12 3 7 8"></polyline>
													<line x1="12" y1="3" x2="12" y2="15"></line>
												</svg>
												<span class="upload-text">Drop file here or Click to upload</span>
											</label>
											<input type="file" name="fileUpload[]" id="fileUpload" class="file-input" multiple>
										</div>
									</div>
									
									<script>
										document.getElementById('fileUpload').addEventListener('change', function(event) {
											var fileName = event.target.files[0] ? event.target.files[0].name : 'Drop file here or Click to upload';
											document.querySelector('.upload-text').textContent = fileName;
										});
									</script>

									
								</div>

								 
								<div class="policy_agree py-1">
									<input class="box2" type="checkbox" id="agreeCheckbox" required="">&nbsp;I agree with Privacy Policy and Terms &amp;
									Conditions (Recommended)
								</div>
								 
								<button class="btnRegister" type="submit">Place Order</button>
								<!-- <a href="/info@GlobalAssignmentSupport.com"><button class="btnRegister" type="submit">Place Order</button></a> -->
								
							</div>
					         	   </form>
                                    </div>
                                 
                                </div>
                            </div>

                          
                        </div>
                    <!-- </div> -->


                </div>
              </div>
          </div>
 
 

 
@endsection