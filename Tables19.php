<style>
body{height:6000px;}
div{margin:1px;width:50px;height:50px;background-image:url(http://i82.photobucket.com/albums/j279/qazfan/ArrowKaleidoscope.gif);}
div:hover{padding:1px;margin:0px;}
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