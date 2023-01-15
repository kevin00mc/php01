<?php
$str = file_get_contents("./data/data.txt");
$dogNums = substr_count($str, "dog");
$catNums = substr_count($str, "cat");
$fishNums = substr_count($str, "fish");
$birdNums = substr_count($str, "bird");
$totalNums = $dogNums + $catNums + $fishNums + $birdNums;

$catPer= $catNums / $totalNums * 100;
$dogPer= $dogNums / $totalNums * 100;
$birdPer= $birdNums / $totalNums * 100;
$fishPer= $fishNums / $totalNums * 100;

$dataPoints = array( 
	array("label"=>"犬", "y"=>$dogPer),
	array("label"=>"猫", "y"=>$catPer),
	array("label"=>"魚", "y"=>$fishPer),
	array("label"=>"鳥", "y"=>$birdPer)
)
 
?>
<!DOCTYPE HTML>
<html>
<head>
<title>MIL ペット派閥　アンケート結果</title>
<script>
window.onload = function() {
 
 
var chart = new CanvasJS.Chart("chartContainer", {
	theme: "light2",
	animationEnabled: true,
	title: {
		text: "MIL ペット派閥"
	},
	data: [{
		type: "pie",
		indexLabel: "{y}",
		yValueFormatString: "#,##0.0\"%\"",
		indexLabelPlacement: "inside",
		indexLabelFontColor: "#36454F",
		indexLabelFontSize: 18,
		indexLabelFontWeight: "bolder",
		showInLegend: true,
		legendText: "{label}",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>