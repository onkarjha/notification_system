<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<script src="script.js"></script>
	<style type="text/css">
		body{
			background: black;
		}*
		{
			margin:0;
			padding: 0;
			box-sizing: border-box;
		}.noti{
			position: relative;
			margin:200px;
			width: 150px;
			height: 150px;
			padding: 20px;
			border-radius: 20px;
			background: white;
		}.ico{
			width:100px;
			height: 100px;
		}span{
			background: red;
			padding: 20px;
			border-radius: 50px;
			color:white;
			display: none;
			position: absolute;
			font-weight: bold;
		}
	</style>
	<script type="text/javascript">
		$(document).ready(function () {
			setInterval(function() {
				$.post("get.php",{data:'get'},function (data) {
					if(data>0){
                        $("span").show();
						$("span").text(data);
					}
				});
			},1000);
			$(".noti").click(function () {
				$("span").hide();
				$.post("get.php",{update:'update'},function(data) {
					
				});
			});
		});
	</script>
</head>
<body>
<div class="noti">
	<img src="bell.svg" class="ico">
	<span>12</span>
</div>
</body>
</html>