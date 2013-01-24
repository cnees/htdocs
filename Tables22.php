<style>
body{height:6000px;}
div{border-bottom:1px;border-top:1px;width:76px;height:66px;background-image:url(http://i82.photobucket.com/albums/j279/qazfan/flower.png);}
div:hover{border:0px;padding-bottom:1px;padding-top:1px;}
</style>

<?php

$recurses = 200;
echo "<span class=\"myTalbes\">";
for ($i = $recurses; $i>0; $i=$i-1)
{
	echo "<div>";
}

for ($i = $recurses; $i>0; $i=$i-1)
{
	echo "</div>";
}
echo "</span>";


?>