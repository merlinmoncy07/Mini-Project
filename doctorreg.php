<!DOCTYPE html>
<html lang="en">

<head>
	<title>Docotor Registration</title>
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
					<h2>Doctor Registration</h2>
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
	$('#signup_btn').click(() => {
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
		
		if (checkUsername()) {
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
														url: "includes/register/doctor.php",
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
														success: function(response) {
															if (response.status == 1) {
																showError(response.msg, 1);
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

	const checkUsername = ($name) => {
		if (name.length < 3 || name.length > 25) {
			showError("Username must be between 3 and 25 characters.", 0);
			return false;
		} else {
			return true;
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
		if (status == 1) {
			alert(msg);
		} else {
			alert(msg);
		}
	}
</script>

</html>