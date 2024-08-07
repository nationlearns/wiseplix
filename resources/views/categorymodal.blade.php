<div class="modal fade" id="myModal" role="dialog" aria-labelledby="questionModalLabel" aria-hidden="true" style="margin-top:71px; overflow:fixed; position: fixed; font-family: system-ui; background-color: rgb(155 150 150 / 50%);" data-backdrop="static">

	<style>



	</style>
	
	
	<div class="modal-dialog ">
		<div class="modal-content">
			<div class="modal-header py-4">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close" id="closeButton">
					<span aria-hidden="true" class="text-white">×</span>
				</button>
			</div>
			<div class="modal-body" style="padding: 0.5rem;">
				<div class="heading my-4" style=" display:none;border: 1px solid; border-radius: 5px; padding: 10px 0px 0px 0px;" id="header-menu">
					<h5 class="text-center py-2" style="">
						Your Just a few steps Away to connect with your budget friendly professional.</h5>
				</div>
				<div class="heading" style="border: 1px solid; display:none; border-radius: 5px; padding: 10px 0px 0px 0px;" id="header1">
					<h6 style="text-align: center; font-size: large; ; margin-bottom: 10px;">
						Great News, You're almost there!</h6>
				</div>
				<input type="hidden" id="subcategoryId" value="" name="subcategoryId">

				<h3 style="" class="text-center text-black mb-3">Select the Services you want?</h3>
				<form id="titleForm" style="display:none; margin-top: 5px; ">
					<!-- The radio buttons will be inserted here -->

				</form>
				
				<p class="error" style="color:red" id="error"> </p>
				
				<h3 class="success" style="color:green" id="success"></h3>
				
				<h3 id="question-text" class="my-3 py-2" style="margin-left:10px;font-weight: 700;"></h3>
				
				<form id="options-form">
				</form>

				
				{{-- Additional Info Form --}}
				<form id="textForm" style="display: none;">
					<div class="form-group">
						<label for="exampleFormControlTextarea1" style="">Additional Info</label>
						<textarea class="form-control" style="height:calc(3rem + 0.75rem + 2px) !important" id="otherDetails" rows="10"></textarea>
					</div>
				</form>

				{{-- User Information Form --}}
				<form id="detail-form" style="display: none;">
					<h3 class="text-dark text-center">Please tell us your name:</h3>
					<div class="form-group">
						<label style="font-weight: 700;">Your Name</label>
						<input type="text" class="form-control" id="userName" aria-describedby="emailHelp" placeholder="Full Name" required>
					</div>
					<div class="form-group">
						<label style="font-weight: 700;">Email ID</label>
						<input type="email" class="form-control" id="userEmail" placeholder="Email" required>
					</div>
					<div class="form-group">
						<label style="font-weight: 700;">Gender</label>
						<select id="userGender" class="form-control">
							<option value="">Select Gender</option>
							<option value="male">Male</option>
							<option value="female">Female</option>
							<option value="other">Other</option>
						</select>
					</div>
				</form>

				<form class="pincode-form" id="pincodeForm" style="display: none;">
					<h3 class="text-dark text-center" style="">Where you want service?</h3>

					<div class="form-group">
						<input type="text" class="form-control" placeholder="Pin Code" id="numberInput" />
						<input type="hidden" id="location_id" value="">
						<input type="hidden" id="pinCodeValue" value="">
						<input type="hidden" id="disticName" value="">
						<input type="hidden" id="stateName" value="">
						<input type="hidden" id="areaName" value="">
						<ul class="category-list" id="addressSuggestions"></ul>
					</div>
				</form>


				<form id="verifyMobile" style="display: none;">
					<h3 class="text-dark text-center" style="">Your number is safe with us.</h3>
					<p class="text-dark fs-4 text-center" style="font-family:gorditamedium">Some matches prefer to provide quotes over the phone to get more details.</p>
					<div class="form-group">
						{{-- <label style="font-weight: 700;">Mobile Number</label> --}}
						<input type="text" class="form-control" id="mobileNumber" placeholder="Mobile Number">
					</div>
				</form>
				<div id="submitOtp" style="display: none;">
					<div class="container otp height-100 d-flex justify-content-center align-items-center">
						<div class="position-relative">
							<div class="card p-2 text-center" id="validateOtp">
								<h4 class="success" style="color:green" id="success1"></h4>
								<h6>Please enter the one time password <br> to verify your account</h6>
								<div><span>A code has been sent to</span>
									<small id="mobileNumber"></small>
								</div>
								<div id="otp" class="inputs d-flex flex-row justify-content-center mt-2">
									<input type="text" class="m-1 text-center form-control rounded numberonly bx-input" id="first" name="firstBx" maxlength="1" oninput='digitValidate(this)' onkeyup='tabChange(1)' required>
									<input type="text" class="m-1 text-center form-control rounded numberonly bx-input" id="second" name="secondBx" maxlength="1" oninput='digitValidate(this)' onkeyup='tabChange(2)' required>
									<input type="text" class="m-1 text-center form-control rounded numberonly bx-input" id="third" name="thirdBx" maxlength="1" oninput='digitValidate(this)' onkeyup='tabChange(3)' required>
									<input type="text" class="m-1 text-center form-control rounded numberonly bx-input" id="fourth" name="fourBx" maxlength="1" oninput='digitValidate(this)' onkeyup='tabChange(4)' required>
									<input type="text" class="m-1 text-center form-control rounded numberonly bx-input" id="fifth" name="fifthBx" maxlength="1" oninput='digitValidate(this)' onkeyup='tabChange(5)' required>
									<input type="text" class="m-1 text-center form-control rounded numberonly bx-input" id="sixth" name="sixBx" maxlength="1" oninput='digitValidate(this)' onkeyup='tabChange(6)' required>
								</div>
								<button class="btn" id="edit_mobile">Edit Mobile</button>
								<div class="mt-4" style="display:inline">
									<button type="button" class="modal-btn" id="ResendOtp">Resend OTP</button>
									<button class="modal-btn px-4 validate" id="validate">Validate</button>
								</div>
							</div>
							<div class="card p-2 text-center" style="display: none;" id="validateSuccess">
								<p style="color: green;">OTP Validate Success</p>
							</div>
							<div class="card p-2 text-center" style="display: none;" id="thanks">
								<h2>Your request is submitted successfully.</h2>
								<h6 class="media">our service partners will reach out to you soon kindly provide them your compelte requirement they will give you the best service in good budget</h6>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer" style="border-top: 0 none;">

					<button type="button" class="modal-btn" style="display:none " val="" id="selectTitle">Next</button>
					<button type="button" class="modal-btn" style="display:none" id="next-button">Next</button>
					<button type="button" class="modal-btn" style="display: none;" id="submit-button">Next</button>
					<button type="button" class="modal-btn" style="display: none;" id="submit-button2">Next</button>

					<div style="display:none" id="Verify-mobile">
						<button type="button" class="modal-btn" id="Verify-Otp">Verify</button>
					</div>
					<button type="button" class="modal-btn" style="display: none;" id="submitData1">Submit</button>
					<button type="button" class="modal-btn" style="display: none;" id="submitData">Submit</button>
					<button type="button" class="modal-btn" style="display: none;" id="submit-button1">Next</button>
				</div>
			</div>
		</div>
	</div>