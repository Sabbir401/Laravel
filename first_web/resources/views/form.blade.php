<!DOCTYPE html>
<html lang="en">

<head>
    @stack('title')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.rtl.min.css">
    <title>Document</title>
</head>

<body>
    <form action="{{ url('/') }}/register" method="post">
        @csrf
        @php
            $demo = 1;
        @endphp
        <div class="container">
            <h1 class="text-center">Registration</h1>
            <x-input type="text" name="name" label="Please enter your name" :demo="$demo" />
            <x-input type="email" name="email" label="Please enter your email"/>
            <x-input type="password" name="name" label="Password"/>
            <x-input type="password" name="password_confirmation" label="Confirm Password" />

            <button class="btn btn-dark">submit</button>
        </div>
    </form>
</body>

</html>
