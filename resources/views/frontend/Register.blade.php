<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="/css/Register.css">
</head>
<body>


    <div class="wrapper">
        <form action="/register" method="POST">
            {{csrf_field()}}
            <h1>Register</h1>
            <hr color ="darkorange">
            <div class="input-box">
                <input type="text" name = "name"placeholder="username" require>
                <i class='bx bxs-user'></i>
            </div>

            <div class="input-box">
                <input type="email" name = "email"placeholder="email" require>
                <i class='bx bxs-envelope' ></i>
            </div>

            <div class="input-box">
                <input type="Password" name = "password" placeholder="password" require>
                <i class='bx bxs-lock-alt' ></i>
            </div>

            <button type="submit" class="btn">Register</button>

            <div class="register-link">
                <p>Do you  have account? <a href="/login">login</a></p>
            </div>

        </form>
    </div>
</body>
</html>