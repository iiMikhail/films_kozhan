<?php
function createThumbnail($imagePath, $cropWidth = 100, $cropHeight = 100) {
	// read image
	$imagick = new Imagick($imagePath);
	$width = $imagick->getImageWidth();
	$height = $imagick->getImageHeight();

	// resize image
	if($width > $height) {
		$imagick->thumbnailImage(0, $cropHeight);
	} else {
		$imagick->thumbnailImage($cropWidth, 0);
	}

	// обрезка фото
	$width = $imagick->getImageWidth();
	$height = $imagick->getImageHeight();

	// center image
	$centreX = round($width / 2);
	$centreY = round($height /2);

	//point cut center image
	$cropWidthHulf = round($cropWidth / 2);
	$cropHeightHulf = round($cropHeight / 2);

	//koordinaty for start cut
	$startX = max(0, $centreX - $cropWidthHulf);
	$startY = max(0, $centreY - $cropHeightHulf);

	$imagick->cropImage($cropWidth, $cropHeight, $startX, $startY);

	//return complete image
	return $imagick;
}



?>