<form method="post" action="<?php echo $PHP_SELF;?>">
	<table border="0" cellspacing="0" cellpadding="4">
		<tr>
			<td><input name="rowNum" type="text" id="rowNum" value="20" size="6" maxlength="3">
			Rows</td>
		</tr>
		<tr>
			<td><input name="colNum" type="text" id="colNum" value="20" size="6" maxlength="3">
			Columns				</td>
		</tr>
		<tr>
			<td>
				<input name="userColor6" type="text" id="color6" value="EF2123" size="6" maxlength="6">
				<input name="userColor5" type="text" id="color5" value="FAA21D" size="6" maxlength="6">
			</td>
		</tr>
		<tr>
			<td>
				<input name="userColor4" type="text" id="color4" value="F6EA26" size="6" maxlength="6">
				<input name="userColor3" type="text" id="color3" value="13AA59" size="6" maxlength="6">
			</td>
		</tr>
			<tr>
				<td>
				<input name="userColor2" type="text" id="color2" value="0066CC" size="6" maxlength="6">
				<input name="userColor1" type="text" id="color1" value="A12889" size="6" maxlength="6">
				</td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" id="submit" value="Submit"></td>
			</tr>

	</table>
</form>

<?php

$colorNum = 7; //number of colors
$rowNum = $_POST["rowNum"];
$colNum = $_POST["colNum"];
$userColor1 = $_POST["userColor1"];
$userColor2 = $_POST["userColor2"];
$userColor3 = $_POST["userColor3"];
$userColor4 = $_POST["userColor4"];
$userColor5 = $_POST["userColor5"];
$userColor6 = $_POST["userColor6"];
echo "<style>\n";
echo ".index{  top:20px;\n   left:20px;\n   width:" . $colNum*20 . "px;\n}";

echo "form{position:absolute;  top:" . (($rowNum*10)+50) . "px;\n   left:20px;\n}";


/* for ($i = 1; $i <= $colorNum; $i++)
{	

	$h1 = rand(0,5);
	$h2 = rand(0,5);
	$h3 = rand(0,5);
		
	$h1 = $h1 * 3;
	if ($h1 == 12)
	{$h1 = "C";}
	if ($h1 == 15)
	{$h1 = "F";}
	
	$h2 = $h2 * 3;
	if ($h2 == 12)
	{$h1 = "C";}
	if ($h2 == 15)
	{$h2 = "F";}
	
	$h3 = $h3 * 3;
	if ($h3 == 12)
	{$h3 = "C";}
	if ($h3 == 15)
	{$h3 = "F";}
	
	echo ".bg" . $i . "{background:#" . $h1 . $h2 . $h3 .";}";
} */

echo ".bg1{background:#" . $userColor1 .";}";
echo ".bg2{background:#" . $userColor2 .";}";
echo ".bg3{background:#" . $userColor3 .";}";
echo ".bg4{background:#" . $userColor4 .";}";
echo ".bg5{background:#" . $userColor5 .";}";
echo ".bg6{background:#" . $userColor6 .";}";

echo ".w{height:10px;width:20px;overflow:hidden;}\n";
echo ".index:hover{z-index:9001;}\n";
echo "img{border:none;}\n";
echo "body{padding-left:0px;padding-right:0px;padding-top:0px; padding-bottom:0px;}\n";
echo "</style>";

if ($rowNum)
{	
	echo "<div style=\"height:" . (10*$rowNum) . "px;width:" . (20*$colNum + 20*$colorNum - 21) . "px;position:absolute;top:10px;left:10px;background:#fff;border:10px solid #000;\">&nbsp;</div>";
	for ($ColorDiv=1; $ColorDiv<=$colorNum; $ColorDiv++) //Create a div for every color
	{
	echo "<div id=\"color" . $ColorDiv . "\" class=\"index\" style=\"position:absolute;\">\n"; //Create a div with class color1, color2, color3...
		echo " <table width=\"150\" height=\"20\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n"; //Each ColorDiv has a table right inside of it.
			for ($tr=1; $tr <= $rowNum; $tr++)
			{
				echo "  <tr>\n";
					for ($td=1; $td<=$colNum; $td++)
					{
						echo "   <td>\n";
							echo "    <div class=\"w\">\n";
								echo "     <table width=\"20\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n";
									if ($tr%2==0)
									{
										echo "      <tr>\n";
											echo "       <td><a href=\"#color" . $ColorDiv;
											if ($tr<10)
											{
												echo "0";
											}
											echo $tr;
											if ($td<10)
											{
												echo "0";
											}
											echo $td . "b\" name=\"color" . $ColorDiv;
											if ($tr<10)
											{
												echo "0";
											}
											echo $tr;
											if ($td<10)
											{
												echo "0";
											}
											if ($td == $colNum)
											{
												echo $td . "a\"><img src=\"http://i82.photobucket.com/albums/j279/qazfan/black.jpg\"></a></td>\n";
											}
											else
											{
												echo $td . "a\"><img src=\"http://i82.photobucket.com/albums/j279/qazfan/right.gif\"></a></td>\n";
											}
										echo "      </tr>\n";
										echo "      <tr>\n";
											echo "       <td class=\"bg" . $ColorDiv . "\"><a href=\"#color" . $ColorDiv;
											if ($tr<10)
											{
												echo "0";
											}
											echo $tr;
											if ($td<10)
											{
												echo "0";
											}
											echo $td . "a\" name=\"color" . $ColorDiv;
											if ($tr<10)
											{
												echo "0";
											}
											echo $tr;
											if ($td<10)
											{
												echo "0";
											}
											if ($td < $colNum)
											{
												echo $td . "b\"><img src=\"http://i82.photobucket.com/albums/j279/qazfan/right.gif\"></a></td>\n";
											}
											else
											{
												echo $td . "b\"><img src=\"http://i82.photobucket.com/albums/j279/qazfan/black.jpg\"></a></td>\n";
											}
										echo "      </tr>\n";
									}
									else
									{
										echo "      <tr>\n";
											echo "       <td><a href=\"#color" . $ColorDiv;
											if ($tr<10)
											{
												echo "0";
											}
											echo $tr;
											if ($td<10)
											{
												echo "0";
											}
											echo $td . "b\" name=\"color" . $ColorDiv;
											if ($tr<10)
											{
												echo "0";
											}
											echo $tr;
											if ($td<10)
											{
												echo "0";
											}
											echo $td . "a\"><img src=\"http://i82.photobucket.com/albums/j279/qazfan/left.gif\"></a></td>\n";
										echo "      </tr>\n";
										echo "      <tr>\n";
											echo "       <td class=\"bg" . $ColorDiv . "\"><a href=\"#color" . $ColorDiv;
											if ($tr<10)
											{
												echo "0";
											}
											echo $tr;
											if ($td<10)
											{
												echo "0";
											}
											echo $td . "a\" name=\"color" . $ColorDiv;
											if ($tr<10)
											{
												echo "0";
											}
											echo $tr;
											if ($td<10)
											{
												echo "0";
											}
											echo $td . "b\"><img src=\"http://i82.photobucket.com/albums/j279/qazfan/left.gif\"></a></td>\n";
										echo "      </tr>\n";
									}
								echo "     </table>\n";
							echo "    </div>\n";
						echo "   </td>\n";
					}
					if ($tr == 1)
					{
						echo "   <td width=\"21\" rowspan=\"" . $rowNum . "\" class=\"bg" . $ColorDiv . "\">\n";
						/*if($ColorDiv==$colorNum)
						{
							echo "    <div style=\"height:10px;width:10px;overflow:hidden;\">.</div>\n";
						}
						else*/
						{
							echo "    <div style=\"height:10px;width:" . (20*$colorNum - (20*$ColorDiv)) . "px;overflow:hidden;\">.</div>\n";
						}
						echo "   </td>\n";
					}
				echo "  </tr>\n";
			}
	
		echo " </table>";
	echo "</div>\n";
	}
}
?>
