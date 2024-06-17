<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sosio Link - Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .logo-container {
            background-image: url('images/login.png');
            background-size: cover;
            height: 100vh;
        }
        .login {
            display: flex;
            justify-content: space-around;
        }
        .button {
            display: inline-block;
            width: 100%;
            font-weight: 400;
            color: #ffffff;
            text-align: center;
            vertical-align: middle;
            user-select: none;
            background-color: #000000;
            border: 1px solid transparent;
            padding: .575rem 18.75rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: .55rem;
            margin-top: 0.3rem;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        }
        .register-button {
            display: inline-block;
            width: 100%;
            font-weight: 700;
            color: #ffffff;
            text-align: center;
            vertical-align: middle;
            user-select: none;
            background-color: #4dceeb;
            border: 1px solid transparent;
            padding: .575rem 1.75rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: .55rem;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        }
        .form {
            display: block;
            width: 100%;
            height: calc(1.5em + .75rem + 2px);
            padding: 1.5rem 1rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #000000;
            background-color: #ffffff;
            background-clip: padding-box;
            border: 1px solid #101C2C;
            border-radius: .75rem;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 logo-container"></div>
            <div class="col-md-6 d-flex align-items-center">
                <div class="mx-auto">
                    <h2 class="login">Log In</h2>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-3">
                            <input type="text" name="username" class="form" placeholder="Username" required>
                            @error('username')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="password" name="password" class="form" placeholder="Password" required>
                            @error('password')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="register-button">Submit</button>
                        <a href="{{ route('register') }}" class="button" style="text-decoration: none; color:#ffffff;">Register</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
