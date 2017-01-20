<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Project Web Prog</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-image: url("http://img0.gtsstatic.com/wallpapers/6a01097716fdb39d2e8c7cf42a6b322e_large.jpeg");
                background-position: center;
                background-color: #fff;
                color: white;
                font-family: 'Raleway', sans-serif;
                font-weight: 200;
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
                border-style: solid;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
font-weight: bold;
            }

            .links > a {
                color: white;
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
                    <a href="{{ url('/login') }}">Login</a>
                    <a href="{{ url('/register') }}">Register</a>
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    VieleNews
                </div>

                <div class="links">
                    <a href="http:/dota2" target="blank">Gaming</a>
                    <a href="http:/news" target="blank">News</a>
                    <a href="http:/sport" target="blank">Sport</a>
                    <a href="http:/eatery" target="blank">Eatery</a>
                </div>
            </div>
        </div>
    </body>
</html>
						