<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <div class="container mt-5">
  @if($message = Session::get('success'))
    <div class="alert alert-success alert-block">
      <span><b>{{ $message }}</b></span>
    </div>
  @endif
    <h1>Admin Panel</h1>
    <a class="btn btn-dark text-right" href="/">Logout</a>
    <h3 class="mt-5">Booking List</h3>
    <div class="table-responsive mt-2">
    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">User ID</th>
      <th scope="col">User Name</th>
      <th scope="col">User Email</th>
      <th scope="col">User PhoneNumber</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    @foreach($products as $item)
    <tr>
      <td>{{$item->u_id}}</td>
      <td>{{$item->u_name}}</td>
      <td>{{$item->email}}</td>
      <td>{{$item->phone}}</td>
      <td><a href="{{$item->id}}/details" class="btn btn-dark">Details</a></td>
    </tr>
   @endforeach
  </tbody>
</table>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
