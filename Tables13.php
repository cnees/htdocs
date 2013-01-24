<style>

b div{border:1px dashed #000;height:100px;}
b div:hover{border:1px solid #fff;}
</style>
<div style="width:100px;height:400px;overflow:hidden;">
<b><?php

$recurses = 101;

for ($i = $recurses; $i>0; $i=$i-1)
{
	echo "<div>";
}

for ($i = $recurses; $i>0; $i=$i-1)
{
	echo "</div>";
}
?></b></div>