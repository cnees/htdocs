<style>
body{height:6000px;}
div{border-top:1px dotted #000;border-left:1px solid #000;width:50px;height:50px;background-image:url(http://i82.photobucket.com/albums/j279/qazfan/ToxicKaleidoscope.gif);}
div:active{border:0px;}
</style>

<?php

$recurses = 5;
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