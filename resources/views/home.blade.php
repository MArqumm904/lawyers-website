<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
   body{
    overflow-x: hidden;
   }
   .navbar{
        border-bottom: 1px solid black;
        padding: 15px;
    }
    .get{
        background-color: #292929;
        border: none;
        color: white;
    }
    .get a{
        text-decoration: none;
        color: white;
    }
    .get a:hover{
        color: white;
    }
    .login{
        background-color: #39E079;
        border: none;
        color: black;
        font-weight: 600;
    }
    .login a{
        text-decoration: none;
        color: black;
    }
    .login:hover a{
        color: white;
    }
    .logo{
        color: black !important;
        background: linear-gradient(135deg, #057863, #8edcb2);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    display: inline-block;
    text-decoration: none;
    font-weight: bold;
    font-size: 30px;
    letter-spacing: 3px;
    font-weight: 800;
    margin-left: 20px;
    }
    .logo:hover {
    text-decoration: underline;
  }

  .main{
    padding-left: 870px;  }

    .images{
        width: 70vw;
        background-image: url('{{ asset("images/2.jpg") }}');
        background-position: center;
        background-size: cover;
        margin: 20px auto;
        border-radius: 20px;
        height: 60vh;

    }
    .text{
        padding-top: 140px;
        color: white;
        padding-left: 50px;
    }
    p{
        color: white;
        padding-left: 50px;

    }
    .buttons{
        margin-left: 50px;
    }
    .gett{
        background-color: #F5F5F5;
        color: black;
        font-weight: 600;
        width: 300px;
    }
    .gett a{
        text-decoration: none;
        color: black;
    }
    .gett:hover a{
        color: white;
    }
    .btnn{
        margin-left: 200px;
    }
    @media (max-width: 576px) {
  .btn2 {
    margin-top: 0px !important; /* Your custom margin-top value */
  }
}
</style>
<body>

<nav class="navbar navbar-expand-lg navbar-light" >
    <a class="logo navbar-brand" href="#">E-sahulat</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="ml-auto">
            <button class="login btn btn-success"><a href="{{ route('login') }}">Login</a></button>
            <button class="get btn btn-success"><a href="{{ route('signup') }}">Get Started</a></button>
        </div>
    </div>
</nav>

<div class="container">
    @if($message = Session::get('success'))
    <div class="alert alert-success alert-block">
      <span><b>{{ $message }}</b></span>
    </div>
  @endif

    <div class="images d-flex align-items-center justify-content-center">
        <div>
            <h1 class="text">Create a great event Experience</h1>
            <p>E-Sahulat</p>
            <div class="d-flex justify-content-center">
                <button class="login btn btn-success mr-2"><a href="{{ route('login') }}">Login</a></button>
                <button class="get btn btn-success"><a href="{{ route('signup') }}">Get Started</a></button>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-4">
            <button type="submit" class="gett btn btn-success"><i class="fa-solid fa-registered"></i>&nbsp;&nbsp;<a href="{{ route('signup') }}">Register as a new member</a></button>
        </div>
        <div class="col-md-4">
            <button type="submit" class="gett btn btn-success"><i class="fa-solid fa-right-to-bracket"></i>&nbsp;&nbsp;<a href="{{ route('sign') }}">Start as an existing member</a></button>
        </div>
        <div class="col-md-4">
            <button type="submit" class="gett btn btn-success"><i class="fa-solid fa-lock"></i>&nbsp;&nbsp;&nbsp;<a href="/adminlogin">Dashboard</a></button>
        </div>
        <div class="col-md-4 mt-4 btn2">
            <button type="submit" class="gett btn btn-success"><i class="fa-solid fa-lock"></i>&nbsp;&nbsp;&nbsp;<a href="/paydetail">Payment Details</a></button>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
