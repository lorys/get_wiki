<?php

	echo str_replace("=\"/", "=\"https://fr.wikipedia.org/", file_get_contents($_GET['name']));

?>