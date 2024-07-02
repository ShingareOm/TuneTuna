<?php

if (!isset($_GET['query'])) {
    echo json_encode(["success" => false, "message" => "No query provided"]);
    exit();
}

$query = urlencode($_GET['query']);

$curl = curl_init();

curl_setopt_array($curl, [
  CURLOPT_URL => "https://saavn.dev/api/search/songs?query=$query",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo json_encode(["success" => false, "message" => "cURL Error #: $err"]);
} else {
  echo $response;
}
?>
