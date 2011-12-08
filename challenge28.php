<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>

<form action="challenge28.php" method="post">
<input type="checkbox" name="animal[]" value="cat" />Cat<br />
<input type="checkbox" name="animal[]" value="dog" />Dog<br />
<input type="checkbox" name="animal[]" value="horse" />Horse<br />
<input type="checkbox" name="animal[]" value="bird" />Bird<br />
<input type="checkbox" name="animal[]" value="pig" />Pig<br />
<input type="checkbox" name="animal[]" value="monkey" />Monkey<br />
<input type="checkbox" name="animal[]" value="mouse" />Mouse<br />
<input type="checkbox" name="animal[]" value="frog" />Frog<br />
<input type="checkbox" name="animal[]" value="elephant" />Elephant<br />
<input type="checkbox" name="animal[]" value="rat" />Rat<br />
<input type="checkbox" name="animal[]" value="whale" />Whale<br />
<input type="checkbox" name="animal[]" value="shark" />Shark<br />
<input type="checkbox" name="animal[]" value="fish" />Fish<br />
<input type="checkbox" name="animal[]" value="lion" />Lion<br />
<input type="checkbox" name="animal[]" value="spider" />Spider<br />
<input type="checkbox" name="animal[]" value="bat" />Bat<br />
<input type="checkbox" name="animal[]" value="bear" />Bear<br />
<input type="checkbox" name="animal[]" value="tiger" />Tiger<br />
<input type="checkbox" name="animal[]" value="wolf" />Wolf<br />
<input type="checkbox" name="animal[]" value="puma" />Puma<br />
<input type="checkbox" name="animal[]" value="bobcat" />Bobcat<br />
<input name="animalboxes" type="submit" id="submitbutton" value="submit"  />
</form>

<?php

function printChoices($col)
{
	$selected = $_POST['animal'];
	$counter = 1;
	echo "<table border = '1'>\n";
	echo "<tr>\n";
	foreach($selected as $temp)
	{
		echo "<td>$temp</td>";
		if ($counter == count($selected))
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

if(isset($_POST['animalboxes']))
{
	printChoices(4);
}

?>




</body>
</html>