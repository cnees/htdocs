<style>
body{height:6000px;}
table{width:1px;height:1px;background-color:#000;border:1px solid #000;}
table:hover{border:1px solid #fff;}
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