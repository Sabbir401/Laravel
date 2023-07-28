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
        .paraller {
            display: flex;
        }

        .paraller>div {
            margin: 10px;
            width: 50%
        }
    </style>
</head>

<body>
    <form action="{{ $url }}" method="post">
        @csrf
        @php
            $demo = 1;
        @endphp
        <div class="container">
            <h1 class="text-center">{{ $title }}</h1>
            <div class="paraller">
                <div>
                    <label>Name</label><br>
                    <input type="text" name="name" class="from-control" value="{{ $customer->name }}" />
                </div>

                <div>
                    <label>Email</label><br>
                    <input type="text" name="email" value="{{ $customer->email }}" />
                </div>

            </div>
            <div class="paraller">
                <div>
                    <label>Password</label><br>
                    <input type="password" name="password" />
                </div>
                <div>
                    <label>Confirm Password</label><br>
                    <input type="password" name="password_confirmation" />
                </div>
            </div>
            <div class="paraller">
                <div>
                    <label>States</label><br>
                    <input type="text" name="states" value="{{ $customer->states }}" />
                </div>
                <div>
                    <label>Country</label><br>
                    <input type="text" name="country" value="{{ $customer->country }}" />
                </div>
            </div>
            <div class="parallel">
                <div>
                    <label>Address</label><br>
                    <textarea name="address">{{ $customer->address }}</textarea>
                </div>
            </div>

            <div class="paraller">
                <div>Gender<br>
                    <input type="radio" name="gender" value="M"
                        {{ $customer->gender == 'M' ? 'checked' : '' }} /><label>Male</label>
                    <input type="radio" name="gender" value="F"
                        {{ $customer->gender == 'F' ? 'checked' : '' }} /><label>Female</label>
                    <input type="radio" name="gender" value="O"
                        {{ $customer->gender == 'O' ? 'checked' : '' }} /><label>Other</label><br>
                </div>

                <div>
                    <label>Date of Birth</label><br>
                    <input type="date" name="dob" value="{{ $customer->dob }}" />
                </div>
            </div>


            <button class="btn btn-primary">submit</button>
        </div>
    </form>
</body>

</html>
