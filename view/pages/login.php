<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>UnityVerse</title>
    <link rel="icon" href="../img/logo.png" type="image/png">
</head>
<body>
   <section>
         
   </section>
</body>
<section class="tudo">
    <div class="login-container">
        <img src="../img/logo.png" alt="logo">
        <form action="login_process.php" method="POST">
            <h2>Login</h2>
            <div class="input-group">
                <input placeholder="Username" id="username" name="username" required>
                <label for="username">Username</label>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" id="password" name="password" required>
                <label for="password">Password</label>
            </div>
            <button type="submit">Login</button>
        </form>
        <section class="cad-user">
          <a href="register.php">Não tem uma conta?Registrar</a>  
        </section>
        
    </div>
</section>

</html>