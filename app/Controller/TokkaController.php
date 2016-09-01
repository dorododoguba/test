<?php
	App::uses('AppController', 'Controller');
class TokkaController extends AppController {
    public $uses = null;
	public function index(){

                $url = "http://potato.2ch.net/jisaku/subback.html";
		$curl = curl_init();

		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'GET'); // post
		// curl_setopt($curl, CURLOPT_POSTFIELDS, $data); // jsonデータを送信
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl,CURLOPT_SSL_VERIFYPEER, false);


		$response = curl_exec($curl);
		// echo "response";
		// var_dump($response);

		$header_size = curl_getinfo($curl, CURLINFO_HEADER_SIZE); 
		$header = substr($response, 0, $header_size);
		$body = substr($response, $header_size);
		// var_dump($body);
		// var_dump($header);
		curl_close($curl);
		$response = mb_convert_encoding($response, 'UTF-8', 'SJIS');
                var_dump($response);
                $this->set("response", $response);

	}





}
?>
