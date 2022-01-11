
<?php
$offer_data = $_POST;
$findOffer = R::findall('offers');

  if ($findOffer) { // Если Массив не Пустой
    foreach ($findOffer as $res) {

        echo $x = '
        <form method="GET" name="form" ><div class="offer" style="height: 350px !important;
        width: 400px; color: black; margin-top:50px">
        <div>
        <button name="sub" type="submit"  class="btn btn-success" >Подписаться</button>
         </div>
        <p>Название offer-a:
<div id="offer-name">' . $res['name'] . '</div>
</p>
<p>Стоимость перехода:
<div id="offer-price">' . $res['number'] . '</div>
</p>
<p>URL offer-a:
<div id="offer-url" >' . '<a href="' . $res['url'] . '" target="_blank">Перейти на offer</a>' . '</div>
</p>
<p>Тема сайта:
<div id="offer-topic">' . $res['topic'] . '</div>
</p>
</div>  

</form>

';
    }
}


