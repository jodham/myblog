<!DOCTYPE html>
<html>
<head>
	<title>fanfun.com</title>
	<link rel="stylesheet" type="text/css" href="blog.css">
	<script type="text/javascript">
		function closeform(argument) {
			// body...
			document.getElementById('my-form').style.display="none";
		}
		function openform(argument) {
			// body...
			document.getElementById('my-form').style.display="block";
		}
		function closeform(argument) {
			// body...
			document.getElementById('manu-facts').style.display="none";
		}
		function displayform(argument)
		{
			document.getElementById('manu-facts').style.display="block";
		}

	</script>
</head>
<body>
<div class="manubdy">
	<img src="" width="50px" height="40px">
	<label>FaFun.com</label>
	<center><strong><label>Manchester United</label></strong></center>
<center><div class="manubar">
	<ul>
		<li><a href="blog.php">HOME</a></li>
	</ul>
</div>
</center>
<div class="manu_body">
<div class="manu_news">
	<center><strong><i><u><label>News</label></u></i></strong></center>
	<img src="">
</div>
<div class="manu_pics">
	<center><strong><i><u><label>Pics</label></u></i></strong></center>
	<br><br>
	<fieldset>
		<legend>manchester</legend>
		<div class="manu_fieldset_slider" style="background: red">
			<div class="main_slider"></div>
		</div>
	</fieldset> 

</div>
<div class="manu_legendary">
	<center><strong><i><u><label>legendary</label></u></i></strong></center>
		<img src="" width="60px" height="60px"><br>
	 <button onclick="openform()">Manchester Records</button>
     <button onclick="openform()">All time legends</button>
     <button onclick="displayform()">Manchester Facts</button>
     <button>Manchester Records</button>
     <button>Manchester Records</button>
     <button>Manchester Records</button>
</div>
<div class="form-popup" id="my-form">
	<div class="scroll_window"></div>
	<form action="" method="post" class="form-container">
		<button type="submit" class="btn" name="login" ><a href="Reception.php"></a>LOGIN</button>
		<button type="submit" class="btncancel" onclick="closeform()">Close</button>
	</form>
</div>
<div class="form-popup" id="manu-facts">
	<div class="scroll_window"></div>
	<form action="" method="post" class="form-container">
		<button type="submit" class="btn" name="login" ><a href="Reception.php"></a>LOGIN</button>
		<button type="submit" class="btncancel" onclick="closeform()">Close</button>
	</form>
</div>
</div>
<div class="footer_container"></div>	
</div>
</body>
</html>