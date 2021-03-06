<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
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
                    edit
                    <form method="POST" action="/user/{{ $user->id }}">
                        @csrf
                    <table border="1">
                        <td>name</td>
                        <td style="font-size:24px;">
                            <input type="text" style="height:50px; font-size:24px; border-radius: 15px; outline: none" name="name" value="{{ $user->name }}" required>
                        </td>
                        <td>phone</td>
                        <td style="font-size:24px;">
                            <input type="text" style="height:50px; font-size:24px; border-radius: 15px; outline: none" name="phone" value="{{ $user->phone }}" required>
                        </td>
                    </table>
                    <input type="hidden" name="_method" value="put">
                    <a href='#' style="color: blue;text-decoration: none;" onclick='this.parentNode.submit(); return false;'>Update</a>
                    </form>
                </div>

            </div>
        </div>
    </body>
</html>
