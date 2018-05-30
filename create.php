<?php
// inisialisasi
$curl = curl_init();

// opsi
curl_setopt_array($curl, [
  CURLOPT_RETURNTRANSFER => 1,
  CURLOPT_URL            => "https://www.google.com/recaptcha/api/siteverify",
  CURLOPT_POST           => 1,
  CURLOPT_POSTFIELDS     => [
    'secret'   => '6LdvQFwUAAAAAI3DGr90Lv3qH4YVng_wh0Qm3jqH',
    'response' => $_POST["g-recaptcha-response"]
  ]
]);

// ekseskusi
$response = json_decode(curl_exec($curl));
// var_dump($response);

if($response->success){
  die('true!');
  //insert ke database;
  //redirect;
}else {
  die('false!');
  //redirect ke form;
  //tampilin error dari response nya;
}
