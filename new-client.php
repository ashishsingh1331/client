<?php

$url = 'http://localhost/myauth/?q=oauth2/token';
$fields = array(
    'code' => urlencode($_GET['code']),
    'grant_type' => urlencode('authorization_code'),
    'client_id' => urlencode('myclient'),
    'client_secret' => urlencode('123456'),
);


//url-ify the data for the POST
foreach ($fields as $key => $value) {
    $fields_string .= $key . '=' . $value . '&';
}
rtrim($fields_string, '&');

//open connection
$ch = curl_init();

//set the url, number of POST vars, POST data
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, count($fields));
curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch);

$decode = json_decode($result, TRUE);
$access_token = $decode['access_token'];
var_dump($decode);

curl_close($ch);

$url = 'http://localhost/myauth/oauth2/user/profile';
$fields = array(
    'access_token' => urlencode($access_token),
);


//url-ify the data for the POST
foreach ($fields as $key => $value) {
    $fields_string .= $key . '=' . $value . '&';
}
rtrim($fields_string, '&');

//open connection
$ch = curl_init();

//set the url, number of POST vars, POST data
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, count($fields));
curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch);

$decode = json_decode($result, TRUE);
echo '<pre>';
print_r($decode);

curl_close($ch);





