<?php

/**
 * -----------------------------------------------------------------------------------------------------------
 *  Example Code untuk mencari Array di dalam Array - Documentation
 * -----------------------------------------------------------------------------------------------------------
 * 
 *  berikut adalah potongan code untuk melakukan pencarian array
 *  didalam array dengan base codeigniter 3. dan masih dalam
 *  penulisan ulang code program agar bisa digunakan 
 *  secara usability atau berulang dengan pola
 *  porgram yang sama.
 */

// buat zona time indonesia
date_default_timezone_set('Asia/Jakarta');
// wev view count
$datawebview = [
	'id' => '',
	'uniqid' => random_string('alnum', 10),
	'session_id' => random_string('alnum', 30),
	'client_ip' => $_SERVER['REMOTE_ADDR'],
	'content_id' => '0',
	'sistem-operasi' => $this->agent->platform(),
	'url-page-view' => current_url(),
	'visitor_count' => '1',
	'createat' => date('Y-m-d'),
	'updateat' => date('Y-m-d'),
];

$ipnow = $this->website->cekip($datawebview['client_ip']);
$page = $this->website->cekip_and_cekpage($datawebview['client_ip'], $datawebview['url-page-view'], $datawebview['createat']);
$tanggaldidb = $this->website->cektanggal($datawebview['createat']);
$tanggalnow = date('Y-m-d');
$pagenow = $this->website->showdata($datawebview['client_ip'], $tanggalnow);

// var_dump($pagenow);

//web view count
if (empty($ipnow)) {
	//insert data
	// echo "cek 1 : tambah data baru : ip tanggal dan page";
	$this->website->insertdata($datawebview);
} elseif (!empty($ipnow)) {
	if (array_search(current_url(), array_column($pagenow, 'url-page-view')) === false) {
		//insert data
		// echo "cek 2 : tambah data baru : ip, tanggal dan page";
		$this->website->insertdata($datawebview);
	} else {
		//update
		// echo "update data : ip , page, dan count visit";
		// cek jika tanggal sama lakukan update
		if (array_search($tanggalnow, array_column($page, 'createat')) !== false) {
			// echo 'value is in multidim array';
			$indexarray = array_search(current_url(), array_column($pagenow, 'url-page-view')); // index of array value
			// update
			$visitornow = $pagenow[$indexarray]['visitor_count'];
			$visitornow = $visitornow + 1;
			if ($this->website->visitcount($pagenow[$indexarray]['client_ip'], $pagenow[$indexarray]['url-page-view'], $visitornow, $tanggalnow) > 0) {
			};
			// var_dump($pagenow[$indexarray]);
		} else {
			// echo 'value is not in multidim array';
			// cek jika tanggal beda lakukan insert baru
			$this->website->insertdata($datawebview);
			// var_dump($pagenow[0]);
		}
	}
}
// end view count


// count visitor artikel
$visitornow = $data['article']->visitor;
$visitornow = $visitornow + 1;
$this->article->visitcount($data['article']->id, $visitornow);
// end visitor count artikel