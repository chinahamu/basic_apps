<!DOCTYPE html>
<html>
<head>
	<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <link href="{{ asset('css/contents.css') }}" rel="stylesheet">
	<title>bin2dec</title>
</head>
<body>
	<table class="center">
		<tr>
			<th style="font-size: xx-large">2進数</th>
		</tr>
		<tr>
			<td><input type="text" id="bin" name="bin"></td>
		</tr>
		<tr>
			<td id="bin_error"></td>
		</tr>
		<tr>
			<td><input type="submit" value="変換" name="convert"></td>
		</tr>
		<tr>
			<th style="font-size: xx-large">10進数</th>
		</tr>
		<tr>
			<td id="res" style="font-size:x-large"></td>
		</tr>
	</table>
</body>
<script>
	$("#bin").keyup(function(){
		var bin = $('#bin').val();
		var tag = validation(bin);
		$("#bin_error").html(tag);
	});

	$("input[name=\"convert\"]").click(function(){
		 bin = $('#bin').val();
		 var tag = validation(bin);
		 if(tag === ""){
			res = parseInt(bin, 2);
		 	$("#res").text(res);		 	
		 }else{
		 	alert(tag.replace(/<("[^"]*"|'[^']*'|[^'">])*>/g,''))
		 }

	});

	function validation(bin){
		var i=0;
		for(var property of bin) {
			//console.log(property);
			i++;
   			var pattern = /^[-]?([0-1]\d*|0)(\.\d+)?$/;
   			test = pattern.test(property);
   			if(i > 8 && !test){
   				tag = "<span style=\"color:red;font-weight:bold;\">入力できるのは8ケタまでです</span><br><span style=\"color:red;font-weight:bold;\">入力できるのは２進数だけです</span>";
   			}else if(!test){
   				tag = "<span style=\"color:red;font-weight:bold;\">入力できるのは２進数だけです</span><br>";
   				break;
   			}else if(i > 8){
   				tag = "<span style=\"color:red;font-weight:bold;\">入力できるのは8ケタまでです</span><br>";
   			}else{
   				tag = "";
   			}
		}

		return tag;
	}
</script>
</html>