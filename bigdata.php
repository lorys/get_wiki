<html>

	<head>

	</head>

	<body>

		<?php

			$max_found = 0;
			$name_max = "";
			$list = glob("*");
			for ($a = 0; isset($list[$a]); $a++)
			{
				if ($max_found < filesize($list[$a]))
				{
					$max_found = filesize($list[$a]);
					$name_max = $list[$a];
				}
			}
				echo "<h2>Le plus gros article dans wikipedia est : </h2><h3><a href='interpret.php?q={$name_max}' target='_blank'>{$name_max}</a></h3>";
		?>

	</body>

</html>