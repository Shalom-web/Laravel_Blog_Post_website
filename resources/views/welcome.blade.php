<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My Blog</title>
        
        <link rel="stylesheet" href="/css/welcome.css">
       
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Welcome To My Blog-Post
                </div>

                <div class="links">
                    <p>You Can follow or leave me a message</p>
                    <a href="https://armstrongshalom1@gmail.com"><img src="image/email.png" height="50px", width="60px" alt="Email"></a>
                    <a href="https://www.facebook.com"><img src="image/facebook.jfif" height="50px", width="50px" alt="Faceebook"></a>

                </div>
            </div>
        </div>
    </body>
</html>