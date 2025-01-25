

<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="Style/style.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <div class="login-card"></div>
        <form class="login-form" action="" method="POST">
            <h2>Login</h2> 
            <input type="text" placeholder="username"  id="username" name="username" required />
            <input type="text" placeholder="password"  id="password" name="password" required />
            <a href="#">forget ur password</a>
            <button type="submit">login</button>

            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $valid_username = "Leony";
                $valid_password = "Leony12345";
                
                $username = $_POST['username'];
                $password = $_POST['password'];
                
                if ($username === $valid_username && $password === $valid_password) {
                    header("Location: Website/homepage.html ");
                    exit(); 
                } else {
                    echo "<p class='error-message'>Login gagal!<br> Username atau password salah.</p>";
                }
            }
            ?>


        </form>

    </div>


    
</body>
</html>