<?php

function myquote()
{
	$quote = "<p>\"A computer once beat me at chess, but it was no match for me at kick boxing.\"<br />\n - Emo Philips</p>";
	print $quote;
}

function myquote2()
{
	$quote = "<p>\"Curiosity killed the cat, but for a while I was a suspect.\"<br />\n - Steven Wright</p>";
	return $quote;
}

function print_name1()
{
	print $_GET['name'];	
}

function print_name2()
{
	if (isset($_GET['name']))
	{
		print $_GET['name'];
	}
}

function print_name3()
{
	if (isset($_POST['name']))
	{
		print $_POST['name'];
	}
	else
	{
		print "<p>You didn't type anything in the <a href='form3.html'>form</a></p>";	
	}
}

function print_name4()
{
	if (isset($_POST['name']))
	{
		$name = $_POST['name'];
		print "<p><span style='color:blue;'>You typed:</span> $name</p>";
	}
	else
	{
		print "<p>You didn't type anything in the <a href='form5.html'>form</a></p>";	
	}
}

function print_name5()
{
	if (isset($_POST['name']))
	{
		$name = strtolower($_POST['name']);
		print "<p><span style='color:blue;'>You typed:</span> $name</p>";
	}
	else
	{
		print "<p>You didn't type anything in the <a href='form5.html'>form</a></p>";	
	}
}

function print_name6()
{
	if (isset($_POST['name']))
	{
		$name = ucwords(strtolower($_POST['name']));
		print "<p><span style='color:blue;'>You typed:</span> $name</p>";
	}
	else
	{
		print "<p>You didn't type anything in the <a href='form6.html'>form</a></p>";	
	}
}

function selectPhoto()
{
	$photo_array = array("pict01.jpg", "pict02.jpg", "pict03.jpg", "pict04.jpg", "pict05.jpg", "pict06.jpg", "pict07.jpg");
	$random_photo = $photo_array[rand(0,6)];
	print "<img src = 'http://meadpoint.net/phpchallenges/images/$random_photo' alt='random pict' />";
}

function selectPhoto2()
{
	$photo_array = array("pict01.jpg", "pict02.jpg", "pict03.jpg", "pict04.jpg", "pict05.jpg", "pict06.jpg", "pict07.jpg");
	$random_photo = $photo_array[rand(0,6)];
	return $random_photo;
}

function displayFilenames()
{
	$photo_array = array("pict01.jpg", "pict02.jpg", "pict03.jpg", "pict04.jpg", "pict05.jpg", "pict06.jpg", "pict07.jpg");
	foreach($photo_array as $temp)
	{
		print $temp;
		print "<br />";
	}
}

function processForm1()
{
	$regex_integers_only = "/^[-+]?[0-9]\d*\.?[0]*$/";

	$number = $_POST['number'];
	if(preg_match($regex_integers_only, $number))
	{
		print "<p>You typed the number: $number</p>";
	}
	else
	{
		print "<p>not sure what you typed, but it was not a whole number.</p>";	
	}

}

function processForm2()
{
	$regex_integers_only = "/^[-+]?[0-9]\d*\.?[0]*$/";
	
	if(isset($_POST['number']))
	{
		$number = $_POST['number'];
		if(preg_match($regex_integers_only, $number))
		{
			print "<p>You typed the number: $number</p>";
		}
		else
		{
			print "<p>not sure what you typed, but it was not a whole number.</p>";	
		}
	}
	else
	{
		print "<p>please for god's sake enter something into the <a href='form8.html'>form!</a></p>";	
	}
}

function processForm3()
{
	$regex_email_only = "/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/";
	
	if(isset($_POST['email']))
	{
		$email = $_POST['email'];
		if(preg_match($regex_email_only, $email))
		{
			print "<p>You typed this email address: $email</p>";
		}
		else
		{
			print "<p>not sure what you typed, but it was not an email address.</p>";	
		}
	}
	else
	{
		print "<p>please for god's sake enter something into the <a href='form9.html'>form!</a></p>";	
	}
}

function processForm4()
{
	$regex_integers_only = "/^[-+]?[0-9]\d*\.?[0]*$/";
	
	if(isset($_POST['number']))
	{
		$number = $_POST['number'];
		if(preg_match($regex_integers_only, $number))
		{
			print "<p>You typed the number: $number</p>";
			if($number % 2 == 0)
			{
				print "<p>$number is an even number</p>";	
			}
			else
			{
				print "<p>$number is an odd number</p>";
			}
		}
		else
		{
			print "<p>not sure what you typed, but it was not a whole number.</p>";	
		}
	}
	else
	{
		print "<p>please for god's sake enter something into the <a href='form10.html'>form!</a></p>";	
	}
}

function processForm5()
{
	$regex_integers_only = "/^[-+]?[0-9]\d*\.?[0]*$/";
	
	if(isset($_POST['number']))
	{
		$number = $_POST['number'];
		if(preg_match($regex_integers_only, $number))
		{
			if($number % 2 == 0)
			{
				print "<p style='color:blue;'>You typed the number: $number</p>";	
			}
			else
			{
				print "<p style='color:red;'>You typed the number: $number</p>";
			}
		}
		else
		{
			print "<p>not sure what you typed, but it was not a whole number.</p>";	
		}
	}
	else
	{
		print "<p>please for god's sake enter something into the <a href='form11.html'>form!</a></p>";	
	}
}

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


?>