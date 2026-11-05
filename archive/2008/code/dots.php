<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">



<head>

<title>Dots</title>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<!-- begin stylesheets -->
<link rel="stylesheet" type="text/css" href="../reset.css" />
<link rel="stylesheet" type="text/css" href="menu.css" />
<style type="text/css">
<!--
body {background-color: #1a0516;}
.die {position: absolute; width: 100%; height: 400px;}
.die:hover {background-color: #1a0516;}
-->
</style>
<!-- end stylesheets -->


<!-- begin javascript -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-BBWXW9QV3M"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-BBWXW9QV3M');
</script>
<!-- end javascript -->

</head>






<body>

<div id="nav"><h1>Code Drawings</h1>
<div class="home"><a href="../index.html">HOME</a></div>

<div class="menu">
<ul>
<li><a href="info_stack_drawings.html" class="first on" title="Stack Drawings">Stack Drawings</a><!--[if IE 7]><!--></a><!--<![endif]-->
<!--[if lte IE 6]><table><tr><td><![endif]-->
	<ul>
	<li><a href="space_i.php" title="Space I">Space I</a></li>
	<li><a href="space_ii.php" title="Space II">Space II</a></li>
	<li><a href="space_iii.php" title="Space III">Space III</a></li>
    <li><a href="space_iv.php" title="Space IV">Space IV</a></li>
    <li><a href="space_v.php" title="Space V">Space V</a></li>
	<li><a href="lines_horizontal.php" title="Lines (Horizontal)">Lines (Horizontal)</a></li>
	<li><a href="dots.php" class="on" title="Dots">Dots</a></li>
	<li><a href="lines_vertical.php" title="Lines (Vertical)">Lines (Vertical)</a></li>
    <li><a href="info_stack_drawings.html" title="Stack Drawings Information" class="infolink">Information</a></li>
	</ul>
<!--[if lte IE 6]></td></tr></table></a><![endif]-->
</li>

<li><a href="info_familiar_fluctuations.html" title="Familiar Fluctuations of Loops, Jabs, and Spears">Familiar Fluctuations...</a><!--[if IE 7]><!--></a><!--<![endif]-->
<!--[if lte IE 6]><table><tr><td><![endif]-->
	<ul>
	<li><a href="familiar_fluctuations.html" title="Familiar Fluctuations of Loops, Jabs, and Spears">...Of Loops, Jabs, and Spears</a></li>
     <li><a href="info_familiar_fluctuations.html" title="Familiar Fluctuations Information" class="infolink">Information</a></li>
	</ul>
<!--[if lte IE 6]></td></tr></table></a><![endif]-->
</li>


<li><a href="info_time_pieces.html" title="Time Pieces">Time Pieces</a><!--[if IE 7]><!--></a><!--<![endif]-->
<!--[if lte IE 6]><table><tr><td><![endif]-->
	<ul>
	<li><a href="timepiece_1200_1215.html" title="Time Piece: 12:00AM - 12:05AM">12:00AM - 12:05AM</a></li>
	<li><a href="timepiece_731_734.html" title="Time Piece: 7:31PM - 7:34PM">7:31PM - 7:34PM</a></li>
    <li><a href="info_time_pieces.html" title="Time Piece Information" class="infolink">Information</a></li>
	</ul>
<!--[if lte IE 6]></td></tr></table></a><![endif]-->
</li>
</ul>
</div>
</div>



<?php
for ($j=100; $j <= 500; $j=$j+100) {
		//Top margin
		echo '<a href="#"><div class="die" style="top: ' . $j . "px";
		echo '; ';
		
		//Background image
		echo 'background-image: url(images/line_trans_6.png)';
		echo '; ';
		
		//Background repeat
		echo 'background-repeat: repeat-x';
		echo '; ';
		
		//Random background position
		$xPos = rand(-200, 1200);
		$yPos = rand(100, 200);
		echo "background-position: " . $xPos . "px " . $yPos . "px" ;
		echo '; ';
		
		//Left margin
		echo 'left: 0' . "px";
		echo ';"></div></a>';
}
?>

<?php
for ($j=100; $j <= 500; $j=$j+10) {
		//Top margin
		echo '<a href="#"><div class="die" style="top: ' . $j . "px";
		echo '; ';
		
		//Background image
		//background: url(images/line_trans_9.png) repeat-x;
		echo 'background-image: url(images/line_trans_8.png)';
		echo '; ';
		
		//Background repeat
		echo 'background-repeat: repeat-y';
		echo '; ';
		
		//Random background position
		$xPos = rand(-200, 1200);
		$yPos = rand(100, 200);
		echo "background-position: " . $xPos . "px " . $yPos . "px" ;
		echo '; ';

		//Left margin
		echo 'left: 0' . "px";
		echo ';"></div></a>';
}
?>




</body>
</html>