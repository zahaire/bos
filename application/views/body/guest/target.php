<div class="container mt-5">

	<!--Grid row-->
	<div class="row wow fadeIn mt-5">

		<!--Grid column-->
		<div class="col mt-5">

			<!--Card-->
			<div class="card">

				<!--Card content-->
				<div class="card-body">
					<!--Category & Title-->
					<!-- <a href="" class="grey-text"> -->
					<h5>INSERT SURVEY TITLE HERE</h5>
					<!-- </a> -->
					<h4>Audience Targeting</h4>
					<p>Here, you can set who gets to answer your survey.</p>

					<div>
						<div class="form-group mt-4">
							<h4>Narrow by Sex</h4>
						</div>
						<div class="form-group">
							<label>Sex: <span id="min_age_val_span"></span></label>
							<div class="ml-5">
								<div class="custom-control custom-radio">
									<input type="radio" id="male_rdo" name="sex" class="custom-control-input">
									<label class="custom-control-label" for="male_rdo">Male</label>
								</div>
								<div class="custom-control custom-radio">
									<input type="radio" id="female_rdo" name="sex" class="custom-control-input">
									<label class="custom-control-label" for="female_rdo">Female</label>
								</div>
							</div>
						</div>

						<div class="form-group mt-4">
							<h4>Narrow by Age</h4>
						</div>
						<div class="form-group">
							<label for="min_age_range">Minimum Age: <span id="min_age_val_span"></span></label>
							<input type="range" class="custom-range" id="min_age_range" min="14" max="70">
						</div>
						<div class="form-group">
							<label for="max_age_range">Maximum Age: <span id="max_age_val_span"></span></label>
							<input type="range" class="custom-range" id="max_age_range" min="14" max="70">
						</div>

						<div class="form-group mt-4">
							<h4>Narrow by Georaphic Region</h4>
						</div>
						<div class="form-group">
							<label for="sex_select_mult">Administrative Region</label>
							<select id="sex_select_mult" class="custom-select" multiple size="6">
								<option value="ncr">NCR</option>
							</select>
							<small>You can press and hold <code>ctrl</code> and then click on choices to select multiple.</small>
						</div>
						<div class="form-group">
							<label for="sex_select_mult">City</label>
							<select id="sex_select_mult" class="custom-select" multiple size="6">
								<option value="">NCR</option>
							</select>
							<small>You can press and hold <code>ctrl</code> and then click on choices to select multiple.</small>
						</div>
					</div>


				</div>
				<!--Card content-->

			</div>
			<!--Card-->

		</div>
		<!--Grid column-->

	</div>
	<!--Grid row-->

</div>

<!--Main layout-->
