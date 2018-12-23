<?php 
include('./method.imagedatauri.php');

$source = convertImageDataURI('./the-good-the-bad-and-the-ugly.jpg');
?>

<img src="<?=$source?>" alt="">
