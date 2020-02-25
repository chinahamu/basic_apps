<!DOCTYPE html>
<html>
<head>
	<title>BorderRadiusPreviewer</title>
	<link href="{{ asset('css/contents.css') }}" rel="stylesheet">
	<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
</head>
<body>
<div class="center">
	<h1>BorderRadiusPreviewer</h1>
	<table class="center">
		<tr>
			<th>top-left</th>
			<th>top-right</th>
		</tr>
		<tr>
			<td><input type="text" name="top-left" class="input_radius"></td>
			<td><input type="text" name="top-right" class="input_radius"></td>
		</tr>
		<tr>
			<th>bottom-left</th>
			<th>bottom-right</th>
		</tr>
		<tr>
			<th><input type="text" name="bottom-left" class="input_radius"></th>
			<th><input type="text" name="bottom-right" class="input_radius"></th>
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
		
		var top_left = $("input[name=\"top-left\"]").val();
		var top_right = $("input[name=\"top-right\"]").val();
		var bottom_left = $("input[name=\"bottom-left\"]").val();
		var bottom_right = $("input[name=\"bottom-right\"]").val();

		top_left = top_left == "" ? 0 : top_left;
		top_right = top_right == "" ? 0 : top_right;
		bottom_left = bottom_left == "" ? 0 : bottom_left;
		bottom_right = bottom_right == "" ? 0 : bottom_right;
		console.log(top_left);
		$("#res").html("");
		//$("#radius").css('border-radius',"'top_left top_right bottom_right bottom_left'");
		$("#res").html("<div style=\"border: solid 2px; width: 80%; height: 200px; color:red;margin-top: 100px;margin-left:100px;border-radius:"+top_left+"px "+top_right+"px "+bottom_right+"px "+bottom_left+"px;\"></div>")
	})
</script>
</body>
</html>