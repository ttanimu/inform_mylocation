<!DOCTYPE html>
<?
$fp=fopen("/tmp/location","r");
$pl=fgets($fp);
fclose($fp);
$url="https://www.google.co.jp/maps?output=embed&ll=".$pl."&z=18&hl=ja";
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>My location</title>
</head>
<body>
<h1>My location</h1>
<?
printf('<iframe width="640" height="480" src="'.$url.'"></iframe>');
?>
</body>
</html>
