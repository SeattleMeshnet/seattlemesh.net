<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Seattle Meshnet Project</title>
    <link rel="stylesheet" href="assets/css/coverage.css" />
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script>
        function initialize() {
            var mapOptions = {
                zoom: 11,
                center: new google.maps.LatLng(-122.2930339, 47.5832951),
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }

            var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

<?
    foreach(scandir("maps/") as $file) {
        if(strpos($file, ".kmz") !== false) {
            $jsvar = str_replace(".", "", $file);
            $jsvar = str_replace("-", "", $jsvar);
            $jsvar = "layer".$jsvar;
            echo "            var $jsvar = new google.maps.KmlLayer({\n";
            echo "                url: 'https://seattlemesh.net/maps/$file'\n";
            echo "            });\n";
            echo "            $jsvar.setMap(map);\n\n\n";
        }
    }
    ?>
    }
        google.maps.visualRefresh = true;
        google.maps.event.addDomListener(window, 'load', initialize);

    </script>
<?php
    $navbarclass="navbar-fixed-top";
    $map = true;
    require 'header.php';
    ?><div id="map-canvas"></div><?php
    require 'footer.php'; ?>
  </body>
</html>
