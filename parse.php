<?php
	require_once "header.php";
	$filename = "./words_new.txt";
	$fp = @fopen($filename, 'r'); 
	if ($fp) {
		$array = explode("\n", fread($fp, filesize($filename)));
	}
	$Array = file($filename, FILE_IGNORE_NEW_LINES);
?>

<form action="./words.php" method="post">

	<?php
		foreach($Array as $result) {
			echo "<input type='checkbox' name='";
			echo "words[]";
			echo "' value='";
			echo $result;
			echo "' />";
			echo $result, "<br>";
		}
	?>

	<button>OK</button>
</form>

<?php
	require_once "footer.php";
?>
