<!DOCTYPE html>
<html>
<head>
	<title>BorderRadiusPreviewer</title>
	<link href="{{ asset('css/contents.css') }}" rel="stylesheet">
	<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <script data-ad-client="ca-pub-1023686431026657" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</head>
<body>
<div class="center">
	<h1>BorderRadiusPreviewer</h1>
	<table class="center">
		<tr>
			<th>Horizontal-top-left</th>
			<th>Horizontal-top-right</th>
		</tr>
		<tr>
			<td><input type="text" name="horizontal-top-left" class="input_radius"></td>
			<td><input type="text" name="horizontal-top-right" class="input_radius"></td>
		</tr>
		<tr>
			<th>Horizontal-bottom-left</th>
			<th>Horizontal-bottom-right</th>
		</tr>
		<tr>
			<th><input type="text" name="horizontal-bottom-left" class="input_radius"></th>
			<th><input type="text" name="horizontal-bottom-right" class="input_radius"></th>
		</tr>
		<tr>
			<th>Vertical-top-left</th>
			<th>Vertical-top-right</th>
		</tr>
		<tr>
			<td><input type="text" name="vertical-top-left" class="input_radius"></td>
			<td><input type="text" name="vertical-top-right" class="input_radius"></td>
		</tr>
		<tr>
			<th>Vertical-bottom-left</th>
			<th>Vertical-bottom-right</th>
		</tr>
		<tr>
			<th><input type="text" name="vertical-bottom-left" class="input_radius"></th>
			<th><input type="text" name="vertical-bottom-right" class="input_radius"></th>
		</tr>
	</table>
	<div>
		<h3>Preview</h3>
	</div>
	<div class="border" id="res">
		<div id="radius" style="border: solid 2px; width: 80%; height: 200px; color:red; margin-top: 100px;margin-left:100px"></div>
	</div>
</div>
<script type="text/javascript">
	$(".input_radius").keyup(function(){
		
		var horizontal_top_left = $("input[name=\"horizontal-top-left\"]").val();
		var horizontal_top_right = $("input[name=\"horizontal-top-right\"]").val();
		var horizontal_bottom_left = $("input[name=\"horizontal-bottom-left\"]").val();
		var horizontal_bottom_right = $("input[name=\"horizontal-bottom-right\"]").val();
		var vertical_top_left = $("input[name=\"vertical-top-left\"]").val();
		var vertical_top_right = $("input[name=\"vertical-top-right\"]").val();
		var vertical_bottom_left = $("input[name=\"vertical-bottom-left\"]").val();
		var vertical_bottom_right = $("input[name=\"vertical-bottom-right\"]").val();

		horizontal_top_left = horizontal_top_left == "" ? 0 : horizontal_top_left;
		horizontal_top_right = horizontal_top_right == "" ? 0 : horizontal_top_right;
		horizontal_bottom_left = horizontal_bottom_left == "" ? 0 : horizontal_bottom_left;
		horizontal_bottom_right = horizontal_bottom_right == "" ? 0 : horizontal_bottom_right;

		vertical_top_left = vertical_top_left == "" ? horizontal_top_left : vertical_top_left;
		vertical_top_right = vertical_top_right == "" ? horizontal_top_right : vertical_top_right;
		vertical_bottom_left = vertical_bottom_left == "" ? horizontal_bottom_left : vertical_bottom_left;
		vertical_bottom_right = vertical_bottom_right == "" ? horizontal_bottom_right : vertical_bottom_right;

		$("#res").html("");
		//$("#radius").css('border-radius',"'top_left top_right bottom_right bottom_left'");
		$("#res").html("<div style=\"border: solid 2px; width: 80%; height: 200px; color:red;margin-top: 100px;margin-left:100px;border-radius:"+horizontal_top_left+"px "+horizontal_top_right+"px "+horizontal_bottom_right+"px "+horizontal_bottom_left+"px /"+vertical_top_left+"px "+vertical_top_right+"px "+vertical_bottom_right+"px "+vertical_bottom_left+"px;\"></div>")
	})
</script>
</body>
</html>