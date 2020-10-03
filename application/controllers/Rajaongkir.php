<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rajaongkir extends CI_Controller {

	private $api_key = 'de6b36f273fec3d698d447935b3c5ae9';

	public function provinsi()
	{

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.rajaongkir.com/starter/province",
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_RETURNTRANSFER => 0,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "key: $this->api_key"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  // echo $response;
	$array_response = json_decode($response,true);
// 	echo '<pre>';
// 	print_r($array_response['rajaongkir']['results']);
// 	echo '</pre>';
	$data_provinsi =$array_response['rajaongkir']['results'];
	foreach ($data_provinsi as $key => $value) {
		echo "<option value='" . $value['province_id']."'>" . $value['province'] . "</option>";
	}
}

	}
}