<style>
body{background:#000;}
div{background-color:#0f0;border:1px dashed #000;}
div:hover{border:1px solid #000;}
</style>

<?php

$recurses = 700;

for ($i = $recurses; $i>0; $i=$i-1)
{
	echo "<div>";
}

for ($i = $recurses; $i>0; $i=$i-1)
{
	echo "</div>";
}
?>