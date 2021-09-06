<?
$fp=fopen("/tmp/location","r");
$pl=fgets($fp);
fclose($fp);
$l=explode(",",$pl);
?>
<html>
<head>
<title>map</title>
<meta http-equiv="refresh" content="10;URL=./map.php">
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=<Your API key>&callback=initMap">
</script>
<script type="text/javascript">
  function callback=initMap() {
<?
printf("    var latlng = new google.maps.LatLng(".$l[0].",".$l[1].");\n");
?>
    var opts = {
      zoom: 18,
      center: latlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(document.getElementById("map"), opts);
    var marker = new google.maps.Marker({
      position: latlng,
      map: map
    });
  }
</script>
</head>
<body onload="initMap()">
<h1>map</h1>
<div id="map" style="width:80%; height:80%"></div>
</body>
</html>
