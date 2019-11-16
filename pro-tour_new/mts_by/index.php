<html><head><title>Secured Home of pro-tour.by</title></head>
<body>
<center>Welcome to pro-tour.by<br>
To change this page, upload a new index.html to your private_html folder<br></center>
</body>
</html>
<?

//'Authorization: Bearer ad314a1ec659bf05092b8834776aa36e5fb489ab'



$url = 'https://smsinform.mts.by/smsinform-api/mailings/quick_mailing/';

/*$arr = array(
  //'Authorization' => 'Bearer ad314a1ec659bf05092b8834776aa36e5fb489ab',
  'name' => 'Тестовая рассылка',
  'alfanum' => 'PRO-tour.by',
  'text'=> 'Пробный текст',
  'recipients'=> '[375291319600]'
);
*/


/*curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'X-Sifter-Token: 343b1b831066a40e308e0af92e0f06f0',
        'Accept: application/json',
  ));
*/
//$postData = http_build_query($arr);

//$postData = json_decode($arr);

$postData = '{
"name": "Тестовая рассылка1",
"alfanum": "PRO-tour.by",
"text": "Пробный текст1",
"recipients": ["375296981800"]
}';

$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_SSL_VERIFYPEER => 0,
    CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer 4468b286c179c79ecd937ddf07e53cdd956b0e73',
            'Content-Type: application/json' ,
      ),
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
