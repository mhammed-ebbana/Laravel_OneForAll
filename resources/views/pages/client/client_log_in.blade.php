<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/client/client_log_in.css')}}">
    <title>log in</title>
</head>
<body>
    <div class="all">
<div class="image_container">

</div>
<div class="form_container">

<form action="" method="POST" class="form_logoin">
    @csrf
    <div class="client_email">
        <span>Email</span>
        <input type="email" name="client_email" id="" required >
    </div>
    <div class="client_passwprd">
        <span>Password</span>
        <input type="password" name="client_passwprd" id=""  required >
    </div>
    <div>
        <button type="submit">Log In</button>
        <span><a href="/register">Creat an account</a></span>

    </div>



</form>
</div>

</div>
</body>
</html>