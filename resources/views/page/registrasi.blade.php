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
    <form action="" id="form">
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
        <label for="nama">Email</label>
        <input type="text" id="email" name="email" required>
        <div class="error"></div>
      </div>
      <div class="input-group">
        <label for="cpassword">Nomor Hp</label>
        <input type="no_hp" id="cpassword" name="no_hp" required>
        <div class="error"></div>
      </div>
      <div class="input-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
        <input type="checkbox" onclick=""> 
        <label for="showPassword">Tampilkan Kata Sandi</label>
        <div class="error"></div>
      </div>
      <div class="form-group text-center">
        <p style="margin-top: auto;">kembali</p>

      </div>
      <button type="submit">Register</button>
    </form>
  </div>
</body>
</html