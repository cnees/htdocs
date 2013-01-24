<style>
body{height:6000px;}
table{width:400px;height:400px;background-image:url(http://i82.photobucket.com/albums/j279/qazfan/HalloweenKaleidoscope.gif);}
table:hover{border:0px;margin-left:1px;margin-right:1px;margin-top:1px;margin-bottom:1px;}
</style>
<div id="box" style="position:absolute;top:5000px;">
<?php

$recurses = 600;
echo "<span class=\"myTalbes\">";
for ($i = $recurses; $i>0; $i=$i-1)
{
	echo "<table cellpadding=0 cellspacing=0><tr><td>";
}

for ($i = $recurses; $i>0; $i=$i-1)
{
	echo "</td></tr></table>";
}
echo "</span>";
?></div>