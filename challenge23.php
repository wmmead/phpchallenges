<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>

<?php

$myAnimals = array("horse", "cow", "pig", "mouse", "fish", "rat", "donkey", "whale", "cheetah", "cat", "dog", "chicken");

function printArray($array)
{
	$counter = 1;
	echo "<table border = '1'>\n";
	echo "<tr>\n";
	foreach($array as $temp)
	{
		echo "<td>$temp</td>";
		if ($counter == count($array))
		{
			echo "\n</tr>\n</table>\n";	
		}
		elseif ($counter % 3 == 0)
		{
			echo "\n</tr>\n<tr>\n";	
		}
		$counter++;
	}
}

printArray($myAnimals);

?>


</body>
</html>