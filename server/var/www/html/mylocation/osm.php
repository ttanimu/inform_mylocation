<?
$fp=fopen("/tmp/location","r");
$pl=fgets($fp);
fclose($fp);
$l=explode(",",$pl);
?>
<html>
<head>
<title>Open street map</title>
<meta charset="UTF-8">
<meta http-equiv="refresh" content="10;URL=./osm.php">
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
<script type="text/javascript" src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js">
</script>
</head>
<body>
<h1>open street map</h1>
<div id="map" style="width:80%; height:80%"></div>
<script type="text/javascript">
<?
printf("var latlng = L.map(\"map\").setView([".$l[0].",".$l[1]."],18);\n");
?>
L.tileLayer("http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png",
  {
    attribution: "&copy; <a href='http://osm.org/copyright'>OpenStreetMap</a> contributors"
  }
).addTo(latlng);
<?
printf("L.marker([".$l[0].",".$l[1]."]).addTo(latlng);\n");
?>
</script>
</body>
</html>
