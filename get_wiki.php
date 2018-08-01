<h1 style="text-align:center;">NomNomNomNom</h1>

<?php
	
	$url = "https://fr.wikipedia.org/wiki/Sp%C3%A9cial:Page_au_hasard";

	$file = file_get_contents($url);

	if (!file_exists(md5($file)))
		file_put_contents(md5($file),$file);

echo "<h2>{$_GET['nb']} saved !</h2>";
?>
<script>
	self.location.href='?nb=<?= $_GET['nb']+1 ?>';
</script>