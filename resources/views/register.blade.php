<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
            padding: 20px;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 350px;
        }
        h2 {
            margin-bottom: 20px;
        }
        input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        .error {
            color: red;
            font-size: 14px;
            text-align: left;
        }
        button {
            width: 100%;
            padding: 12px;
            background: blue;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 15px;
        }
        p {
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Register</h2>
        @if(session('success'))
            <p style="color: green;">{{ session('success') }}</p>
        @endif
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Nama" required>
            @error('name')
                <div class="error">{{ $message }}</div>
            @enderror
            
            <input type="email" name="email" placeholder="Email" required>
            @error('email')
                <div class="error">{{ $message }}</div>
            @enderror
            
            <input type="password" name="password" placeholder="Password" required>
            @error('password')
                <div class="error">{{ $message }}</div>
            @enderror

            <input type="password" name="password_confirmation" placeholder="Konfirmasi Password" required>
            @error('password_confirmation')
                <div class="error">{{ $message }}</div>
            @enderror

            <button type="submit">Register</button>
        </form>
        <p>Sudah punya akun? <a href="{{ route('login') }}">Login</a></p>
    </div>
</body>
</html>
