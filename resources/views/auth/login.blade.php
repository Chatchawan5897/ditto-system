<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เข้าสู่ระบบ | Ditto Backoffice</title>

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Google Font --}}
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            font-family: 'Prompt', sans-serif;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-image: url('/images/login-bg.png'); /* 👈 เปลี่ยนรูปที่นี่ */
        }

        .login-container {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            backdrop-filter: blur(3px); /* ทำให้ดูสวยขึ้น */
        }

        .login-card {
            background: rgba(255, 255, 255, 0.9);
            max-width: 420px;
            width: 100%;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }

        .login-title {
            font-weight: 600;
        }
    </style>
</head>
<body>

<div class="login-container">
    
    <div class="login-card">
        <h3 class="text-center mb-4 login-title">เข้าสู่ระบบ</h3>

        {{-- ERROR --}}
        @if($errors->any())
            <div class="alert alert-danger">
                {{ $errors->first() }}
            </div>
        @endif

        {{-- FORM --}}
        <form action="/login" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">อีเมล</label>
                <input type="text" name="email" value="admin@ditto.com" class="form-control form-control-lg" required autofocus>
            </div>

            <div class="mb-3">
                <label class="form-label">รหัสผ่าน</label>
                <input type="password" name="password" value="123456" class="form-control form-control-lg" required>
            </div>

            <button class="btn btn-dark w-100 btn-lg">เข้าสู่ระบบ</button>
        </form>
    </div>

</div>

</body>
</html>
