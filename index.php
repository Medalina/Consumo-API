
<?php
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "http://localhost/rest/");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$res = curl_exec($ch);
print $res;
curl_close($ch);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <input type="text" >
    <button>buscar</button>
</body>
</html>