<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>

@if($message = Session::get('success'))
    <div class="alert alert-success alert-block">
      <span><b>{{ $message }}</b></span>
    </div>
  @endif

  <div class="d-flex justify-content-between mx-5 mt-5">

    <div class="mt-5">
    <h3>Check your Payment Details</h3>
    </div>


  <div class="mt-5">
     <form action="{{ route('logout') }}" method="post">
      @csrf
      <button type="submit" class="btn btn-dark">Logout</button>
     </form>

  </div>

  </div>

<div class=" mt-5">

    <table class="table table-striped table-responsive">
        <thead>
            <tr>
                <th scope="col">User Name</th>
                <th scope="col">Email Address</th>
                <th scope="col">January Payment</th>
                <th scope="col">February Payment</th>
                <th scope="col">March Payment</th>
                <th scope="col">April Payment</th>
                <th scope="col">May Payment</th>
                <th scope="col">June Payment</th>
                <th scope="col">July Payment</th>
                <th scope="col">August Payment</th>
                <th scope="col">September Payment</th>
                <th scope="col">October Payment</th>
                <th scope="col">November Payment</th>
                <th scope="col">December Payment</th>



    </tr>
  </thead>
  <tbody>
  <tr>
    <th scope="row">{{ auth()->user()->username }}</th>
    <td>{{ auth()->user()->emailaddress }}
    </td>

    <td>
    @if (auth()->user()->january > 0)
    <button class="btn" style="background-color:green; color: white;" >Rs.{{ auth()->user()->january }}</button>
@elseif (auth()->user()->january == 0)
<button class="btn" style="background-color:red; color: white;" ><b>✕</b></button>
@else
<button class="btn" style="background-color:red; color: white;" >{{ auth()->user()->january }}</button>
@endif
    </td>

    <td>
    @if (auth()->user()->february > 0)
    <button class="btn" style="background-color:green; color: white;" >Rs.{{ auth()->user()->february }}</button>
@elseif (auth()->user()->february == 0)
<button class="btn" style="background-color:red; color: white;" ><b>✕</b></button>
@else
<button class="btn" style="background-color:red; color: white;" >{{ auth()->user()->february }}</button>
@endif
    </td>

    <td>
    @if (auth()->user()->march > 0)
    <button class="btn" style="background-color:green; color: white;" >Rs.{{ auth()->user()->march }}</button>
@elseif (auth()->user()->march == 0)
<button class="btn" style="background-color:red; color: white;" ><b>✕</b></button>
@else
<button class="btn" style="background-color:red; color: white;" >{{ auth()->user()->march }}</button>
@endif
    </td>

    <td>
    @if (auth()->user()->april > 0)
    <button class="btn" style="background-color:green; color: white;" >Rs.{{ auth()->user()->april }}</button>
@elseif (auth()->user()->april == 0)
<button class="btn" style="background-color:red; color: white;" ><b>✕</b></button>
@else
<button class="btn" style="background-color:red; color: white;" >{{ auth()->user()->april }}</button>
@endif
    </td>


    <td>
    @if (auth()->user()->may > 0)
    <button class="btn" style="background-color:green; color: white;" >Rs.{{ auth()->user()->may }}</button>
@elseif (auth()->user()->may == 0)
<button class="btn" style="background-color:red; color: white;" ><b>✕</b></button>
@else
<button class="btn" style="background-color:red; color: white;" >{{ auth()->user()->may }}</button>
@endif
    </td>

    <td>
    @if (auth()->user()->june > 0)
    <button class="btn" style="background-color:green; color: white;" >Rs.{{ auth()->user()->june }}</button>
@elseif (auth()->user()->june == 0)
<button class="btn" style="background-color:red; color: white;" ><b>✕</b></button>
@else
<button class="btn" style="background-color:red; color: white;" >{{ auth()->user()->june }}</button>
@endif
    </td>


    <td>
    @if (auth()->user()->july > 0)
    <button class="btn" style="background-color:green; color: white;" >Rs.{{ auth()->user()->july }}</button>
@elseif (auth()->user()->july == 0)
<button class="btn" style="background-color:red; color: white;" ><b>✕</b></button>
@else
<button class="btn" style="background-color:red; color: white;" >{{ auth()->user()->july }}</button>
@endif
    </td>


    <td>
    @if (auth()->user()->august > 0)
    <button class="btn" style="background-color:green; color: white;" >Rs.{{ auth()->user()->august }}</button>
@elseif (auth()->user()->august == 0)
<button class="btn" style="background-color:red; color: white;" ><b>✕</b></button>
@else
<button class="btn" style="background-color:red; color: white;" >{{ auth()->user()->august }}</button>
@endif
    </td>


    <td>
    @if (auth()->user()->september > 0)
    <button class="btn" style="background-color:green; color: white;" >Rs.{{ auth()->user()->september }}</button>
@elseif (auth()->user()->september == 0)
<button class="btn" style="background-color:red; color: white;" ><b>✕</b></button>
@else
<button class="btn" style="background-color:red; color: white;" >{{ auth()->user()->september }}</button>
@endif
    </td>


    <td>
    @if (auth()->user()->october > 0)
    <button class="btn" style="background-color:green; color: white;" >Rs.{{ auth()->user()->october }}</button>
@elseif (auth()->user()->october == 0)
<button class="btn" style="background-color:red; color: white;" ><b>✕</b></button>
@else
<button class="btn" style="background-color:red; color: white;" >{{ auth()->user()->october }}</button>
@endif
    </td>


    <td>
    @if (auth()->user()->november > 0)
    <button class="btn" style="background-color:green; color: white;" >Rs.{{ auth()->user()->november }}</button>
@elseif (auth()->user()->november == 0)
<button class="btn" style="background-color:red; color: white;" ><b>✕</b></button>
@else
<button class="btn" style="background-color:red; color: white;" >{{ auth()->user()->november }}</button>
@endif
    </td>



    <td>
    @if (auth()->user()->december > 0)
    <button class="btn" style="background-color:green; color: white;" >Rs.{{ auth()->user()->december }}</button>
@elseif (auth()->user()->december == 0)
<button class="btn" style="background-color:red; color: white;" ><b>✕</b></button>
@else
<button class="btn" style="background-color:red; color: white;" >{{ auth()->user()->december }}</button>
@endif
    </td>
















</tr>


</tbody>
</table>
</div>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>
</html>
