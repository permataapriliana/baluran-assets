<!-- <!DOCTYPE html>
<html>
<head>
    <title>Login - Taman Nasional Baluran</title>
    <style>
        body { font-family: sans-serif; background: #e0f7fa; padding: 50px; }
        .container { width: 300px; margin: auto; background: #fff; padding: 20px; border-radius: 8px; }
        input { width: 100%; padding: 10px; margin: 5px 0; }
        button { width: 100%; padding: 10px; background: #00796b; color: white; border: none; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login Baluran</h2>
        @if($errors->any())
            <div style="color:red;">{{ $errors->first() }}</div>
        @endif
        <form method="POST" action="{{ url('/login') }}">
            @csrf
            <input type="email" name="email" placeholder="Email" required />
            <input type="password" name="password" placeholder="Password" required />
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html> -->















<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - TN Baluran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(to bottom right, #207b3c, #a4e2b2);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-card {
            background-color: #fff;
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        .login-card h2 {
            color: #207b3c;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .btn-green {
            background-color: #207b3c;
            color: white;
        }

        .btn-green:hover {
            background-color: #1a612f;
        }
    </style>
</head>
<body>

    <div class="login-card">
        <a href="/" class="nav-link text-success">Home</a>
        <div class="text-center mb-4">
            <img src="{{ asset('images/Logo_TN_Baluran.png') }}" alt="Logo" style="width: 60px;">
            <h2>Login</h2>
        </div>
        @if($errors->any())
            <div style="color:red;">{{ $errors->first() }}</div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Alamat Email</label>
                <input type="email" class="form-control" id="email" name="email" required autofocus>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Kata Sandi</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                <label class="form-check-label" for="remember">Ingat saya</label>
            </div>

            <button type="submit" class="btn btn-green w-100">Masuk</button>
        </form>

        
    </div>

</body>
</html>
