<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title></title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
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
            padding-top: 0;
            padding-bottom: 0;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        /*.content {
                text-align: center;
            }*/

        /*.title {
                font-size: 84px;
            }*/

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .img-fluid {
            width: 100%;
            /*padding-right: 100%;*/
        }



        /*.m-b-md {
                margin-bottom: 30px;
            }*/
        /*.flex-center{
                background-image: url(https://venngage-wordpress.s3.amazonaws.com/uploads/2018/09/Colorful-Geometric-Simple-Background-Image.jpg);
                background-repeat: no-repeat; 
                background-size: 100%;
*/
        /*}*/
    </style>
</head>

<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a>
            <a href="{{ url('/home') }}">Home</a>
            @else
            <a href="{{ url('admin_register') }}">Admin</a>
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
            @endif
            @endauth
        </div>
        <h2 style="padding-left: 50px;">Your Bank</h2>
        @endif

        <!-- <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div> -->
        <div class="container">
            <div class="row">
                <center>
                    <h1><b style="color: black;">DEPOSIT SCHEMES</b></h1>
                </center>
                <br>
                <div class="col-sm-4">
                    <img src="https://static-news.moneycontrol.com/static-mcnews/2018/02/money7-770x433.jpg" class="img-fluid">
                    <br>
                    <br>
                    <p>
                        Fixed Deposit
                        A fixed deposit (FD) is a financial instrument provided by banks which provides investors with a higher rate of interest than a regular savings account, until the given maturity date. It may or may not require the creation of a separate account.
                    </p>
                    <button class="btn btn-success submit" style="color: #000;">Read More ></button>

                </div>
                <div class="col-sm-4">
                    <img src="https://i2-prod.mirror.co.uk/incoming/article12460062.ece/ALTERNATES/s615/money-coins-cash-generic.jpg" class="img-fluid" style="width: 90%;">
                    <br>
                    <p>
                        Recurring Deposit
                        Recurring Deposit is a special kind of Term Deposit offered by banks in India which help people with regular incomes to deposit a fixed amount every month into their Recurring Deposit account and earn interest at the rate applicable to Fixed Deposits.


                    </p>
                    <button class="btn btn-success submit" style="color: #000;">Read More ></button>

                </div>
                <div class="col-sm-4">
                    <img src="https://www.thewaystowealth.com/wp-content/uploads/2017/03/Featured-Image_-How-To-Save-Money_-100-Tips-To-Save-Money-Fast.png" class="img-fluid" style="width: 110%;">
                    <br>
                    <br>
                    <p>
                        Reinvestment Deposit
                        REINVESTMENT PLAN. This product is a variant of Term Deposits but instead of Interest being paid out at a regular frequency during the period of deposit; here it is paid out only at the time of maturity. Regular interest is added to the principal


                    </p>
                    <button class="btn btn-success submit" style="color: #000;">Read More></button>

                </div>


            </div>

        </div>



    </div>

</body>

</html>