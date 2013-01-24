<html>
<body>

<?php

//$rowNum = rand(30, 100);
//$colNum = rand(30, 100);
$rowNum = 40;
$colNum = 40;
$i=0;

echo "<table border=0 cellspacing=0 cellpadding=0 width=\"100%\">\n";
for($tr = 0; $tr<$rowNum; $tr++)
{
	echo "   <tr>\n";
	for($td = 0; $td<$colNum; $td++)
	{	
		$h1 = rand(0,5);
		$h2 = rand(0,5);
		$h3 = rand(0,5);
		while($h2>=$h1+1)
		{$h2--;}
		while($h3>=$h1+2)
		{$h3--;}
		/*
		if($h1 < 5)
		{$h2 = $h1 + 1;}
		else
		{$h2 = 0;}
		
		if($h2 < 5)
		{$h3 = $h2 + 1;}
		else
		{$h3 = 0;}
		
		$h1 = $h1 * 3;
		if ($h1 == 12)
		{$h1 = "C";}
		if ($h1 == 15)
		{$h1 = "F";}
		
		$h2 = $h2 * 3;
		if ($h2 == 12)
		{$h1 = "C";}
		if ($h2 == 15)
		{$h2 = "F";}
		
		$h3 = $h3 * 3;
		if ($h3 == 12)
		{$h3 = "C";}
		if ($h3 == 15)
		{$h3 = "F";}
		*/
		/*
		$h2 = rand(0,5);
		$h2 = $h2 * 3;
		if ($h2 == 12)
		{$h2 = "C";}
		if ($h2 == 15)
		{$h2 = "F";}
		
		$h3 = rand(0,5);
		$h3 = $h3 * 3;
		if ($h3 == 12)
		{$h3 = "C";}
		if ($h3 == 15)
		{$h3 = "F";}
		*/
		
		$RGB = $h1 . $h2 . $h3;
		
		echo "      <td style=\"background:#" . $RGB . "\">&nbsp;</td>\n";
		$i++;
	}
	echo "   </tr>\n";
}
echo "</table>\n";
?>
<style>

td:hover{background:#000!important; -webkit-transition:background-color 0.5s linear;}
body{margin-right:0px;margin-left:0px;margin-top:0px;margin-bottom:0px;}
</style>
</body>
</html>
