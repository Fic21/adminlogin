<!DOCTYPE html>
<html>
<head>
	<title>Form Falidasi dengan Js</title>	
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<br>
	<br>
	<center><h2>Form Validasi</h2></center>
	<br>
	<div class="login">
		<br>
			<form action="login.php" method="post" onsubmit="return validasi()">
			<div>
				<label>Username:</label>
				<input type="text" name="username" id="username">
			</div>
			<div>
				<label>Password:</label>
				<input type="password" name="password" id="password">
			</div>	
			<div>
				<input type="submit" value="login" class="tombol">
			</div>
			</form>
	</div>
</body>
<script type="text/javascript">
	function	validasi(){
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;
		if (username!=""&&password!=""){
			return true;
		}
		else{
			alert('Username and Password kosong!');
			return true;
		}
	}
</script>nxc
</html>