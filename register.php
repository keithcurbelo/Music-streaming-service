<?php
 include("includes/handlers/register-handler.php");
 include("includes/handlers/login-handler.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Songify</title>
</head>

<body>
    <div id="input-container">
        <!-- LOGIN USER -->
        <form action="register.php" id="login-form" method="POST">
            <h2>Login to your account</h2>
            <p>
                <label for="login-username">Username</label>
                <input type="text" id="login-username" placeholder="e.g. John Doe" required>
            </p>
            <p>
                <label for="login-password">password</label>
                <input type="password" id="login-password" required>
            </p>
            <button type="submit" name="login-button">Submit</button>
        </form>
        <!-- REGISTER USER -->
        <form action="register.php" id="register-form" method="POST">
            <h2>Create your free account</h2>
            <p>
                <label for="register-username">Username</label>
                <input type="text" id="register-username" placeholder="e.g. johndoe" required>
            </p>
            <p>
                <label for="register-firstname">First name</label>
                <input type="text" id="register-firstname" placeholder="e.g. John" required>
            </p>
            <p>
                <label for="register-lastname">Last name</label>
                <input type="text" id="register-lastname" placeholder="e.g. Doe" required>
            </p>
            <p>
                <label for="register-email">Email</label>
                <input type="email" id="register-email" placeholder="Your email" required>
            </p>
            <p>
                <label for="register-email2">Confirme email</label>
                <input type="email" id="register-email2" placeholder="Confirm email" required>
            </p>
            <p>
                <label for="register-password">Password</label>
                <input type="password" id="register-password" placeholder="Your password" required>
            </p>
            <p>
                <label for="register-password2">Confirm password</label>
                <input type="password" id="register-password" placeholder="Verify password" required>
            </p>
            <button type="submit" name="register-button">SIGN UP!</button>
        </form>
    </div>
</body>

</html>