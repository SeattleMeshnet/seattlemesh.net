<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Seattle Meshnet Project</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/css/coverage.css" />
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script>
    function initialize() {
        var seattle = new google.maps.LatLng(-122.2930339, 47.5832951);
        var mapOptions = {
            zoom: 11,
            center: seattle,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }

        var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

<?
    foreach(scandir("maps/") as $file) {
        if(strpos($file, ".kmz") !== false) {
            $jsvar = str_replace(".", "", $file);
            $jsvar = str_replace("-", "", $jsvar);
            $jsvar = "layer".$jsvar;
            echo "        var $jsvar = new google.maps.KmlLayer({\n";
            echo "            url: 'http://www.seattlemesh.net/maps/$file'\n";
            echo "        });\n";
            echo "        $jsvar.setMap(map);\n\n\n";
        }
    }
    ?>
    }

    google.maps.event.addDomListener(window, 'load', initialize);

    </script>
  </head>
  <body>
<? require('header.php'); ?>
    <div id="map-canvas"></div>
  </body>
</html>
