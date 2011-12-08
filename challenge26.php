<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>

<?php

$myAnimals = array("mamal 1" => "horse", "mamal 2" => "cow", "mamal 3" => "pig", "rodent 1" => "mouse", "fish 1" => "shark", "rodent 2" => "rat", "mamal 4" => "donkey", "mamal 5" => "whale", "mamal 6" => "cheetah", "mamal 7" => "cat", "mamal 8" => "dog", "fowl 1" => "chicken");

function printArray($array, $col)
{
	$counter = 1;
	echo "<table border = '1'>\n";
	echo "<tr>\n";
	foreach($array as $key => $temp)
	{
		echo "<td>$key -- $temp</td>";
		if ($counter == count($array))
		{
			echo "\n</tr>\n</table>\n";	
		}
		elseif ($counter % $col == 0)
		{
			echo "\n</tr>\n<tr>\n";	
		}
		$counter++;
	}
}

printArray($myAnimals, 4);

?>


</body>
</html>