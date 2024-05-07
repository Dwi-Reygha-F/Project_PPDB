<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">

	<title>Login</title>
</head>
<body>
<style>
    /* Style untuk menengahkan notifikasi pop-up */
    .popup {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: purple;
        padding: 40px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        z-index: 9999;
		font-size: 20px;
		color: red;
    }
	.close-btn {
		position: absolute;
        top: 0px; /* Mengubah jarak dari atas */
        right: 5px; /* Mengubah jarak dari kanan */
		left: 500px;
        cursor: pointer;
        font-size: 40px;
        text-decoration: none;
        color: black;
    }
	
</style>


<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo '
			
			<div id="popup" class="popup" style="display: none;">
			<a href="index.php" class="close-btn">&times;</a>
			<p>Username atau Password salah. Silakan coba lagi.</p>
		</div>
			
';
		}
	}
	?>
	<div class="container">
		<div class="screen">
			<div class="screen__content">
				<form class="login" action="cek_login.php" method="post">
					<div class="login__field">
						
						<input type="text" name="username" class="login__input" placeholder="Username / Email">
					</div>
					<div class="login__field">
						
						<input type="password" name="password" class="login__input" placeholder="Password">
					</div>
					<button class="button login__submit" type="submit">
						<span class="button__text">Log In Now</span>
						<i class="button__icon fas fa-chevron-right"></i>
					</button>				
				</form>
				
			</div>
			<div class="screen__background">
				<span class="screen__background__shape screen__background__shape4"></span>
				<span class="screen__background__shape screen__background__shape3"></span>		
				<span class="screen__background__shape screen__background__shape2"></span>
				<span class="screen__background__shape screen__background__shape1"></span>
			</div>		
		</div>
	</div>
	
</body><script>
    // Mendapatkan referensi elemen pop-up
    var popup = document.getElementById('popup');

    // Menampilkan notifikasi pop-up
    function showPopup() {
        popup.style.display = 'block';
    }

    

    // Memanggil fungsi showPopup() untuk menampilkan popup
    showPopup();
</script>
</script>

</html>

