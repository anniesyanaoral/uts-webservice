<html>
	<head>
	<title>WEATHER APP</title>
	</head>
	
	<body>
	
<?php
    require 'GetWeather.php';
    error_reporting (E_ALL^ (E_NOTICE|E_WARNING));
?>

<div align=center>
<?php
	
	echo "Today  : ${hari}";
    echo "<br>";
	echo "${hari1}, ${hari3}  ${hari2}  \n";
	echo "<br>";
    echo "<img src='http://icons.wxug.com/i/c/k/" . $png . ".gif'><br/>";
	echo "<br>";
	echo " ${hari4} \n";
	echo "<br>";
	echo " With Temp ${temp}C";
	echo "<br>";
	echo "<br>";
	
		echo "<br>";
		echo "<table width = 900 border =1>
		<tr>
		<td align=center>Day : $Daya<br>
		Date : $tgla, $blna $thna<br>
		<img src='http://icons.wxug.com/i/c/k/" . $pnga . ".gif'><br>
		$cona<br>
		Between Temp $sla C- $sha C</td>
		
		<td align=center>Day : $Dayb<br>
		Date : $tglb, $blnb $thnb<br>
		<img src='http://icons.wxug.com/i/c/k/" . $pngb . ".gif'><br>
		$conb<br>
		Between Temp $slb C- $shb C</td>
		
		<td align=center>Day : $Dayc<br>
		Date : $tglc, $blnc $thnc<br>
		<img src='http://icons.wxug.com/i/c/k/" . $pngc . ".gif'><br>
		$conc<br>
		Between Temp $slc C- $shc C</td>
		
	
		
		<td align=center>Day : $Dayd<br>
		Date : $tgld, $blnd $thnd<br>
		<img src='http://icons.wxug.com/i/c/k/" . $pngd . ".gif'><br>
		$cond<br>
		Between Temp $sld C- $shd C</td>
		
		<td align=center>Day : $Daye<br>
		Date : $tgle, $blne $thne<br>
		<img src='http://icons.wxug.com/i/c/k/" . $pnge . ".gif'><br>
		$cone<br>
		Between Temp $sle C- $she C</td>
		
		<td align=center>Day : $Dayf<br>
		Date : $tglf, $blnf $thnf<br>
		<img src='http://icons.wxug.com/i/c/k/" . $pngf . ".gif'><br>
		$conf<br>
		Between Temp $slf C- $shf C</td>
		
		</tr>
		</table>";
?>
</div>
</html>