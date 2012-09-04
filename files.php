<?php
	$scanDir = $_GET['directory'];

	foreach (scandir($scanDir) as $file) {
		if ($file != ".." && $file != ".") {
			$i = 0;
			while ($i < 10) {
				print "<li class='image' id='" . array_shift(explode(".", $file)) . "'><img class='image_side' src='" . $scanDir . "/" . $file . "' /><div class='blank_side'></div></li>";
				$i++;
			}
		}
	}
?>
