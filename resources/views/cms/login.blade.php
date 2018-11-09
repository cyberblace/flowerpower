<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">


    <title>Login</title>

    <link href="/css/login.css" rel="stylesheet">

</head>
<body>


iv>
        </div>

    </div>
</div>

<div class="login">

    <div class="login-screen">
        {{--<div class="app-title">--}}
            {{--<h1>Login</h1>--}}
        {{--</div>--}}
        <a href="/"><img class="logo" src="/images/tim_rebers.png"></a>

        <form method="POST" action="/login">

            {{csrf_field() }}

            <div class="login-form">
                <div class="form-group">
                    <label for="password"></label>
                    <input type="email" class="form-control" placeholder="Email" id="email" name="email">
                </div>
                <br>
                <div class="form-group">
                    <label for="password"></label>
                    <input type="password" class="form-control" placeholder="Password" id="password" name="password">

                </div>
                <br>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>

