<!DOCTYPE html>
<?
$x=$_GET["x"];
$y=$_GET["y"];
header("HTTP/1.1 200 OK");
$fp=fopen("/tmp/location","w");
fprintf($fp,"%f,%f",$y,$x);
fclose($fp);
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Set my location</title>
</head>
<body>
<h1>Set my location</h1>
</body>
</html>
