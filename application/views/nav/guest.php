<!-- Navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
	<div class="container">

		<!-- Brand -->
		<a class="navbar-brand waves-effect" href="#" target="_blank">
			<strong class="blue-text">Better Online Survey</strong>
		</a>

		<!-- Collapse -->
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
		 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<!-- Links -->
		<div class="collapse navbar-collapse" id="navbarSupportedContent">

			<!-- Left -->
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link waves-effect" href="<?=base_url();?>">Home
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link waves-effect" href="#">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link waves-effect" href="#">Services</a>
				</li>
				<li class="nav-item">
					<a class="nav-link waves-effect" href="#">Contact</a>
				</li>
			</ul>

			<!-- Right -->
			<ul class="navbar-nav nav-flex-icons">
				<li class="nav-item">
					<a class="nav-link" data-toggle="modal" data-target="#loginModal">
						<i class="fa fa-sign-in mr-2"></i>Login
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('pages/register'); ?>">
						<i class="fa fa-user mr-2"></i>Register
					</a>
				</li>
			</ul>
		</div>

	</div>
</nav>

<div class="modal fade" id="loginModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<div class="modal-header text-center">
					<h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form name="loginForm" method="POST" action="<?=base_url('users/login');?>">
					<div class="modal-body mx-3">
						<div class="md-form mb-5">
							<i class="fa fa-envelope prefix grey-text"></i>
							<input type="text" id="username" name="username" class="form-control validate">
							<label data-error="Oops." data-success="" for="username">Your email</label>
						</div>

						<div class="md-form mb-4">
							<i class="fa fa-lock prefix grey-text"></i>
							<input type="password" id="password" name="password" class="form-control validate">
							<label data-error="Oops." data-success="" for="password">Your password</label>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Login</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
