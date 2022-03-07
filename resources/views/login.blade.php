<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Silahkan Masuk</title>

    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/b8a4c1841d.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="login">
        <div class="avatar">
            <i class="fa fa-user"></i>
        </div>

        <h2>Silahkan Masuk</h2>

        <form action="">
            <div class="box-login">
                <i class="fas fa-envelope"></i>
                <input type="text" placeholder="Masukkan Email.." required>
            </div>

            <div class="box-login">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Masukkan Kata Sandi.." required>
            </div>

            <input type="checkbox" id="ingat">
            <label for="ingat">Ingat saya</label>

            <button type="submit" class="btn-login">MASUK</button>
        </form>

        <div class="bottom">
            <a href="#">Lupa kata sandi</a>
            <br><br><br>
            <span>Belum punya akun? klik <a href="#">daftar</a></span>
        </div>
    </div>
</body>

</html>