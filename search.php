<h1>Search</h1>
<form action="?search" method="POST">
	<input type="text" name="q"/>
	<input type="submit" value="search"/>
</form>
<?php
	
	if (isset($_POST['q']))
	{
		echo "<h1>\"{$_POST['q']}\"</h1>";
		$found = 0;
		$art_data = [];
		$list = glob("*");
		$b = 0;
		for ($a = 0; isset($list[$a]); $a++)
		{
			if (strpos(file_get_contents($list[$a]), $_POST['q']))
			{
				$art_data[$b][0] = $list[$a];
				$art_data[$b][1] = substr_count(file_get_contents($list[$a]), $_POST['q']);
				$found++;
				$b++;
			}
		}

		$max_found = 0;
		$art_name = "";
		for ($a = 0; isset($art_data[$a]); $a++)
		{
			if ($max_found < $art_data[$a][1])
			{
					$max_found = $art_data[$a][1];
					$art_name = $art_data[$a][0];
			}
		}

		?><li><a href="interpret.php?name=<?= $art_name ?>" target="_blank"><?= $art_name ?></a> (<?= $max_found ?> occurrences)</li><?php

	}


?>