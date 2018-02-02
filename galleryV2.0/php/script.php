<?php
$path = "../img";
$reg = "/(jpg|png|bmp)/i";
$images = findPictures($path, $reg);
?>
<div class="gallery">
<?php
if(count($images) != 0) {
		for ($i = 0; $i < count($images); $i++) {
			echo "<div class='picture'>";
			echo "<img src='img/".$images[$i]."'/><br>$images[$i]";
			echo "</div>";
		}
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