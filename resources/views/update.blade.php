<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Document</title>

</head>
<body>

<div class="container m-5">
    <button class="btn btn-success" onclick="window.location.href='/manage' ">Go to Details</button>
</div>

<div class="container d-flex justify-content-center">

    <form class="form p-5" action="{{ route('update', $row->id) }}" method="POST">
            @csrf
            @method('PUT')
    <div class="form-row">
<input type="hidden" name="username" id="username" class="form-control" value="{{ $row->username ?? '' }}">
    </div>
    <div class="form-row">
<input type="hidden" name="cnic_gtba" id="cnic_gtba" class="form-control" value="{{ $row->cnic_gtba ?? '' }}">
    </div>
    <div class="form-row">
<input type="hidden" name="p_number" id="p_number" class="form-control" value="{{ $row->p_number ?? '' }}">
    </div>
    <div class="form-row">
<input type="hidden" name="emailaddress" id="emailaddress" class="form-control" value="{{ $row->emailaddress ?? '' }}">
    </div>
    <div class="form-row">
<input type="hidden" name="password" id="password" class="form-control" value="{{ $row->password ?? '' }}">
    </div>
        <br>

        <div class="row">
        <div class="form-row col-4">
            <label for="january" class="ml-4">January Fees</label>
            <input type="number" name="january" id="inputPassword6" class="form-control mx-sm-3 ml-4 col-4" aria-describedby="passwordHelpInline" value="{{ $row->january ?? '' }}">
        </div>
        <div class="form-row col-4">
            <label for="february" class="ml-4">February Fees</label>
            <input type="number" name="february" id="inputPassword6" class="form-control mx-sm-3 ml-4 col-4" aria-describedby="passwordHelpInline" value="{{ $row->february ?? '' }}">
        </div>
        <div class="form-row col-4">
            <label for="march" class="ml-4">March Fees</label>
            <input type="number" name="march" id="inputPassword6" class="form-control mx-sm-3 ml-4 col-4" aria-describedby="passwordHelpInline" value="{{ $row->march ?? '' }}">
        </div>
        <div class="form-row col-4 mt-3">
            <label for="april" class="ml-4">April Fees</label>
            <input type="number" name="april" id="inputPassword6" class="form-control mx-sm-3 ml-4 col-4" aria-describedby="passwordHelpInline" value="{{ $row->april ?? '' }}">
            </div>
            <div class="form-row col-4 mt-3">
                <label for="may" class="ml-4">May Fees</label>
                <input type="number" name="may" id="inputPassword6" class="form-control mx-sm-3 ml-4 col-4" aria-describedby="passwordHelpInline" value="{{ $row->may ?? '' }}">
            </div>
            <div class="form-row col-4 mt-3">
                <label for="june" class="ml-4">June Fees</label>
                <input type="number" name="june" id="inputPassword6" class="form-control mx-sm-3 ml-4 col-4" aria-describedby="passwordHelpInline" value="{{ $row->june ?? '' }}">
            </div>
            <div class="form-row col-4 mt-3">
                <label for="july" class="ml-4">July Fees</label>
                <input type="number" name="july" id="inputPassword6" class="form-control mx-sm-3 ml-4 col-4" aria-describedby="passwordHelpInline" value="{{ $row->july ?? '' }}">
            </div>
            <div class="form-row col-4 mt-3">
                <label for="august" class="ml-4">August Fees</label>
                <input type="number" name="august" id="inputPassword6" class="form-control mx-sm-3 ml-4 col-4" aria-describedby="passwordHelpInline" value="{{ $row->august ?? '' }}">
            </div>
            <div class="form-row col-4 mt-3">
                <label for="september" class="ml-4">September Fees</label>
                <input type="number" name="september" id="inputPassword6" class="form-control mx-sm-3 ml-4 col-4" aria-describedby="passwordHelpInline" value="{{ $row->september ?? '' }}">
            </div>
            <br>
            <div class="form-row col-4 mt-3">
                <label for="october" class="ml-4">October Fees</label>
                <input type="number" name="october" id="inputPassword6" class="form-control mx-sm-3 ml-4 col-4" aria-describedby="passwordHelpInline" value="{{ $row->october ?? '' }}">
            </div>
            <br>
            <div class="form-row col-4 mt-3">
                <label for="november" class="ml-4">November Fees</label>
                <input type="number" name="november" id="inputPassword6" class="form-control mx-sm-3 ml-4 col-4" aria-describedby="passwordHelpInline" value="{{ $row->november ?? '' }}">
            </div>
            <br>
            <div class="form-row col-4 mt-3">
                <label for="december" class="ml-4">December Fees</label>
                <input type="number" name="december" id="inputPassword6" class="form-control mx-sm-3 ml-4 col-4" aria-describedby="passwordHelpInline" value="{{ $row->december ?? '' }}">
            </div>
        </div>
            <br><br>
            <button type="submit" class="btn btn-primary" style="margin-left:100px;">Submit</button>
    </form>

</div>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>
</html>
