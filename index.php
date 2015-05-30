<html>
<head>
	<style type="text/css">
	li {
    display: inline-block;
    list-style: none;
    margin: 5px;
		}
		img {
			
			height:50px;
		}

	</style>
</head>
<body>
<?php

$dirname = "images/";
$png = glob($dirname."*.png");
$jpg = glob($dirname."*.jpg");
$gif = glob($dirname."*.gif");
$images = array_merge($png ,$jpg , $gif);

?>
<ul>
<?php
foreach($images as $image) {
echo '<li><img src="'.$image.'" onclick="showMePath(this.src);" /></li>';
}
?>
</ul>
<script type="text/javascript">
function showMePath(image) {

	alert("Image Path Is : "+image);
}
</script>
</body>
</html>