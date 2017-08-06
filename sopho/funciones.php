<?php
//---------------------------------------------------------------------------------------- ECD
	header('Content-type: text/html; charset-UTF-8');
	error_reporting(0);
//---------------------------------------------------------------------------------------- SRP
	function _9lab_69($r9, $rj, $sf){
		return str_replace($r9, $rj, $sf); 
	}
//---------------------------------------------------------------------------------------- CRL
	function Anon_http($srv, $usr, $url, $pstf, $pst, $cks, $rtf, $vrb, $flw, $hdr){
	$ci = curl_init();
	curl_setopt_array($ci, array(
	CURLOPT_TIMEOUT => 0,
	CURLOPT_SSL_VERIFYPEER => $srv,
	CURLOPT_USERAGENT => $usr,
	CURLOPT_URL => $url,
	CURLOPT_POSTFIELDS => $pstf,
	CURLOPT_POST => $pst,
	CURLOPT_COOKIESESSION => $cks,
	CURLOPT_RETURNTRANSFER => $rtf,
	CURLOPT_VERBOSE => $vrb,
	CURLOPT_FOLLOWLOCATION => $flw,
	CURLOPT_HEADER => $hdr
	));
	return curl_exec($ci);
	curl_close($ci);
	}
//---------------------------------------------------------------------------------------- JNF
	function Jib_Info($ramz, $index){
	if (preg_match_all($ramz, $index, $natija)) { 
	foreach ($natija[1] as $info) {
	if (count($info) > 0) return ' '.$info;
	}
	}else{
	return '';
	}
	}
//---------------------------------------------------------------------------------------- FIN
?>
