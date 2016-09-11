<!doctype html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">

    <title>Geolocation</title>
</head>
<body>

    <div class="container">
        <div class="map-search well">
            <p>A oldal helyes működéséhez kapcsold be mobilodon a "location" szolgáltatást!</p>
            <h3 class="title">Keressd meg Budapest nevezetességeit!</h3>
            <p>Mond el, hol vagy!</p>
            <button id="get_location" class="btn btn-success btn-lg btn-lerobbantam"><span class="glyphicon glyphicon-road" aria-hidden="true"></span>  Lerobbantam!</button>

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
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>