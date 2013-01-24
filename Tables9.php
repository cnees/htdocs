<style>
body{height:6000px;}
b table{width:50%;border:2px solid #0f0;background:#ff0;}
b table:hover{width:100%;border:0px;background:#f0f;}
</style>
<b>
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
?></b>