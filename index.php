<!doctype html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <title>Geolocation</title>
</head>
<body>

    <div class="container">
        <div class="map-search well">
            <p>A oldal helyes működéséhez kapcsold be mobilodon a "location" szolgáltatást!</p>
            <h3 class="title">Keressd meg Budapest nevezetességeit!</h3>
            <p>Mond el, hol vagy!</p>
            <button id="get_location" class="btn btn-success btn-lg">Itt vagyok!</button>

<!--            <input type="text" id="map-search-autocomplete" class="map-search-autocomplete">-->
        </div>
        <h2>Places</h2>
       <div id="places">
           <?php require 'list.php'; ?>
       </div>
    </div>
    <div id="footer">
        <div class="container">
            <h4>
            Készítette Poroszkai Attila, <a href="mailto:poroszkai.attila@live.com">poroszkai.attila@live.com</a>,
                                        <a href="tel:+36303099797">+36303099797</a>
            </h4>
            <br />
            <br />
            <br />
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="app.js"></script>
    <!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyArA88vEieAl1ZkFauexoPb2TyKApXLZ4A&libraries=places&callback=initMap"></script> -->
</body>
</html>