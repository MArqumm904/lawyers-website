<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"  href="{{ asset('css/util.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"  href="{{ asset('css/main.css') }}">
<!--===============================================================================================-->
<style>
    .back{
        color: black;
        font-size: 20px;
        text-decoration: none;
    font-size: 21px;
    font-weight: 400;
    position: relative;
    top:40px;
    right: 150px;
    }
    .imagess{
  background: #ebeeef;

    }
</style>
</head>
<body>




	<div class="limiter">
    <center>
    <div class="imagess">
        <img src="{{ asset('images/esahulat.png') }}" alt="logo">
        <a href="/" class="back">Home </a>

    </div>
</center>
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Sign Up
					</span>
				</div>

				<form class="login100-form validate-form"   method="POST" action="{{ url('/signup') }}">
				@csrf
					<div class="wrap-input100 validate-input m-b-26" data-validate="cnic is required">
						<span class="label-input100">CNIC</span>
						<input class="input100" type="text" name="cnic_gtba" placeholder="Enter cnic" oninput="validateCNIC()" required >
						<span class="focus-input100"></span>
						<span id="cnic-error-message" style="color: red; font-size: 12px;"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">FullName</span>
						<input class="input100" type="text" name="username" placeholder="Enter FullName" required>
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="phonenumber is required">
						<span class="label-input100">Phone</span>
						<input class="input100" type="number" name="p_number" placeholder="Enter phonenumber" oninput="validatePhoneNumber()"  required>
						<span class="focus-input100"></span>
						<span id="phone-error-message" style="color: red; font-size: 12px;"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="email is required">
						<span class="label-input100">Email</span>
						<input class="input100" type="email" name="emailaddress" placeholder="Enter email" required>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Enter password" oninput="validatePassword()" required>
						<span class="focus-input100"></span>
						<span id="password-error-message" style="color: red; font-size: 12px;"></span>
					</div>



<br>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							Register
						</button>
					</div>


				</form>
			</div>
		</div>
	</div>





	<script>
    function validateCNIC() {
        var cnicRegex = /^[0-9+]{5}-[0-9+]{7}-[0-9]{1}$/; // CNIC format: 12345-1234567-1

        var cnicInput = document.getElementsByName("cnic/gtba")[0].value;
        var errorSpan = document.getElementById("cnic-error-message");

        if (cnicRegex.test(cnicInput)) {
            // CNIC is valid, clear any previous error message
            errorSpan.textContent = "";
        } else {
            // CNIC is invalid, display error message
            errorSpan.textContent = "Please enter a valid CNIC number.";
        }
    }

	function validatePhoneNumber() {
    var phoneNumberRegex = /^03[0-9]{2}-?[0-9]{7}$/; // Pakistani phone number format: 03xx-xxxxxxx or 03xxxxxxxxx

    var phoneNumberInput = document.getElementsByName("p_number")[0].value;
    var errorSpan = document.getElementById("phone-error-message");

    if (phoneNumberRegex.test(phoneNumberInput)) {
        // Phone number is valid, clear any previous error message
        errorSpan.textContent = "";
    } else {
        // Phone number is invalid, display error message
        errorSpan.textContent = "Please enter a valid Pakistan phone number (e.g., 03xx-xxxxxxx or 03xxxxxxxxx).";
    }
}

	function validatePassword() {
        var passwordInput = document.getElementsByName("password")[0].value;
        var errorSpan = document.getElementById("password-error-message");

        // Regular expression for password validation
        var passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{6,20}$/;

        if (passwordRegex.test(passwordInput)) {
            // Password is valid, clear any previous error message
            errorSpan.textContent = "";
            return true; // Password is valid
        } else {
            // Password is invalid, display error message
            errorSpan.textContent = "Password must be 6-20 characters, contain at least one uppercase and lowercase letter, one digit, and one special character.";
            return false; // Password is invalid
        }
    }



</script>

</body>
</html>
