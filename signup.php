<?php
require 'db.php';
$data = $_POST;
if (isset($data['do_signup'])) {

    $errors = array();
    if (trim($data['login'] == "")) {
        $errors[] = "Введите логин";
    }
    if (trim($data['email'] == "")) {
        $errors[] = "Введите Email";
    }
    if ($data['password_2'] != $data['password']) {
        $errors[] = "Неверный пароль";
    }
    if (R::count('users', 'login=?', array($data['login'])) > 0) {
        $errors[] = 'Пользователь с таким логином уже существет';
    }
    if (R::count('users', 'email=?', array($data['email'])) > 0) {
        $errors[] = 'Пользователь с таким email уже существет';
    }
    if (empty($errors)) {
        $user = R::dispense('users');
        $user->login = $data['login'];
        $user->email = $data['email'];
        $user->password =  $data['password'];
        R::store($user);
       sleep(1);
        header('location: http://sfadtech/redirect.php');
        exit();
    } else {
        echo '<div style="color: red">' . array_shift($errors) . '</div><hr>';
    }
}
?>
<style>
    body {
        background-color: darkkhaki !important;
    }

    .button {
        background-color: #4CAF50;
        /* Green */
        border: none;
        border-radius: 10px;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
    }

    input {
        width: 300px;
        font-size: 13px;
        padding: 6px 0 4px 10px;
        border: 1px solid #cecece;
        background: #F6F6f6;
        border-radius: 8px;
    }
    .back {
        position: absolute;
        width: 50px;
        height: 50px;
        top: 50px;

    }
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
<link rel="stylesheet" href="/main-page/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<div class="logo" onClick="window.location.reload();">
        <img src="/img/buki-logo.svg" class="logo-img">
        <h1> BUKI</h1>
        </img>
    </div>
    <a href="/main-page/index.php">
        <img src="/img/back.svg" alt="back" class="back">
    </a>
<p style="text-align: center;">
    <button type="submit" onclick="location.href ='login.php'" class="btn btn-dark">Авторизоваться</button>
</p>
<form action="signup.php" method="POST" style="text-align: center; margin-top:50px">
    <p><strong>Ваш логин</strong>
        <input type="text" name="login" value="<?php echo @$data['login'] ?>">
    </p>
    <p><strong>Ваш Email</strong>
        <input type="email" name="email" value="<?php echo @$data['email'] ?>">
    </p>
    <p><strong>Ваш пароль</strong>
        <input type="password" name="password" value="<?php echo @$data['password'] ?>">
    </p>
    <p><strong>Повторите пароль</strong>
        <input type="password" name="password_2" value="<?php echo @$data['password_2'] ?>">
    </p>
    <p>
        <button type="submit" name="do_signup" class="button">Зарегистрироваться</button>
    </p>
</form>
</body>
</html>