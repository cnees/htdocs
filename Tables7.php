<style>
body{height:6000px;}
table{width:5px;height:5px;background-image:url(http://i82.photobucket.com/albums/j279/qazfan/ToxicKaleidoscope.gif);margin-left:2px;margin-right:2px;margin-top:2px;margin-bottom:2px;}
table:hover{border:1px;margin-left:1px;margin-right:1px;margin-top:1px;margin-bottom:1px;border:1px #fff solid;}
</style>
<div id="box" style="position:absolute;top:5000px;">
<?php

$recurses = 125;
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