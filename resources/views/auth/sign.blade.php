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

	@if($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <span><b>{{ $message }}</b></span>
    </div>
  @endif

  <center>
    <div class="imagess">
    <img src="{{ asset('images/esahulat.png') }}" alt="logo">
    <a href="/" class="back">Home</a>

</div>
</center>
  <div class="container-login100">

			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Signup
					</span>
				</div>

				<form class="login100-form validate-form" method="POST" action="{{ url('/sign') }}">
                    @csrf
					<div class="wrap-input100 validate-input m-b-26" data-validate="cnic is required">
						<span class="label-input100">GTBA No</span>
						<select name="cnic_gtba" id="" class="input100" style="margin-top: 10px;" required>
							<option value="1" selected disabled>Choose GTBA number</option>
							<option value="GTBA 1 - CH MUHAMMAD ASLAM SAHI">GTBA 1 - CH MUHAMMAD ASLAM SAHI</option>
							<option value="GTBA 2 - ISHFAQ AHMAD RAZI">GTBA 2 - ISHFAQ AHMAD RAZI</option>
							<option value="GTBA 3 - SH. MUHAMMAD HABIB ULLAH">GTBA 3 - SH. MUHAMMAD HABIB ULLAH</option>
							<option value="GTBA 4 - AKRAM ABID BHATTI">GTBA 4 - AKRAM ABID BHATTI</option>
							<option value="GTBA 5 - SH.KHALID ASLAM ">GTBA 5 - SH.KHALID ASLAM </option>
							<option value="GTBA 6 - SAEED ANWAR SIDDIQUI ">GTBA 6 - SAEED ANWAR SIDDIQUI </option>
							<option value="GTBA 7 - KHURRAM TAUFIQ MALK">GTBA 7 - KHURRAM TAUFIQ MALK</option>
							<option value="GTBA 8 - SYED MEHMOOD ABID">GTBA 8 - SYED MEHMOOD ABID</option>
							<option value="GTBA 9 - NADEEM AKHTAR SHAHZAD">GTBA 9 - NADEEM AKHTAR SHAHZAD</option>
							<option value="GTBA 10 CH.AZHAR FAROOQ WARRAICH">GTBA 10 - CH.AZHAR FAROOQ WARRAICH</option>
							<option value="GTBA 11 - Mian Mehroz Ashraf">GTBA 11 - Mian Mehroz Ashraf</option>
							<option value="GTBA 12 - MALIK TAFHEEM AZMAT">GTBA 12 - MALIK TAFHEEM AZMAT</option>
							<option value="GTBA 13 - MUHAMMMAD MUJAHID BUTT">GTBA 13 - MUHAMMMAD MUJAHID BUTT</option>
							<option value="GTBA 14 - TABRAIZ AHMAD QURESHI">GTBA 14 - TABRAIZ AHMAD QURESHI</option>
							<option value="GTBA 15 - SYED SHAHBAZ AKHTAR">GTBA 15 - SYED SHAHBAZ AKHTAR</option>
							<option value="GTBA 16 - MUKHTAR AHMAD WARRAICH">GTBA 16 - MUKHTAR AHMAD WARRAICH</option>
							<option value="GTBA 17 - SYED TASEER ALI SHAH">GTBA 17 - SYED TASEER ALI SHAH</option>
							<option value="GTBA 18 - SAJJAD AHMED QURESHI">GTBA 18 - SAJJAD AHMED QURESHI</option>
							<option value="GTBA 19 - MISBAH UD DIN FAROOQ E AZAM">GTBA 19 - MISBAH UD DIN FAROOQ E AZAM</option>
							<option value="GTBA 20 - SYED USMAN HAIDER">GTBA 20 - SYED USMAN HAIDER</option>
							<option value="GTBA 21 - SYED MUBASHAR ABBAS">GTBA 21 - SYED MUBASHAR ABBAS</option>
							<option value="GTBA 22 - MUHAMMAD KHALIL CHOUDHARY">GTBA 22 - MUHAMMAD KHALIL CHOUDHARY</option>
							<option value="GTBA 23 - SIKANDER ISHFAQ">GTBA 23 - SIKANDER ISHFAQ</option>
							<option value="GTBA 24 - MUHAMMAD NASEER BUTT">GTBA 24 - MUHAMMAD NASEER BUTT</option>
							<option value="GTBA 25 - UMER ASLAM SAHI">GTBA 25 - UMER ASLAM SAHI</option>
							<option value="GTBA 26 - TARIQ JAVAID">GTBA 26 - TARIQ JAVAID</option>
							<option value="GTBA 27 - TAHIR HASSAN">GTBA 27 - TAHIR HASSAN</option>
							<option value="GTBA 28 - USMAN HABIB">GTBA 28 - USMAN HABIB</option>
							<option value="GTBA 29 - Adil Muhammad">GTBA 29 - Adil Muhammad</option>
							<option value="GTBA 30 - AQEEL ABBAS">GTBA 30 - AQEEL ABBAS</option>
							<option value="GTBA 31 -  MUHAMMAD IMRAN ALI ">GTBA 31 -  MUHAMMAD IMRAN ALI </option>
							<option value="GTBA 32 - SHEIKH AWAIS AMJAD">GTBA 32 - SHEIKH AWAIS AMJAD</option>
							<option value="GTBA 33 - MIAN SHEHZAD AHMED MIR">GTBA 33 - MIAN SHEHZAD AHMED MIR</option>
							<option value="GTBA 34 - MEHVISH SADIQ">GTBA 34 - MEHVISH SADIQ</option>
							<option value="GTBA 35 - MUBARAK ULLAH">GTBA 35 - MUBARAK ULLAH</option>
							<option value="GTBA 36 - MUDASSER ABBAS">GTBA 36 - MUDASSER ABBAS</option>
							<option value="GTBA 37 - MUHAMMAD ABDULLAH BASHIR KANG">GTBA 37 - MUHAMMAD ABDULLAH BASHIR KANG</option>
							<option value="GTBA 38 - SYED MUAZZAM ALI">GTBA 38 - SYED MUAZZAM ALI</option>
							<option value="GTBA 39 - UMAR NAEEM">GTBA 39 - UMAR NAEEM</option>
							<option value="GTBA 40 - SALMAN RAZA">GTBA 40 - SALMAN RAZA</option>
							<option value="GTBA 41 - MISS MARYAM GHAZANFAR">GTBA 41 - MISS MARYAM GHAZANFAR</option>
							<option value="GTBA 42 - ASIM ASHRAF">GTBA 42 - ASIM ASHRAF</option>
							<option value="GTBA 43 - SH. ABDUL QUDDUS ABID">GTBA 43 - SH. ABDUL QUDDUS ABID</option>
							<option value="GTBA 44 - ADEEL ABBAS">GTBA 44 - ADEEL ABBAS</option>
							<option value="GTBA 45 - MUHAMMAD ALI">GTBA 45 - MUHAMMAD ALI</option>
							<option value="GTBA 46 - IMTIAZ AHMAD">GTBA 46 - IMTIAZ AHMAD</option>
							<option value="GTBA 47 - QAISAR NASEER">GTBA 47 - QAISAR NASEER</option>
							<option value="GTBA 48 - MUBASHAR HUSSAIN KAZMI">GTBA 48 - MUBASHAR HUSSAIN KAZMI</option>
							<option value="GTBA 49 - AHEMD TAUQIR">GTBA 49 - AHEMD TAUQIR</option>
							<option value="GTBA 50 - AHMED TOUQEER">GTBA 50 - AHMED TOUQEER</option>
							<option value="GTBA 51 - QASIM SHAHBAZ">GTBA 51 - QASIM SHAHBAZ</option>
							<option value="GTBA 52 -  BILAL AHMED CHANDALA">GTBA 52 -  BILAL AHMED CHANDALA</option>
							<option value="GTBA 53 - ZAHEER AHMAD">GTBA 53 - ZAHEER AHMAD</option>
							<option value="GTBA 54 - MUHAMMAD YOUSAF">GTBA 54 - MUHAMMAD YOUSAF</option>
							<option value="GTBA 55 - ABDUL QUDOOS">GTBA 55 - ABDUL QUDOOS</option>
							<option value="GTBA 56 - WAQAS AHMED">GTBA 56 - WAQAS AHMED</option>
							<option value="GTBA 57 - MUHAMMAD BASHIR">GTBA 57 - MUHAMMAD BASHIR</option>
							<option value="GTBA 58 - ZAIN NAWAZ">GTBA 58 - ZAIN NAWAZ</option>
							<option value="GTBA 59 - MUHAMMAD TOUSEEF">GTBA 59 - MUHAMMAD TOUSEEF</option>
							<option value="GTBA 60 - ALI ANWAAR SIDDIQUI">GTBA 60 - ALI ANWAAR SIDDIQUI</option>
							<option value="GTBA 61 - MIRZA TAIMOOR ALI">GTBA 61 - MIRZA TAIMOOR ALI</option>
							<option value="GTBA 62 - SHEIKH KHURAM SHAFIQUE">GTBA 62 - SHEIKH KHURAM SHAFIQUE</option>


						</select>
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">FullName</span>
						<input class="input100" type="text" name="username" placeholder="Enter fullname" required>
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="phonenumber is required">
						<span class="label-input100">Phone</span>
						<input class="input100" type="number" name="p_number" oninput="validatePhoneNumber()" placeholder="Enter phonenumber" required>
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
