<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/register_style.css">
    <title>Register</title>
</head>

<body>
    <div class="container">
        <form action="{{ route('warga.store') }}" id="form" method="post">
            @csrf
            <h1>Registrasi</h1>
            <div class="input-group">
                @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error}}</li>
                    @endforeach
                  </ul>
                  <a href="" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></a>
                </div>
              @endif
            </div>
            <div class="input-group">
                <label for="nik">NIK</label>
                <input type="text" id="nik" name="nik">
                <div class="error"></div>
            </div>
            <div class="input-group">
                <label for="nama">Nama</label>
                <input type="text" id="nama" name="nama">
                <div class="error"></div>
            </div>
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email">
                <div class="error"></div>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password">
                <div class="error"></div>
            </div>
            <div class="input-group">
                <label for="no_hp">Nomor Hp</label>
                <input type="tel" id="no_hp" name="no_hp">
                <div class="error"></div>
            </div>
            <button type="submit">Register</button>
        </form>
    </div>
</body>

</html