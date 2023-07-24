<?php
include __DIR__ . '/item.php';
include __DIR__ . '/toy.php';
include __DIR__ . '/food.php';
include __DIR__ . '/enviroment.php';



$foods[
  new Food[$name => 'Almo Nature Cat Daily Lattina',$weight =>'150g',$price => '2.99',$image => 'https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg',$animal => 'gatto',$type => 'lattina'],
  new Food[$name => 'Royal Canin Mini Adult',$weight =>'300g',$price => '4.99',$image => 'https://arcaplanet.vtexassets.com/arquivos/ids/243820/royal-canin-size-cane-mini-adult.jpg',$animal => 'cane', $type =>'adult'],
  new Food[$name => 'Almo Nature Holistic Maintenance Medium Large Tonno e Riso',$weight ='250g',$price => '3.99',$image => 'https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg',$animal => 'cane',$type => 'adult'],
  new Food[$name => 'Mangime per Pesci Guppy in Fiocchi',$weight =>'250g',$price => '3.99',$image => 'https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg',$animal => 'pesci', $type => 'tutte le età'],
];
$eviroments[
  new Enviroment('Voliera Wilma in Legno','10kg','30.00','https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg','uccelli','3m','1.5m'),
  new Enviroment('Cartucce Filtranti per Filtro EasyCrystal','100g','4.99','https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg','pesci','5cm','6cm'),
];
$toys[
  new Toy('Kong Classic','200g','7.99','https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg','cani','masticazione'),
  new Toy('Topini di peluche Trixie','50g','3.99','https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg','gatti','corsa'),
];
  

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>petcommerce</title>
</head>
<body>
  <?php foreach($foods as $food) : ?>
  <ul>
    <li><?=$name?></li>
    <li><?=$weight?></li>
    <li><?=$price?></li>
    <li><img src="<?=$image?>" alt="<?=$name?>"></li>
    <li><?=$animal?></li>
    <li><?=$type?></li>
  </ul>
  <? endforeach ?>
</body>
</html>