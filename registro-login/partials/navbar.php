<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<div class="container">
		<a class="navbar-brand" href="#">The Fucking Website of GOT</a>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myOwnNav" aria-controls="myOwnNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="myOwnNav">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
				<li class="nav-item"><a class="nav-link" href="products.php">Products</a></li>
				<li class="nav-item"><a class="nav-link" href="faq.php">F.A.Q.</a></li>
			</ul>

			<ul class="navbar-nav ml-auto" style="display: flex; align-items: center;">
				<li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>
				<li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="dropNavBar" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<img src="images/user-default.png" width="40" style="border-radius: 50%; background-color: #ffffff; padding: 5px;">
						Hola Usuario
					</a>
					<div class="dropdown-menu" aria-labelledby="dropNavBar">
						<a class="dropdown-item" href="profile.php">Mi perfil</a>
						<a class="dropdown-item" href="#">Salir</a>
					</div>
				</li>
			</ul>
		</div>
	</div>
</nav>
