<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container">
		<a class="navbar-brand" href="#">BOS</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
		 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="#">Dashboard</a>
				</li>
			</ul>
			<ul class="navbar-nav ml-auto">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
					 aria-haspopup="true" aria-expanded="false">
						Account
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item disabled" href="#">Settings</a>
						<!-- <a class="dropdown-item" href="#">Another action</a> -->
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="<?= base_url('users/logout') ?>">Logout</a>
					</div>
				</li>
			</ul>
		</div>
	</div>
</nav>
