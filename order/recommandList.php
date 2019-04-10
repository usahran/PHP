<?
$url  = "http://data4library.kr/api/recommandList";
$url .= "?" . $_SERVER['QUERY_STRING'];
$ch = cURL_init();
cURL_setopt($ch, CURLOPT_URL, $url);
cURL_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = cURL_exec($ch);
$err = curl_error($ch);

curl_close($ch);
header("Content-type: text/xml");
print_r($response);
?>