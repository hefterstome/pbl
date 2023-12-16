<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/register_style.css">
    <title>Register</title>
</head>

<body>
    <div class="container">
        <form action="{{ route('warga.store') }}" id="form" method="post">
            @csrf
            <h1>Registrasi</h1>
            <div class="input-group">
                <label for="nik">NIK</label>
                <input type="text" id="nik" name="nik" required>
                <div class="error"></div>
            </div>
            <div class="input-group">
                <label for="nama">Nama</label>
                <input type="text" id="nama" name="nama" required>
                <div class="error"></div>
            </div>
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
                <div class="error"></div>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
                <div class="error"></div>
            </div>
            <div class="input-group">
                <label for="no_hp">Nomor Hp</label>
                <input type="tel" id="no_hp" name="no_hp" required>
                <div class="error"></div>
            </div>
            <button type="submit">Register</button>
        </form>
    </div>
</body>

</html