<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V15</title>
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
    display: flex;
    justify-content: center;
  background: #ebeeef;
  margin-bottom: -50px;

    }
</style>
</head>
<body>

<a href="/" class="back">Home </a>

	<div class="limiter">
	@if($message = Session::get('success'))
    <div class="alert alert-success alert-block">
      <span><b>{{ $message }}</b></span>
    </div>
  @endif
		<div class="container-login100">

			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Log In
					</span>
				</div>

				<form class="login100-form validate-form" method="POST" action="{{ url('/login') }}">
                    @csrf

					<div class="wrap-input100 validate-input m-b-26" data-validate="email is required">
						<span class="label-input100">Email</span>
						<input class="input100" type="email" name="emailaddress" placeholder="Enter email" required>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Enter password" required>
						<span class="focus-input100"></span>
					</div>



					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							Log In
						</button>
					</div>


				</form>
			</div>
		</div>
	</div>


</body>
</html>
