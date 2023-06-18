<?php

function MASUserinfo(){
    $info_user  = MASSession();

    $user_model = model('Auth\models\UserModel');
    $result     = $user_model
                ->find($info_user['id']);

    return $result;
}

function MASSession(){
    $session	= session();
    
    return $session->user_data;
}

function MASLogin(){
    $session	= session();
    if (!$session->is_login) {
        return false;
    }else{
        return true;
    }
}

function MASAngka($duit=0){
	$hasil_rupiah = number_format($duit,2,'.',',');
	return $hasil_rupiah;
}

function MASAngkaKoma($angka=0,$decimals=2){
    $expo = pow(10,$decimals);
    $result = intval($angka*$expo)/$expo;
    
    return $result;
}

function MASConvertDate($date=NULL){
    $res = explode("/", $date);
    $result = $res[2]."-".$res[0]."-".$res[1];
    
    return $result;
}


function hari_tgl_indo($date){
    $timestamp  = strtotime($date);
    $day        = date('D', $timestamp);
    $hari       = hari($day);
    $tanggal    = tgl_indo($date);
 
	return $hari. ', ' .$tanggal;
}

function MasTanggal($tanggal,$date_time='0'){
	if ($tanggal=="" OR empty($tanggal)) {
		return " ";
	}

	$jam		= '';
	if ($date_time=="1" OR $date_time=="2") {
		$jam		= date('H:i', strtotime($tanggal));
		$tanggal	= date('Y-m-d', strtotime($tanggal));
	}


	$bulan = array (
		1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);
	$pecahkan = explode('-', $tanggal);
	
 
    if ($date_time=='2') {
        return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
    }else {
        return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0].' '.$jam;
    }
}

function MasBulan($bulan){
	$data = array (
		1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);

	return $data[ (int)$bulan ];
}

function MASConvertTerbilang($nilai=NULL){
    if($nilai<0) {
        $hasil = "minus ". trim(penyebut($nilai));
    } else {
        $hasil = trim(penyebut($nilai));
    }     		
    return $hasil.' rupiah';
}

function penyebut($nilai) {
    $nilai = abs($nilai);
    $huruf = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
    $temp = "";
    if ($nilai < 12) {
        $temp = " ". $huruf[$nilai];
    } else if ($nilai <20) {
        $temp = penyebut($nilai - 10). " belas";
    } else if ($nilai < 100) {
        $temp = penyebut($nilai/10)." puluh". penyebut($nilai % 10);
    } else if ($nilai < 200) {
        $temp = " seratus" . penyebut($nilai - 100);
    } else if ($nilai < 1000) {
        $temp = penyebut($nilai/100) . " ratus" . penyebut($nilai % 100);
    } else if ($nilai < 2000) {
        $temp = " seribu" . penyebut($nilai - 1000);
    } else if ($nilai < 1000000) {
        $temp = penyebut($nilai/1000) . " ribu" . penyebut($nilai % 1000);
    } else if ($nilai < 1000000000) {
        $temp = penyebut($nilai/1000000) . " juta" . penyebut($nilai % 1000000);
    } else if ($nilai < 1000000000000) {
        $temp = penyebut($nilai/1000000000) . " milyar" . penyebut(fmod($nilai,1000000000));
    } else if ($nilai < 1000000000000000) {
        $temp = penyebut($nilai/1000000000000) . " trilyun" . penyebut(fmod($nilai,1000000000000));
    }     
    return $temp;
}

function MASDebugPree($data,$die=NULL){
    echo '<pre>';
    print_r($data);
    echo '</pre>';

    if(!empty($die)){
        die();
    }
}

function MASAsset($data,$die=NULL){

}

