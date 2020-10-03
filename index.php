<?php
//koneksi ke database
require"kdb.php";
//memulai session
session_start();
if(isset($_POST['user']) && isset($_POST['pass'])){
//tangkap data yg diinputan
$user=$_POST["user"];
$pass=$_POST["pass"];
//mengecek table di database
$res=$kdb->query("SELECT * FROM user WHERE 
username='$user' AND password='$pass'");
//jika di table pengguna memiliki baris lebih dari 1
	if($res->num_rows > 0){
		$row = $res->fetch_assoc();
		if($row['id_level'] == 1){
		//buat session nama dan level
		$_SESSION['nama1']=$row['nama'];
		$_SESSION['level1']= "admin";
		//alihkan ke halaman dashboard
		header("location:admin/index.php");
		//jika tidak alihkan ke halaman index.php?info
		} 
		}else {
			header('location:index.php?error');
		}
	
}
?>
<html>
	<head>
		<title>DANA DESA</title>
		<link rel="stylesheet" type="text/css" 
		href="admin/css/style.css">
	</head>
	<body>
		<div id="login">
		  <h3>ADMINISTRATOR</h3>
			<form method="POST">
			<table width="100%">
				<tr>
					<?php 
					if(isset($_GET['error'])){
						$display = "block";
						$pemberitahuan = 
						"Username atau Password salah";
					}elseif(isset($_GET['msg'])){
						$display = "block";
						$pemberitahuan = 
						"Anda harus login dulu!";
					}else{
						$display = "none";
						$pemberitahuan = "";
					}
					?>
						<td><div class="info" style="display:
						<?php echo $display;?>">
						<?php echo $pemberitahuan;?></div></td>
				</tr>
				<tr>
					<td><input type="text" name="user" 
					placeholder="Username" required/>
					</td>
				</tr>
				<tr>
					<td><input type="password" name="pass" 
					placeholder="Password" 
					required/>
					</td>
				</tr>
				<tr>
					<td><input type="submit" 
					value="Login"></td>
				</tr>
			</table>
			</form>
		</div>
	</body>
      </html>