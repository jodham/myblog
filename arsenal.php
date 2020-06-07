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
			document.getElementById('arsenallegend-form').style.display="none";
		}
		function displayform(argument) {
			// body...
			document.getElementById('arsenallegend-form').style.display="block";
		}

	</script>
</head>
<body>
<div class="arsenalbdy">
	<img src="" width="50px" height="40px">
	<label>FaFun.com</label>
	<center><strong><label>Arsenal</label></strong></center>
<center>
	<div class="arsenalbar">
	<ul>
		<li><a href="blog.php">HOME</a></li>
	</ul>
    </div>
</center><br>
<div class="arsenal_body">
<div class="arsenal_news">
	<center><strong><i><u><label>News</label></u></i></strong></center>
	<img src="">
	<p>arsenal targeting star</p>
</div>
<div class="arsenal_pics">
	<center><strong><i><u><label>Pics</label></u></i></strong></center>
     	<br><br>
	<fieldset>
		<legend>manchester</legend>
		<div class="manu_fieldset_slider" style="background: red">
			<div class="main_slider"></div>
		</div>
	</fieldset> 
</div>
<div class="arsenal_legendary">
	<center><strong><i><u><label>legendary</label></u></i></strong></center>
	<img src="" width="60px" height="60px"><br>
	 <button onclick="openform()">Arsenal Records</button>
     <button onclick="displayform()">All time legends</button>
     <button>Arsenal Records</button>
     <button>Arsenal Records</button>
     <button>Arsenal Records</button>
     <button>Arsenal Records</button>
</div>
<div class="form-popup" id="my-form">
	<div class="arsenalrecord_window"></div>
	<form action="" method="post" class="form-container">
		<button type="submit" class="btn" name="login" ><a href="Reception.php"></a>LOGIN</button>
		<button type="submit" class="btncancel" onclick="closeform()">Close</button>
	</form>
</div>
<div class="form-popup" id="arsenallegend-form">
	<div class="arsenalrecord_window"></div>
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