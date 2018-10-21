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
					<a class="nav-link waves-effect" href="<?=base_url();?>Home/index">Home
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link waves-effect" href="#" target="_blank">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link waves-effect" href="">Products</a>
				</li>
				<li class="nav-item">
					<a class="nav-link waves-effect" href="#" target="_blank">Services</a>
				</li>
				<li class="nav-item">
					<a class="nav-link waves-effect" href="#" target="_blank">Contact</a>
				</li>
			</ul>

			<!-- Right -->
			<ul class="navbar-nav nav-flex-icons">


				<li class="nav-item">
					<a class="nav-link" data-toggle="modal" data-target="#exampleModal">
						<i class="fa fa-sign-in mr-2"></i>Login
					</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" data-toggle="modal" data-target="#exampleModal1">
						<i class="fa fa-user mr-2"></i>Register
					</a>

				</li>
			</ul>

		</div>

	</div>
</nav>
<!-- Navbar -->

<div class="modal fade" id="exampleModal1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<div class="modal-header text-center">
					<h4 class="modal-title w-100 font-weight-bold">Register</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body mx-3">
					<div class="md-form mb-5">
						<input type="text" id="username" class="form-control validate">
						<label for="defaultForm-username">Username</label>
					</div>

					<div class="md-form mb-4">
						<input type="email" id="email" class="form-control validate">
						<label for="defaultForm-email">Email Address</label>
					</div>

          <div class="md-form mb-5">
						<input type="password" id="password" class="form-control validate">
						<label for="defaultForm-password">Password</label>
					</div>

           <div class="md-form mb-6">
						<input type="text" id="fname" class="form-control validate">
						<label for="defaultForm-fname">First Name</label>
					</div>

            <div class="md-form mb-7">
						<input type="text" id="mname" class="form-control validate">
						<label for="defaultForm-mname">Middle Name</label>
					</div>

           <div class="md-form mb-8">
						<input type="text" id="lname" class="form-control validate">
						<label for="defaultForm-lname">Last Name</label>
					</div>

           <div class="md-form mb-9">
           <label>Organization/School</label>
           <br>
           <br>
    <select class="browser-default custom-select mb-4">
        <option value="" disabled>Choose option</option>
        <option value="2">Not Applicable</option>
        <option value="3">FEU Tech</option>
        <option value="4">University of Santo Thomas</option>
        <option value="5">University of the East</option>
        <option value="6">FEU Manila</option>
        <option value="7">National University</option>
    </select>
					</div>

      <div class="md-form mb-10">
           <label>Year Level</label>
           <br>
           <br>
    <select class="browser-default custom-select mb-4">
        <option value="" disabled>Choose option</option>
        <option value="2">1st Year</option>
        <option value="3">2nd Year</option>
        <option value="4">3rd Year</option>
        <option value="5">4th Year</option>
        <option value="6">5th Year</option>
    </select>
					</div>

               <div class="md-form mb-10">
            
						<input type="text" id="course" class="form-control validate">
						<label for="defaultForm-course">Course</label>
    </select>
					</div>


				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Register</button>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="exampleModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<div class="modal-header text-center">
					<h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body mx-3">
					<div class="md-form mb-5">
						<i class="fa fa-envelope prefix grey-text"></i>
						<input type="email" id="defaultForm-email" class="form-control validate">
						<label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label>
					</div>

					<div class="md-form mb-4">
						<i class="fa fa-lock prefix grey-text"></i>
						<input type="password" id="defaultForm-pass" class="form-control validate">
						<label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Login</button>
				</div>
			</div>
		</div>
	</div>
</div>
