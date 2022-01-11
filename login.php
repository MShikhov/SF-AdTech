<?php
require '/OpenServer/domains/SFAdTech/db.php';
$data = $_POST;
if (isset($data['do_login'])) {
    $errors = array();
    $user = R::findOne('users', 'login=?', array($data['login']));
    $abuser = R::findOne('users', 'password=?', array($data['password']));
    if ($user) {
        if ($data['password'] == $abuser->password) {
            $_SESSION['logged_user'] = $user;

            sleep(1);

            header('location: http://sfadtech/redirect.php');

            exit();
        } else {
            $errors[] = "Неправильный пароль";
        }
    } else {
        $errors[] = "Пользователь c таким логином не найден";
    }
    if (!empty($errors)) {
        echo '<div style="color: red">' . array_shift($errors) . '</div>' . '<hr>';
    } else {
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
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        border-radius: 10px;
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
    <title>Авторизация</title>
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
        <button type="submit" onclick="window.location.href = '/signup.php'" class="btn btn-dark">Зарегистрироваться</button>
    </p>
    <form action="login.php" method="POST" style="text-align: center;">


        <p><strong>Ваш логин</strong>
            <input type="text" name="login" value="<?php echo @$data['login'] ?>">
        </p>

        <p><strong>Ваш пароль</strong>
            <input type="password" name="password" value="<?php echo @$data['password'] ?>">
        </p>

        <p>
            <button type="submit" name="do_login" class="button">Войти</button>
        </p>

    </form>
</body>

</html>