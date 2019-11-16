<html><head><title>Secured Home of pro-tour.by</title></head>
<body>
<center>Welcome to pro-tour.by<br>
To change this page, upload a new index.html to your private_html folder<br></center>
</body>
</html>
<?
$url = 'https://smsinform.mts.by/smsinform-api/api-token-auth/';

$arr = array(
  'username' => '375336860331',
  'password' => 'PRO-312*sms'
);

$postData = http_build_query($arr);

$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_SSL_VERIFYPEER => 0,
    CURLOPT_POST => 1,
    CURLOPT_HEADER => 0,
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => $url,
    CURLOPT_POSTFIELDS => $postData,
));

$result = curl_exec($curl);
curl_close($curl);

echo "<pre>";
print_r($result);
print_r(json_decode($result, true));
echo "</pre>";

?>
