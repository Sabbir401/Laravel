<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
       <ul class="nav justify-content-center">
           <li class="nav-item">
               <a class="nav-link active" href="{{url('/')}}">Home</a>
           </li>
           <li class="nav-item">
               <a class="nav-link" href="{{url('/customer/create')}}">Registration</a>
           </li>
           <li class="nav-item">
               <a class="nav-link" href="{{url('/customer/view')}}">Customer</a>
           </li>
       </ul>
    </body>
</html>
