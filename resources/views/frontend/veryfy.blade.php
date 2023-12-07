<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="/css/Login.css">
</head>
<body>


    <div class="wrapper">
        <form action="{{route ('cobalogin')}}" method="POST">
            
            <h1>Verifikasi Email</h1> 
            
            <hr color ="darkorange">
            

            <div class="register-link">

                <p>Verifikasi telah dikirim ke email anda<a href="/login"> klik disini</a></p>
            </div>

        </form>
    </div>
</body>
</html>