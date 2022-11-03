<!DOCTYPE html>
<html lang="en">

<head>
	<title>User Registration</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css" />

	<style>
		body {
			background-image: url('images/l.png');
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: cover;
		}
	</style>
	<style>
		.error-message {
			color: red;
			font-size: 14px;
			margin-top: -20px;
		}

		.load-wrapp {
			float: left;
			width: 100px;
			height: 100px;
			margin: 0 10px 10px 0;
			padding: 20px 20px 20px;
			border-radius: 5px;
			text-align: center;
			background-color: #d8d8d8;
		}

		.load-wrapp p {
			padding: 0 0 20px;
		}

		.load-wrapp:last-child {
			margin-right: 0;
		}

		.line {
			display: inline-block;
			width: 15px;
			height: 15px;
			border-radius: 15px;
			background-color: #4b9cdb;
		}

		.ring-1 {
			width: 10px;
			height: 10px;
			margin: 0 auto;
			padding: 10px;
			border: 7px dashed #4b9cdb;
			border-radius: 100%;
		}

		.ring-2 {
			position: relative;
			width: 45px;
			height: 45px;
			margin: 0 auto;
			border: 4px solid #4b9cdb;
			border-radius: 100%;
		}

		.ball-holder {
			position: absolute;
			width: 12px;
			height: 45px;
			left: 17px;
			top: 0px;
		}

		.ball {
			position: absolute;
			top: -11px;
			left: 0;
			width: 16px;
			height: 16px;
			border-radius: 100%;
			background: #4282b3;
		}

		.letter-holder {
			padding: 16px;
		}

		.letter {
			float: left;
			font-size: 14px;
			color: #777;
		}

		.square {
			width: 12px;
			height: 12px;
			border-radius: 4px;
			background-color: #4b9cdb;
		}

		.spinner {
			position: relative;
			width: 45px;
			height: 45px;
			margin: 0 auto;
		}

		.bubble-1,
		.bubble-2 {
			position: absolute;
			top: 0;
			width: 25px;
			height: 25px;
			border-radius: 100%;
			background-color: #4b9cdb;
		}

		.bubble-2 {
			top: auto;
			bottom: 0;
		}

		.bar {
			float: left;
			width: 15px;
			height: 6px;
			border-radius: 2px;
			background-color: #4b9cdb;
		}
	</style>

</head>


<body>
	<nav class="nav-menu">
		<div class="burger-container" id="burger">
			<i class="fa-solid fa-bars"></i>
		</div>
		<h3>EYE MATIC</h3>
		<ul class="menu">
			<li>
				<a href="index.php">Home</a>
			</li>
			<li>
				<a href="about.php">about us</a>
			</li>
			<li>
				<a href="products.php">Products</a>
			</li>
			<li>
				<a href="login.php">Login</a>
			</li>
			<li>
				<a href="register.php">Patient Register</a>
			</li>
			<li>
				<a href="doctorreg.php">Doctor Register</a>
			</li>

		</ul>
	</nav>
	<div class="row">
		<div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<br><br>

			<div class="box-register">
				<center>
					<h2>Patient Registration</h2>
				</center>

				<fieldset>
					<legend>

					</legend>
					<p>
						Enter your personal details below:
					</p>
					<div class="form-group">
						<input type="text" class="form-control" name="name" id="name" placeholder="Full Name" autocomplete="off" required>
						<h6 class="error-message" id="name_err"></h6>

					</div> <br>
					<div class="form-group">
						<input type="text" class="form-control" name="address" id="address" placeholder="Address" autocomplete="off" required>
						<div class="form-group">
							<label for="District"> Select the District: </label>
							<select name="district" id="dis" class="form-control" required>
								<option value="" disabled selected hidden>Select the District</option>
								<option value="Thiruvanathapuram">Thiruvanathapuram</option>
								<option value="Kollam">Kollam</option>
								<option value="Pathanamthitta">Pathanamthitta</option>
								<option value="Alappuzha">Alappuzha</option>
								<option value="Kottayam">Kottayam</option>
								<option value="Idukki">Idukki</option>
								<option value="Ernakulam">Ernakulam</option>
								<option value="Thrissur">Thrissur</option>
								<option value="Palakkad">Palakkad</option>
								<option value="Malappuram">Malappuram</option>
								<option value="Kozhikode">Kozhikode</option>
								<option value="Wayanad">Wayanad</option>
								<option value="Kannur">Kannur</option>
								<option value="Kasargod">Kasargod</option>
							</select>
						</div>
						<div class="form-group">
							<label for="Mobileno:"> Enter the mobile no: </label>
							<!-- <input type="text"  maxlength="10" class="form-control" onblur="Validat()" name="num" id="mob"  placeholder="Mobileno" autocomplete="off" required  value="+91-"> -->
							<input type="text" class="form-control" name="phone" id="phone" placeholder="phone number" autocomplete="off" required>
							<h6 class="error-message" id="ph_err"></h6>

						</div>



						<div class="form-group">
							Date of Birth: &nbsp;&nbsp;&nbsp;
							<input type="date" max="<?php echo date('Y-m-d'); ?>" class="form-control" name="dob" id="dob" placeholder="Date of Birth" autocomplete="off" required>
						</div>
						<div class="form-group">
							<label class="block">
								Gender
							</label>
							<div class="clip-radio radio-primary">
								<input type="radio" id="rg-female" name="gender" value="female" checked required>
								<label for="rg-female">
									Female
								</label>
								<input type="radio" id="rg-male" name="gender" value="male">
								<label for="rg-male">
									Male
								</label>
							</div>
						</div>
						<div class="form-group">

							<label for="bloodgroup"> Choose a Blood Group: </label>
							<select name="blg" id="blood" class="form-control" required>
								<option value="" disabled selected hidden>Choose a blood group</option>
								<option value="A+ve">A+ve</option>
								<option value="B+ve">A-ve</option>
								<option value="AB+ve">B+ve</option>
								<option value="O+ve">B-ve</option>
								<option value="A-ve">AB+ve</option>
								<option value="B-ve">AB-ve</option>
								<option value="AB-ve">O+ve</option>
								<option value="AB-ve">O-ve</option>
							</select>
						</div>

						<p>
							Enter your account details below:
						</p>
						<div class="form-group">
							<span class="input-icon">
								<input type="email" class="form-control" name="email" id="email" placeholder="Email" autocomplete="off" required>
								<i class="fa fa-envelope"></i> </span>
							<h6 class="error-message" id="mail_err"></h6>

						</div>
						<br>
						<div class="form-group">
							<span class="input-icon">
								<input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
								<i class="fa fa-lock"></i> </span>
							<h6 class="error-message" id="pwd_err"></h6>

						</div>
						<br>
						<div class="form-group">
							<span class="input-icon">
								<input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Re-type Password" required>
								<i class="fa fa-lock"></i> </span>
							<h6 class="error-message" id="cpwd_err"></h6>
						</div>
						<br>

						<div class="form-actions">
							<p>
								Already have an account?
								<a href="login.php">
									Log-in
								</a>
							</p>
							<center>
								<button class="btn btn-primary" id="signup_btn">
									Submit <i class="fa fa-arrow-circle-right"></i>
								</button>
							</center>
						</div>
				</fieldset>
				<style>
					.modal {
						display: flex;
						flex-direction: column;
						justify-content: center;
						gap: 0.4rem;
						width: 450px;
						padding: 1.3rem;
						min-height: 250px;
						position: absolute;
						z-index: 2;
						top: 5%;
						background-color: white;
						border: 1px solid #ddd;
						border-radius: 15px;
					}

					.modal .flex {
						display: flex;
						align-items: center;
						justify-content: space-between;
					}

					.modal input {
						padding: 0.7rem 1rem;
						border: 1px solid #ddd;
						border-radius: 5px;
						font-size: 0.9em;
					}

					.modal p {
						font-size: 0.9rem;
						color: #777;
						margin: 0.4rem 0 0.2rem;
					}

					button {
						cursor: pointer;
						border: none;
						font-weight: 600;
					}

					.btn {
						display: inline-block;
						padding: 0.8rem 1.4rem;
						font-weight: 700;
						background-color: black;
						color: white;
						border-radius: 5px;
						text-align: center;
						font-size: 1em;
					}

					.btn-open {
						position: absolute;
						bottom: 150px;
					}

					.btn-close {
						transform: translate(10px, -20px);
						padding: 0.5rem 0.7rem;
						background: #eee;
						border-radius: 50%;
					}

					.overlay {
						position: fixed;
						top: 0;
						bottom: 0;
						left: 0;
						right: 0;
						width: 100%;
						height: 100%;
						background: rgba(0, 0, 0, 0.5);
						backdrop-filter: blur(3px);
						z-index: 1;
					}

					.hidden {
						display: none;
					}

					.loader {
						margin: 0 0 2em;
						height: 100px;
						width: 20%;
						text-align: center;
						padding: 1em;
						margin: 0 auto 1em;
						display: inline-block;
						vertical-align: top;
					}

					/*
  Set the color of the icon
*/
					svg path,
					svg rect {
						fill: #FF6700;
					}
				</style>
				<form action="login.php" method="post">

				</form>
				<div>
					<!--modal  -->
					<section class="modal hidden">
						<div style="display: flex;justify-content: center;flex-direction: column;">
							<!-- 3  -->
							<div class="loader loader--style3" title="2">
								<svg version="1.1" id="loader-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="40px" height="40px" viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
									<path fill="#000" d="M43.935,25.145c0-10.318-8.364-18.683-18.683-18.683c-10.318,0-18.683,8.365-18.683,18.683h4.068c0-8.071,6.543-14.615,14.615-14.615c8.072,0,14.615,6.543,14.615,14.615H43.935z">
										<animateTransform attributeType="xml" attributeName="transform" type="rotate" from="0 25 25" to="360 25 25" dur="0.6s" repeatCount="indefinite" />
									</path>
								</svg>
							</div>
							<h4 class="text-center">Please wait... Registration process</h4>
						</div>
					</section>
					<div class="overlay hidden"></div>
				</div>
			</div>
		</div>

</body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/script.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<script>
	const modal = document.querySelector(".modal");
	const overlay = document.querySelector(".overlay");
	const openModalBtn = document.querySelector(".btn-open");

	$('#signup_btn').click(() => {
		// when login btn clicked this function invokes

		name = $("#name").val();
		address = $("#address").val();
		dis = $("#dis").val();
		phone = $("#phone").val();
		dateofbirth = $("#dob").val();
		gender = document.querySelector('input[name="gender"]:checked').value;
		blood = $("#blood").val();
		email = $("#email").val();
		password = $("#password").val();
		cpassword = $("#cpassword").val();

		if (checkUsername(name)) {
			if (checkAddress(address)) {
				if (dis != null) {
					if (isPhnoValid(phone)) {
						if (dateofbirth) {
							if (gender) {
								if (dis != null) {
									if (isEmailValid(email)) {
										if (CheckPassword(password)) {
											if (CheckPassword(cpassword)) {
												if (password == cpassword) {
													$.ajax({
														type: "POST",
														url: "includes/register/user.php",
														data: {
															'name': name,
															'address': address,
															'dis': dis,
															'phone': phone,
															'dateofbirth': dateofbirth,
															'gender': gender,
															'blood': blood,
															'email': email,
															'password': password,
															'cpassword': cpassword,
															'action': 1,
														},
														dataType: 'JSON',
														cache: false,
														beforeSend: function() {
															modal.classList.remove("hidden");
															overlay.classList.remove("hidden");
														},
														success: function(response) {
															modal.classList.add("hidden");
															overlay.classList.add("hidden");
															if (response.status == 1) {
																showError(response.msg, 0);
																setTimeout(() => {
																	window.loca
																}, 1000);
															} else {
																showError(response.msg, 0);
															}
														}
													});
												} else {
													showError('password and confirm password not match...')
												}
											}
										}
									} else {
										showError("please enter a valid email", 0);
									}
								} else {
									showError("please select blood group", 0);
								}
							} else {
								showError("please select a gender", 0);
							}
						} else {
							showError("please enter date of birth", 0);
						}
					} else {
						showError("please enter a valid phone number", 0);
					}
				} else {
					showError("please select district", 0);
				}
			}
		}
	})

	function CheckPassword(inputtxt) {
		var regexExp = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;

		if (regexExp.test(inputtxt)) {
			return true;
		} else {
			showError('password between 6 to 20 characters which contain at least one numeric digit, one uppercase and one lowercase letter')
			return false;
		}
	}
	const isEmailValid = (email) => {
		const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		return re.test(email);
	};
	const isPhnoValid = (phno) => {
		const regexExp = /^[6-9]\d{9}$/gi;
		return regexExp.test(phno);
	}

	const checkUsername = (name) => {
		regex = /^[a-zA-Z]+$/;
		if (name.length < 3 || name.length > 25) {
			showError("Username must be between 3 and 25 characters.", 0);
			return false;
		} else if (isNaN(name) == false) {
			showError("Username must be characters.", 0);
		} else if (regex.test(name)) {
			return true;
		} else {
			showError("Username must be characters.numbers and special character not allowed.", 0);
		}

	};

	function checkAddress(addres) {
		if (addres.length < 3 || addres.length > 100) {
			showError("addres must be between 3 and 100 characters.", 0);
			return false;
		} else {
			return true;
		}
	}

	function showError(msg, status) {
		alert(msg);
	}
</script>

</html>