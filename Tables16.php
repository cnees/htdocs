<style>
body{
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
background:#000;
}

b div{padding:0px;border:1px #0f0 solid;}
b div:hover{padding:1px;border:0px;}
</style>

<div style="width:150px;overflow:hidden;height:150px;background:url(http://i82.photobucket.com/albums/j279/qazfan/ChrissySquare.gif) right no-repeat;">
<b><?php

$recurses = 100;

for ($i = $recurses; $i>0; $i=$i-1)
{
	echo "<div>";
}

for ($i = $recurses; $i>0; $i=$i-1)
{
	echo "</div>";
}
?></b></div>
