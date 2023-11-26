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

        .bg-center {
            background-position: center;
        }

        .bg-dots-darker {
            background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")
        }

        .bg-gray-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity));
        }
    </style>
</head>

<body class="bg-center bg-dots-darker bg-gray-100">
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
