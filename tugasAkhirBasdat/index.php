
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/register_style.css">
    <title>Laman Registrasi</title>
</head>
<body>

    <header>
        <h1>BLISS.</h1>
        <h2>Login Page</h2>
    </header>

    <main>
        <div>
            <form action="proseslogin.php" method="post">
                <table>
                    <tr>
                        <td><label for="username">Username: </label></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="username" required></td>
                    </tr>

                    <tr>
                        <td><label for="email">Email: </label></td>
                    </tr>
                    <tr>
                        <td><input type="email" name="email" required></td>
                    </tr>

                    <tr>
                        <td><label for="password">Password: </label></td>
                    </tr>
                    <tr>
                        <td><input type="password" name="password" required></td>
                    </tr>
                </table>
                <div class="input" style="text-align:center;">
                    <input  class="btn btn-primary" type="submit" name="login" value="Sign Up"/>
                </div>
            </form>
        </div>

        <div>
            <img src="assets\images\cafe1.jpeg" alt="food">
        </div>

        <div id="footer">
            <p>Belum punya akun? <a href="lamanregistrasi.php">Daftar di sini</a></p>
        </div>
    </main>


</body>
</html>