<!DOCTYPE html>
<html lang="en">

<head>
    @stack('title')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.rtl.min.css">
    <title>Document</title>
    <style>
        .paraller{
            display: flex;
        }
        .paraller > div{
            margin: 10px;
            width: 50%
        }
    </style>
</head>

<body>
    <form action="{{ url('/') }}/customer" method="post">
        @csrf
        @php
            $demo = 1;
        @endphp
        <div class="container">
            <h1 class="text-center">Registration</h1>
            <div class="paraller">
                <div><x-input type="text" name="name" label="Name" /></div>
                <div><x-input type="email" name="email" label="Email" /></div>
            </div>
            <div class="paraller">
                <div><x-input type="password" name="password" label="Password"/></div>
                <div><x-input type="password" name="password_confirmation" label="Confirm Password" /></div>
            </div>
            <div class="paraller">
                <div><x-input type="text" name="states" label="State" /></div>
                <div><x-input type="text" name="country" label="Country" /></div>
            </div>
            <div class="parallel">
                Address
            </div>
            <div class="paraller">
                    <textarea rows="2" cols="50" name="address" style="width: 100%"></textarea>
            </div>
            <div class="paraller">
                <div>Gender<br>
                    <input type="radio" name="gender" value="M"><label>Male</label>
					<input type="radio" name="gender" value="F"><label>Female</label>
					<input type="radio" name="gender" value="O"><label>Other</label><br>
                </div>
                <div><x-input type="date" name="dob" label="Date of Birth" /></div>
            </div>


            <button class="btn btn-primary" >submit</button>
        </div>
    </form>
</body>

</html>
