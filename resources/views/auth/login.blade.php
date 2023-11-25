<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 50px;
            background-color: #f8f9fa;
        }

        .card-login {
            max-width: 400px;
            margin: 0 auto;
            margin-top: 100px;
            border-radius: 8px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card card-login">
            <div class="card-body">
                <h2 class="card-title text-center mb-4">Login</h2>
                <form method="POST" action="{{ route('login.post') }}">
                    @csrf
                    @if (session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                    </div>
                    <button class="btn btn-primary btn-block" type="submit">Login</button>
                    <p class="mt-3 text-center">Don't have an account? <a href="{{ route('signup') }}">Register</a></p>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
