<style>
body{
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
height:10000px;
width:10000px;
}

div{padding-right:0px;padding-bottom:0px;border:1px;}

</style>
<?php

$recurses = 300;

for ($i = $recurses; $i>0; $i=$i-1)
{
	echo "<div>" . $i;
}

for ($i = $recurses; $i>0; $i=$i-1)
{
	echo "</div>";
}
?>