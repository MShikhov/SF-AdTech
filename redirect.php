<?php
require 'db.php';
?>
<style> .back {
        position: absolute;
        width: 50px;
        height: 50px;
        top: 50px;

    }</style>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Редирект
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/main-page/style.css">
</head>

<body>
    <div class="logo" onClick="window.location.reload();">
        <img src="/img/buki-logo.svg" class="logo-img">
        <h1> BUKI</h1>
        </img>
    </div>
    <a href="/login.php">
        <img src="/img/back.svg" alt="back" class="back">
    </a>
    <div class="center">
        <div class="btns">
   <a href="/customer/customer-main.php" ><button class="btn btn-dark">Я заказчик</button></a>
   <a href="/executor/executor-main.php" ><button class="btn btn-dark">Я Исполнитель</button></a>
        </div>
    </div>
</body>

</html>
