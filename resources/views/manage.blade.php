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
    <h3>Manage Payment Details</h3>
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
                <th scope="col">Update Payment</th>
    </tr>
  </thead>
  <tbody>
  @foreach($members as $member)
  <tr>
    <th scope="row">{{ $member->username }}</th>
    <td>{{ $member->emailaddress }}
    </td>

    <td>
    @if ($member->january > 0)
    <button class="btn" style="background-color:green; color: white;" >Rs.{{ $member->january }}</button>
@elseif ($member->january == 0)
<button class="btn" style="background-color:red; color: white;" ><b>✕</b></button>
@else
<button class="btn" style="background-color:red; color: white;" >{{ $member->january }}</button>
@endif
    </td>

    <td>
    @if ($member->february > 0)
    <button class="btn" style="background-color:green; color: white;" >Rs.{{ $member->february }}</button>
@elseif ($member->february == 0)
<button class="btn" style="background-color:red; color: white;" ><b>✕</b></button>
@else
<button class="btn" style="background-color:red; color: white;" >{{ $member->february }}</button>
@endif
    </td>

    <td>
    @if ($member->march > 0)
    <button class="btn" style="background-color:green; color: white;" >Rs.{{ $member->march }}</button>
@elseif ($member->march == 0)
<button class="btn" style="background-color:red; color: white;" ><b>✕</b></button>
@else
<button class="btn" style="background-color:red; color: white;" >{{ $member->march }}</button>
@endif
    </td>

    <td>
    @if ($member->april > 0)
    <button class="btn" style="background-color:green; color: white;" >Rs.{{ $member->april }}</button>
@elseif ($member->april == 0)
<button class="btn" style="background-color:red; color: white;" ><b>✕</b></button>
@else
<button class="btn" style="background-color:red; color: white;" >{{ $member->april }}</button>
@endif
    </td>


    <td>
    @if ($member->may > 0)
    <button class="btn" style="background-color:green; color: white;" >Rs.{{ $member->may }}</button>
@elseif ($member->may == 0)
<button class="btn" style="background-color:red; color: white;" ><b>✕</b></button>
@else
<button class="btn" style="background-color:red; color: white;" >{{ $member->may }}</button>
@endif
    </td>

    <td>
    @if ($member->june > 0)
    <button class="btn" style="background-color:green; color: white;" >Rs.{{ $member->june }}</button>
@elseif ($member->june == 0)
<button class="btn" style="background-color:red; color: white;" ><b>✕</b></button>
@else
<button class="btn" style="background-color:red; color: white;" >{{ $member->june }}</button>
@endif
    </td>


    <td>
    @if ($member->july > 0)
    <button class="btn" style="background-color:green; color: white;" >Rs.{{ $member->july }}</button>
@elseif ($member->july == 0)
<button class="btn" style="background-color:red; color: white;" ><b>✕</b></button>
@else
<button class="btn" style="background-color:red; color: white;" >{{ $member->july }}</button>
@endif
    </td>


    <td>
    @if ($member->august > 0)
    <button class="btn" style="background-color:green; color: white;" >Rs.{{ $member->august }}</button>
@elseif ($member->august == 0)
<button class="btn" style="background-color:red; color: white;" ><b>✕</b></button>
@else
<button class="btn" style="background-color:red; color: white;" >{{ $member->august }}</button>
@endif
    </td>


    <td>
    @if ($member->september > 0)
    <button class="btn" style="background-color:green; color: white;" >Rs.{{ $member->september }}</button>
@elseif ($member->september == 0)
<button class="btn" style="background-color:red; color: white;" ><b>✕</b></button>
@else
<button class="btn" style="background-color:red; color: white;" >{{ $member->september }}</button>
@endif
    </td>


    <td>
    @if ($member->october > 0)
    <button class="btn" style="background-color:green; color: white;" >Rs.{{ $member->october }}</button>
@elseif ($member->october == 0)
<button class="btn" style="background-color:red; color: white;" ><b>✕</b></button>
@else
<button class="btn" style="background-color:red; color: white;" >{{ $member->october }}</button>
@endif
    </td>


    <td>
    @if ($member->november > 0)
    <button class="btn" style="background-color:green; color: white;" >Rs.{{ $member->november }}</button>
@elseif ($member->november == 0)
<button class="btn" style="background-color:red; color: white;" ><b>✕</b></button>
@else
<button class="btn" style="background-color:red; color: white;" >{{ $member->november }}</button>
@endif
    </td>



    <td>
    @if ($member->december > 0)
    <button class="btn" style="background-color:green; color: white;" >Rs.{{ $member->december }}</button>
@elseif ($member->december == 0)
<button class="btn" style="background-color:red; color: white;" ><b>✕</b></button>
@else
<button class="btn" style="background-color:red; color: white;" >{{ $member->december }}</button>
@endif
    </td>













    <td>
    <button onclick="window.location.href='/update/{{ $member->id }}'" class="btn btn-success">Update</button>

    </td>


</tr>

@endforeach
</tbody>
</table>
</div>




<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>
</html>
