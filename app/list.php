<?php 

require 'db.php';

if (!empty($_POST)) {
	$lat = (float) $_POST['lat'];
	$lng = (float) $_POST['lng'];
	$list = '<div class="alert alert-success" role="alert"><h4>A jelenlegi helyzetedhez képest, távolsági sorrendben megkaptad a nevezetességek listáját.</h4></div>';
} else {
	// Budapest 0 kilometerko
	$lat = (float) '47.4977973';
	$lng = (float) '19.0401857';
	$list = '<div class="alert alert-info" role="alert"><h4>Mivel még nem adtad meg, hol vagy, az oldal alapbeállításai a budapesti <a target="_blank" href="https://hu.wikipedia.org/wiki/%E2%80%9E0%E2%80%9D_kilom%C3%A9terk%C5%91">0 kilométerkőre</a> mutatnak.</h4></div>';
}


$locations = $db->query("SELECT id, address, lat, lng, telephone, email, website, name, ( 6371 * acos( cos( radians( $lat ) ) * cos( radians( lat ) ) * cos( radians( lng ) - radians( $lng ) ) + sin( radians( $lat ) ) * sin( radians( lat ) ) ) ) AS distance FROM locations HAVING distance < 10000 ORDER BY distance LIMIT 0 , 20;
");

$locations = $locations->fetchAll(PDO::FETCH_ASSOC);

foreach ($locations as $location) {
            $list .= '<h3>' . $location['name'] . '</h3><br />';
            $list .= '<h4><a href="tel:' . $location['telephone'] . '">' . $location['telephone'] . '</a></h4><br />';
            $list .= '<b>Távolság: </b>' . round($location['distance'], 2, PHP_ROUND_HALF_UP) . ' kilométer távolságra tőled.<br />';
            $list .= '<b>Cím: </b>' . $location['address'] . '<br />';
            $list .= '<b>Email: </b>' . $location['email'] . '<br />';
            $list .= '<b>Web: </b>' . $location['website'] . '<br />';
            $list .= '<br /><br /><hr>';
        }

// Ez azert kell, mert az ajax csak ezt a filet hivja meg, igy ajax request eseten innen kell echozni a listat
if (!empty($_POST)) {
    echo $list;
}