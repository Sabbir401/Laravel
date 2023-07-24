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
    <form action="{{url('/')}}/register" method="post">
        @csrf
        <div class="container">
            <h1 class="text-center">Registration</h1>
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" name="name" id="" aria-describedby="HelpId"
                    placeholder="">
                {{-- <small id="HelpId" class="form-text text-muted">Help text</small> --}}
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" class="form-control" name="email" id="" aria-describedby="HelpId"
                    placeholder="">
                {{-- <small id="HelpId" class="form-text text-muted">Help text</small> --}}
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" name="pass" id="" aria-describedby="HelpId"
                    placeholder=""><br>
                {{-- <small id="HelpId" class="form-text text-muted">Help text</small> --}}
            </div>
            <button class="btn btn-primary">submit</button>
        </div>
    </form>
</body>

</html>
