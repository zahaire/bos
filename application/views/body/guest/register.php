<div class="bg-img">
	<div class="container">
		<div class="row mt-5">
			<div class="col-md-7">
			</div>
			<div class="col-md-5">
				<div class="card my-5">
					<h3 class="card-header">Create a new account</h3>
					<!--Card content-->
					<div class="card-body px-lg-5">
						<?php if (validation_errors()): ?>
						<div class="alert alert-danger" role="alert">
							<?= validation_errors(); ?>
						</div>
						<?php elseif ($this->session->flashdata('error')): ?>
						<div class="alert alert-danger" role="alert">
							<?= $this->session->flashdata('error'); ?>
						</div>
						<?php endif; ?>
						<!-- Form -->
						<form class="userinput" name="registerForm" method="POST" action="<?=base_url('users/validate');?>">
							<div class="md-form">
								<input type="text" id="username" name="username" class="form-control validate">
								<label for="username">Username</label>
							</div>

							<div class="md-form">
								<input type="email" id="email" name="email" class="form-control validate">
								<label for="email">Email Address</label>
							</div>

							<div class="md-form">
								<input type="password" id="password" name="password" class="form-control validate">
								<label for="password">Password</label>
							</div>

							<div class="md-form">
								<input type="password" id="conf_password" name="conf_password" class="form-control validate">
								<label for="conf_password">Confirm password</label>
							</div>

							<div class="md-form">
								<input type="text" id="fname" name="fname" class="form-control validate">
								<label for="fname">First Name</label>
							</div>

							<div class="md-form">
								<input type="text" id="mname" name="mname" class="form-control validate">
								<label for="mname">Middle Name</label>
							</div>

							<div class="md-form">
								<input type="text" id="lname" name="lname" class="form-control validate">
								<label for="lname">Last Name</label>
							</div>

							<div class="md-form">
								<label for="bdate">Birth Date</label>
								<br>
								<br>
								<input type="date" id="bdate" name="bdate" class="form-control validate">
							</div>

							<div class="md-form">
								<label for="lname">Sex</label>
								<br>
								<div class="d-flex justify-content-around">
									<div class="custom-control custom-radio custom-control-inline">
										<input type="radio" class="custom-control-input" id="sex_female" name="sex" value="female">
										<label class="custom-control-label" for="sex_female">
											Female
										</label>
									</div>
									<div class="custom-control custom-radio custom-control-inline">
										<input type="radio" class="custom-control-input" id="sex_male" name="sex" value="male">
										<label class="custom-control-label" for="sex_male">
											Male
										</label>
									</div>
								</div>
							</div>

							<hr class="my-5">

							<div class="md-form">
								<label for="yr">Region</label>
								<br>
								<br>
								<select class="browser-default custom-select" id="region" name="region">
									<?php foreach($regions as $region): ?>
									<option value="<?= $region->id; ?>">
										<?= $region->text; ?>
									</option>
									<?php endforeach; ?>
								</select>
							</div>

							<div class="md-form">
								<label for="yr">City</label>
								<br>
								<br>
								<select class="browser-default custom-select" id="city" name="city">
									<?php foreach($cities as $city): ?>
									<option value="<?= $city->id; ?>">
										<?= $city->text; ?>
									</option>
									<?php endforeach; ?>
								</select>
							</div>

							<hr class="my-5">

							<div class="md-form">
								<label for="org">Organization</label>
								<br>
								<br>
								<select class="browser-default custom-select" id="org" name="org">
									<?php foreach($organizations as $organization): ?>
									<option value="<?= $organization->id; ?>">
										<?= $organization->name; ?>
									</option>
									<?php endforeach; ?>
								</select>
							</div>

							<div class="md-form">
								<input type="text" id="student_id" name="student_id" class="form-control validate">
								<label for="student_id">ID Number</label>
							</div>

							<div class="md-form">
								<label for="yr">Program</label>
								<br>
								<br>
								<select class="browser-default custom-select" id="program" name="program">
									<?php foreach($programs as $program): ?>
									<option value="<?= $program->id; ?>">
										<?= $program->code; ?>
									</option>
									<?php endforeach; ?>
								</select>
							</div>

							<div class="md-form">
								<label for="yr">Year Level</label>
								<br>
								<br>
								<select class="browser-default custom-select" id="yr" name="yr">
									<?php foreach($yr_lvls as $yr_lvl): ?>
									<option value="<?= $yr_lvl->id; ?>">
										<?= $yr_lvl->text; ?>
									</option>
									<?php endforeach; ?>
								</select>
							</div>

							<!-- Sign in button -->
							<div class="form-group text-right">
								<button class="btn btn-outline-warning btn-rounded" type="button">Clear</button>
								<button class="btn btn-outline-primary btn-rounded" type="submit">Register</button>
							</div>
						</form>
						<!-- Form -->
					</div>
				</div>
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->
</div>
