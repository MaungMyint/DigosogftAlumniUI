<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>ICTRC</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <link rel="shortcut icon" href="../frontend/images/logos.png" />
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body><br>
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Register</div>

                <div class="card-body"> --}}

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 my-4">
                <br>
                <div class="card">
                    <br>
                    <div class=""  style="font-size: 30ppx;padding-left:40px "><h4><strong> Register</strong></h4></div>

                    <div class="card-body">
                    <form method="POST" action="#">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">User Name</label>

                            <div class="col-md-6 md-form">
                                <input id="form1" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="" required autocomplete="name" autofocus>

                                    <span class="invalid-feedback" role="alert">

                                    </span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">


                                    <span class="invalid-feedback" role="alert">

                                    </span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    <span class="invalid-feedback" role="alert">
                                    </span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <center>
                                <button type="submit" class="btn  btn-sm float-right" style="background-color: #202d5b;color: white">
                                    Register
                                 </button>
                                </center>

                            </div>

                        </div>

    <p style="text-align: center">Already have an account ? <a href="{{ 'loginusers' }}">Sign in</a></p>
                    </form>

                </div>

            </div>
        </div>
    </div>
</div>
</body>
</html>
