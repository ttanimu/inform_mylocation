<!DOCTYPE html>
<?
$fp=fopen("/tmp/location","r");
$pl=fgets($fp);
fclose($fp);
$url="https://www.google.co.jp/maps?q=".$pl."(here)&z=18&hl=ja";
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>My location</title>
<?
printf('<meta http-equiv="refresh" content="0;URL='.$url.'">');
?>
</head>
<body>
<h1>My location</h1>
<?
printf('<a href="'.$url.'">go</a>');
?>
</body>
</html>
