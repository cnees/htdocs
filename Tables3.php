<style>
body{height:6000px;}
table{width:400px;height:400px;background-color:#000;border:1px #0f0 solid;}
table:hover{width:50%;height:50%;}
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