<?php
//	App::uses('phpQuery-onefile', 'Vendor');
//App::import('Vendor','phpQuery',array('file' => 'phpQuery-onefile'));

App::import('Vendor','phpQuery-onefile');
class TokkaController extends AppController {


		public function index(){
/*
                $url = "http://potato.2ch.net/jisaku/subback.html";
		$curl = curl_init();

		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'GET'); // post
<<<<<<< HEAD
		// curl_setopt($curl, CURLOPT_POSTFIELDS, $data); // json�f�[�^�𑗐M
=======
		// curl_setopt($curl, CURLOPT_POSTFIELDS, $data); // jsonデータを送信
>>>>>>> bde239acdf8a531251b8535fd7c9a716384ceff1
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
       //         var_dump($response);
*/








                $html = "http://potato.2ch.net/jisaku/subback.html";
		$response = file_get_contents($html);
//		$response = mb_convert_encoding($response, 'UTF-8', 'SJIS');
                $queryObj = phpQuery::newDocumentHTML($response, $charset = 'UTF-8');
 
//               var_dump($queryObj);
//                var_dump($queryObj["a"]->attr("href"));
//                debug($queryObj);
//              $this->set("response", $response);
                $i = null;
                $link = $queryObj["#trad"];

		foreach($link['a'] as $val){



                        $str = '特価品'; 
//test
                        if(strstr(pq($val)->text(), $str)){

				var_dump(pq($val)->text());
                                var_dump(pq($val)->attr('href'));
                        }

		}




}
?>

