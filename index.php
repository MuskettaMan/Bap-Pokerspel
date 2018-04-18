<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pokerspel</title>
</head>
<body>
	<?php
		function triangle($x, $y, $radius, $image) {

			$points = array(
				$x - $radius, $y + $radius,
				$x + $radius, $y + $radius,
				$x, 		  $y - $radius
			);

			$color = imagecolorallocate($image, 255, 0, 255);
			imagefilledpolygon($image, $points, 3, $color);

		}

		function dobbelsteen($worp) {

			$image = imagecreate(210, 210) or die("Cannot initialize new GD image stream");
			$extraColor = imagecolorallocate($image, 160, 160, 160);
			$backgroundColor = imagecolorallocate($image, 0, 0, 0);
			$color = imagecolorallocate($image, 255, 255, 255);
			imagefilledrectangle($image, 10, 10, 200, 200, $backgroundColor);
			

			switch ($worp) {
				case 1:
					triangle(100, 100, 20, $image);
					//imagefilledellipse($image, 100, 100, 40, 40, $color); //Dot 4
					break;
				case 2:
					triangle(50, 50, 20, $image);
					triangle(150, 150, 20, $image);
					// imagefilledellipse($image, 50, 50, 40, 40, $color); //Dot 1
					// imagefilledellipse($image, 150, 150, 40, 40, $color); //Dot 7
					break;
				case 3:
					triangle(50, 50, 20, $image);
					triangle(100, 100, 20, $image);
					triangle(150, 150, 20, $image);
					// imagefilledellipse($image, 50, 50, 40, 40, $color); //Dot 1
					// imagefilledellipse($image, 100, 100, 40, 40, $color); //Dot 4
					// imagefilledellipse($image, 150, 150, 40, 40, $color); //Dot 7
					break;
				case 4:
					triangle(50, 50, 20, $image);
					triangle(150, 50, 20, $image);
					triangle(50, 150, 20, $image);
					triangle(150, 150, 20, $image);
					// imagefilledellipse($image, 50, 50, 40, 40, $color); //Dot 1
					// imagefilledellipse($image, 150, 50, 40, 40, $color); //Dot 2
					// imagefilledellipse($image, 50, 150, 40, 40, $color); //Dot 6
					// imagefilledellipse($image, 150, 150, 40, 40, $color); //Dot 7
					break;
				case 5:
					triangle(50, 50, 20, $image);
					triangle(150, 50, 20, $image);
					triangle(100, 100, 20, $image);
					triangle(50, 150, 20, $image);
					triangle(150, 150, 20, $image);
					// imagefilledellipse($image, 50, 50, 40, 40, $color); //Dot 1
					// imagefilledellipse($image, 150, 50, 40, 40, $color); //Dot 2
					// imagefilledellipse($image, 100, 100, 40, 40, $color); //Dot 4
					// imagefilledellipse($image, 50, 150, 40, 40, $color); //Dot 6
					// imagefilledellipse($image, 150, 150, 40, 40, $color); //Dot 7
					break;
				case 6:
					triangle(50, 50, 20, $image);
					triangle(150, 50, 20, $image);
					triangle(50, 100, 20, $image);
					triangle(150, 100, 20, $image);
					triangle(50, 150, 20, $image);
					triangle(150, 150, 20, $image);
					// imagefilledellipse($image, 50, 50, 40, 40, $color); //Dot 1
					// imagefilledellipse($image, 150, 50, 40, 40, $color); //Dot 2
					// imagefilledellipse($image, 50, 100, 40, 40, $color); //Dot 3
					// imagefilledellipse($image, 150, 100, 40, 40, $color); //Dot 5
					// imagefilledellipse($image, 50, 150, 40, 40, $color); //Dot 6
					// imagefilledellipse($image, 150, 150, 40, 40, $color); //Dot 7
					break;
				default:
					# code...
					break;
			}

			imagepng($image, $worp . "dobbelsteen.png");
			imagedestroy($image);

		}

		for($i = 0; $i < 5; $i++) {
			$worp = mt_rand(1, 6);
			dobbelsteen($worp);
			print "<img src=  ".  $worp .  "dobbelsteen.png?".date("U") . "> ";
			
		}

	?>

	<form action="index.php" method="POST">
		<input type="submit" value="Roll Again!">
	</form>

</body>
</html>