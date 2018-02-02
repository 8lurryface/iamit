<style type="text/css">
	.container {
		height: 100vh;
		display: flex;
	}
	table {
		//border-collapse: collapse;
		margin: auto;
	}
	table, th{
		border: 1px black solid;
	}
	td {
		text-align: center;
	}
</style>
<?php
$path = "img";
$reg = "/(jpg|png|bmp)/i";
$images = findPictures($path, $reg);
?>
<div class="container">
<?php
if(count($images) != 0) {
		echo "<table><tr>";
		for ($i = 0; $i < count($images); $i++) {
			if(!(($i) % 5)) {
				echo "</tr><tr>";
			}
			echo "<td>$images[$i]<br><img style='max-width: 100px' 
			src='img/".$images[$i]."'/></td>";
			//echo '<br />';
		}
		echo "</tr></table>";
}
	
else {
	echo "<p>Sorry, no images in this folder</p>";
}?>
</div>
<?php
function findPictures($path, $reg) {
	$files = scandir($path);
	$images = array();
	foreach ($files as $file) {
		if (preg_match($reg, pathinfo($file, PATHINFO_EXTENSION))){
			array_push($images, $file);
		}
	}
	return $images;
}
?>