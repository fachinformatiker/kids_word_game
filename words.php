<?php
	require_once "header.php";

        $filename = "./words_selected.txt";
        $fp = @fopen($filename, 'r'); 
        if ($fp) {
                $array = explode("\n", fread($fp, filesize($filename)));
        }
        $Array = file($filename, FILE_IGNORE_NEW_LINES);

	$vCode   = 11111;
	$message = '';

	if( isset( $_POST['submitbutton'] ) ) {
		$input = $_POST['vCode'];

		if ( $input == $vCode ) {
			$message = 'Success! You entered: ' . $input;
		} elseif ( $input != $vCode ) {
			$message = 'OOps';
		}
	}

	$i = count($Array);
	for($j = 0; $j < $i; $j++) {
		echo $Array[$j] . " (";
		echo strlen($Array[$j]) . ")<br>";
	}
?>

<form action="" method="post">
<?php echo $message; ?>
  Validation Code:<br>
  <input name="vCode" value=""><br>
  <input type="submit" name="submitbutton" value="Submit">
</form>

<?php
	require_once "footer.php";
?>
