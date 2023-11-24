<!DOCTYPE html>
<html>

<head>
    <title>Signup</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Add custom styles if needed */
        body {
            padding-top: 50px;
            background-color: #f8f9fa;
        }

        .card-signup {
            max-width: 400px;
            margin: 0 auto;
            margin-top: 100px;
            border-radius: 8px;
        }
    </style>
</head>

<body>
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card card-signup">
            <div class="card-body">
                <h2 class="card-title text-center mb-4">Signup</h2>
                <form method="POST" action="{{ route('signup.post') }}">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Name" required>
                    </div>
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                    </div>
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                    </div>
                    <button class="btn btn-primary btn-block" type="submit">Signup</button>
                    <p class="mt-3 text-center">Already have an account? <a href="{{ route('login') }}">Login</a></p>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
