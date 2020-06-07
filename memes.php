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
		function showform(argument) {
			// body...
			document.getElementById('create_meme_form').style.display="block";
		}

	</script>
</head>
<body>
<div class="memesbdy">
	<img src="" width="50px" height="40px">
	<label>FaFun.com</label>
<center><div class="memesbar">
	<ul>
		<li><a href="blog.php">HOME</a></li>
		<li><a href="memes.php">VIEW/DOWNLOAD</a></li>
		<button onclick="showform()">CREATE</button>
	</ul>
</div>
</center>
<br><br>
<div class="memetype">
	<div class="funnytype">
					<div class="slider">
				<figure>
					<div class="slide"><img src="images/memes/meme2.jpg" width="200px" height="250px"></div>
					<div class="slide"><img src="images/memes/meme3.jpg" width="200px" height="250px"></div>
					<div class="slide"><img src="images/memes/meme4.jpg" width="200px" height="250px"></div>
					<div class="slide"><img src="images/memes/meme5.jpg" width="200px" height="250px"></div>
					<div class="slide"><img src="images/memes/meme6.jpg" width="200px" height="250px"></div>
				</figure>
			</div>
			Are you bored???? Smile and laugh<br>abit with fanfun.com<br>
			<a href="funnymemes.php">view memes</a>
       </div>
	<div class="biblemotivation">
		<div class="slider">
				<figure>
					<div class="slide"><img src="joe.jpg" width="200px" height="250px"></div>
					<div class="slide"><img src="joe.jpg" width="200px" height="250px"></div>
					<div class="slide"><img src="joe.jpg" width="200px" height="250px"></div>
					<div class="slide"><img src="joe.jpg" width="200px" height="250px"></div>
					<div class="slide"><img src="joe.jpg" width="200px" height="250px"></div>
				</figure>
			</div>
		</div>
	<div class="motivation">
		<div class="slider">
				<figure>
					<div class="slide"><img src="joe.jpg" width="200px" height="250px"></div>
					<div class="slide"><img src="joe.jpg" width="200px" height="250px"></div>
					<div class="slide"><img src="joe.jpg" width="200px" height="250px"></div>
					<div class="slide"><img src="joe.jpg" width="200px" height="250px"></div>
					<div class="slide"><img src="joe.jpg" width="200px" height="250px"></div>
				</figure>
			</div>
			start a day with a motivation to fuel<br>
			you as you achieve your goals today hi<br>
			<a href="">view pins</a>
	</div>
</div>
<div class="form-popup" id="create_meme_form">
	<div class="create_meme_window"></div>
	<form action="" method="post" class="form-container">
		<button type="submit" class="btn" name="login" ><a href="Reception.php"></a>LOGIN</button>
		<button type="submit" class="btncancel" onclick="closeform()">Close</button>
	</form>
</div>	
</div>
</body>
</html>