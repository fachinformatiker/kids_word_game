<?
$input = isset($_POST['words'])?$_POST['words']:"";

//I dont check for empty() incase your app allows a 0 as ID.
if (strlen($input)==0) {
}
else {
	$file = "words_new.txt";
	$file_all = "words_all.txt";
	$current = "";
	$current_all = file_get_contents($file_all);

	$ids = explode("\n", str_replace("\r", "", $input));

	$i = count($ids);
        for($j = 0; $j < $i; $j++) {
        	$current .= strtoupper($ids[$j]) . "\n";
        	$current_all .= strtoupper($ids[$j]) . "\n";
        }

	echo "slowa zostaly dodane!";
	echo "<a href ='./'>wracaj</a>";

	file_put_contents($file, $current);
	file_put_contents($file_all, $current_all);
}
require_once "header.php";
?>

<form method="post" action="">
	<textarea name="words" cols="40" rows="5"></textarea>
	<br>
	<button>dodaj</button>
</form>

<?php
	require_once "footer.php";
?>
