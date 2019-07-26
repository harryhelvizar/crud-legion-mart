<?php 
	include 'header.php';
	include 'koneksi.php';
 ?>

<div class="container" align="center">
	<div align="center" style="width: 400px; margin-top: 10%; -webkit-box-shadow: 0px 0px 30px #788788;">
		<form action="a_login.php" method="POST" style="padding: 40px">
			<h3 align="center">LOGIN</h3>
			<hr>
			<div class="form-group" align="left">
				 <label>Username : </label>
				 <input type="text" name="username" class="form-control" placeholder="Ketikkan Username Anda">
			</div>
			<div class="form-group" align="left">
				<label>Password : </label>
				<input type="password" name="password" class="form-control" placeholder="Password">
			</div>
			<div class="checkbox" align="left">
				<label><input type="checkbox" name="wew"> Remember Me</label>
			</div>
			<button type="submit" class="btn btn-success btn-block" style="margin-top: 10px">Login</button>
			<button type="submit" class="btn btn-info btn-block">Daftar</button>
		</form>
	</div>
</div>