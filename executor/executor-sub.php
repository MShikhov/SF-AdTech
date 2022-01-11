<?php
require '/OpenServer/domains/SFAdTech/db.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Исполнитель
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/main-page/style.css">
    <link rel="stylesheet" href="/executor/executor.css">
</head>

<body>
    <header>
    <div class="logo" onClick="window.location.reload();">
        <img src="/img/buki-logo.svg" class="logo-img">
        <h1> BUKI</h1>
        </img>
    </div>
    </header>
   <main style="text-align: center;">
    <a href="/executor/executor-main.php" style="float: left;">
        <img src="/img/back.svg" alt="back" class="back">
    </a>
    <a href="/executor/executor-main.php">
    <button class="btn btn-primary">Все offer-ы</button>
    </a>
    <p style="text-align: center; font-size:20px">Добро пожаловать, <?php $qq=R::findlast('users'); echo $qq->login ?></p>
  
<p style="text-align: center;">Доступные offer-ы:</p>
    <?php include '/OpenServer/domains/SFAdTech/executor/executor-offers-unsub.php'?>
   </main>
</body>

</html>