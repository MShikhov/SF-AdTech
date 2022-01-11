
<?php
$offer_data = $_POST;
if (isset($offer_data['do_send'])) {
    $offer = R::dispense('offers');
    $offer->name = $offer_data['name'];
    $offer->number = $offer_data['number'];
    $offer->url =  $offer_data['url'];
    $offer->topic =  $offer_data['topic'];
    R::store($offer);
}

$findOffer = R::findall('offers');
if ($findOffer) { // Если Массив не Пустой
    foreach ($findOffer as $res) {

        echo $x='
        <form method="POST" name="form" ><div class="offer" style="height: 350px !important;
        width: 400px; color: black; margin-top:50px">
        
        <button class="btn btn-danger offset-9 "type="submit" name="del">Удалить</button>
       
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
</div></form>
';
 if (isset($offer_data['del'])) {
$delete = R::findOne('offers','id=?',array($res['id']));
   R::trash($delete);
 
    
 }

    }
  
}

