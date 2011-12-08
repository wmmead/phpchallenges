<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>

<form action="challenge29.php" method="post" name="form">
<p>type list in using commas to separate values and a semi colon to make a new line. Example: row1Item1, row1Item2, row1lastitem; row2FirstItem, row2SecondItem; row3FirstItem, row3SecondItem, row3ThirdItem, row4FourthItem; row5FirstItem</p>
<textarea name="textarea" id="textarea" cols="60" rows="10"></textarea><br />
<input name="tablemaker" type="submit" id="submitbutton" value="Make Table"  />
</form>
<?php

function createTable()
{
	$submitted_data = $_POST['textarea'];
	echo "<table border = '1'>\n";
	
	$each_row = split(";", $submitted_data); //$each_row is now an array of however many elements
	
	foreach($each_row as $row)
	{
		echo "<tr>\n";
		$each_item = split(",", $row);
		foreach($each_item as $item)
		{
			echo "<td>$item</td>";
		}
		echo "\n</tr>\n";
	}
	echo "</table>";
}

if(isset($_POST['tablemaker']))
{
	createTable();
}

?>




</body>
</html>