<style>
body{backgorund:url(http://i82.photobucket.com/albums/j279/qazfan/ToxicKaleidoscope.gif)}
div{padding-top:1px;overflow:hidden;background:url(http://i82.photobucket.com/albums/j279/qazfan/ToxicKaleidoscope.gif)}
div:hover{border-top:2px dotted #0C0;padding:0px;}
</style>

<?php

$recurses = 50;
echo "<span class=\"myTalbes\">";
for ($i = $recurses; $i>0; $i=$i-1)
{
	echo "<div><img src=\"http://i82.photobucket.com/albums/j279/qazfan/ToxicKaleidoscope.gif\">";
}

for ($i = $recurses; $i>0; $i=$i-1)
{
	echo "</div>";
}
echo "</span>";
?>