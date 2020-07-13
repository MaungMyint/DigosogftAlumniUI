<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="shortcut icon" href="../frontend/images/logos.png"/>
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
<link rel="stylesheet" href={{asset("css/style.css")}}>

    <title>ICTRC</title>

</head>
<body>
	<img class="wave" src={{asset("img/wave.png")}}>
	<div class="container">
		<div class="img">
			<img src={{asset("img/bg.svg")}}>
		</div>
		<div class="login-content">



			<form action="#" method="POST">
				@csrf
				<img src={{asset("img/avatar.svg")}}>
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
                              <h5>User E-mail</h5>






                              <input type="email"  id="email" class="input
                                @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
                                 required autocomplete="email" autofocus }}>

                                 {{-- @error('email')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                             @enderror --}}

           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i">
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
                           <h5>Password</h5>






                           <input id="password" type="password" class="input
                           @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" }}>

                            {{-- @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror --}}

            	   </div>
            	</div>
            	@csrf
            	<input type="submit" class="btn" value="Login">
            </form>
        </div>
    </div>
    <script type="text/javascript" src={{asset("js/main.js")}}></script>

</body>
</html>
