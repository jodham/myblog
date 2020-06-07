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
		function closeform(argument) 
		{
			// body...
			document.getElementById('chelsea_facts-form').style.display="none";
		}
		function showform(argument) {
			// body...
			document.getElementById('chelsea_facts-form').style.display="block";
		}

	</script>
</head>
<body>
<div class="chelseabdy">
	<img src="" width="50px" height="40px">
	<label>FaFun.com</label>
	<center><strong><label>Chelsea Fc</label></strong></center>
<center><div class="chelseabar">
	<ul>
		<li><a href="blog.php">HOME</a></li>
	</ul>
</div>
</center>
<div class="chelsea_body">
<div class="chelsea_news">
	<center><strong><i><u><label>News</label></u></i></strong></center>
	
</div>
<div class="chelsea_pics">
	<center><strong><i><u><label>Pics</label></u></i></strong></center>
		<br><br>
	<fieldset>
		<legend>Chelsea</legend>
		<div class="manu_fieldset_slider" style="background: red">
			<div class="main_slider"></div>
		</div>
	</fieldset> 
</div>
<div class="chelsea_legendary">
	<center><strong><i><u><label>legendary</label></u></i></strong></center>
		<img src="" width="60px" height="60px"><br>
	 <button onclick="openform()">chelsea Records</button>
     <button onclick="openform()">All time legends</button>
     <button onclick="showform()">chelsea Facts</button>
     <button onclick="openform()">chelsea Records</button>
     <button>chelsea Records</button>
     <button>chelsea Records</button>
</div>
<div class="form-popup" id="chelsea_facts-form">
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