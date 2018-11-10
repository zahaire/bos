<div class="container">
	<div class="row my-5 pb-5">
		<div class="col-12">
			<div class="card">
				<form action="<?=base_url('survey/create')?>" method="POST" id="questionnaire">
					<div class="card-header">
						New survey questionnaire
					</div>

					<div class="card-body p-5" id="questions-container">
						<div class="jumbotron row">
							<div class="col-12 mb-3">
								<p class="lead">You're on your way!</p>
								<hr class="my-3">
								<p>Fill out the general infomation and then create your questions then hit "Save & Publish".</p>
							</div>

							<div class="col-12 my-4">
								<div class="md-form">
									<input placeholder="A meaningful title" type="text" id="title" name="title" class="form-control" required>
									<label for="title">Survey Title</label>
								</div>
								<div class="md-form">
									<textarea type="text" id="survey_desc" name="survey_desc" class="md-textarea form-control" rows="3" required></textarea>
									<label for="survey_desc">Description</label>
								</div>
								<div class="md-form">
									<textarea type="text" id="add_ins" name="add_ins" class="md-textarea form-control" rows="3" required></textarea>
									<label for="add_ins">Additional Instructions</label>
								</div>
								<div class="row">
									<div class="col">
										<div class="md-form">
											<input placeholder="Maximum respondents" type="number" id="quota" name="quota" class="form-control" required>
											<label for="quota">Quota</label>
										</div>
									</div>
									<div class="col">
										<div class="md-form">
											<!-- <label for="end_date">End Date</label> -->
											<input type="date" id="end_date" name="end_date" class="form-control datepicker">
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="d-flex justify-content-end" id="controls-container">
							<button type="button" id="add_field" class="btn btn-secondary">Add Field <i class="fas fa-plus"></i></button>
						</div>

					</div>

					<div class="card-footer d-flex justify-content-between">
						<button type="button" class="btn btn-light" id="cancel_btn"><i class="fas fa-times"></i> Cancel</button>
						<button type="submit" class="btn btn-primary" id="submit_btn"><i class="fas fa-save"></i> Save & Publish</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- templates -->
<div id="question-template" hidden>
	<div class="card my-3 question-card" data-qid="">
		<div class="card-body">
			<div class="form-group">
				<div class="md-form">
					<input type="text" name="question" class="form-control question">
					<label>Question</label>
				</div>
			</div>
			<div class="form-group">
				<div class="md-form">
					<input type="text" name="additional" class="form-control additional">
					<label>Additional Text</label>
				</div>
			</div>
			<div class="form-group">
				<div class="md-form mx-5">
					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input require" name="require">
						<label class="custom-control-label">Require</label>
					</div>
				</div>
			</div>
			<div class="from-group">
				<div class="md-form">
					<label>Response Type</label>
					<br>
					<br>
					<select class="browser-default custom-select field_type" name="field_type">
						<option value="null">Select an option</option>
						<?php foreach ($question_types as $question_type): ?>
						<option value="<?=$question_type->id?>">
							<?=$question_type->name?>
						</option>
						<?php endforeach;?>
					</select>
				</div>
				<div class="option-container">
				</div>
			</div>
		</div>
		<div class="card-footer d-flex justify-content-end">
			<button type="button" class="btn btn-warning delete_field">Delete Field <i class="fas fa-trash-alt"></i></button>
		</div>
	</div>
</div>

<div id="option-template" hidden>
	<div class="from-group px-lg-5 options">
		<div class="md-form">
			<label>Options</label>
			<br>
			<br>
			<ul class="list-group">
				<!-- <li class="list-group-item"><input type="text" class="form-control choices" name="" placeholder="Option"></li>
				<li class="list-group-item"><input type="text" class="form-control choices" name="" placeholder="Another Option"></li> -->
				<li class="list-group-item choice-controls"><button type="button" class="btn btn-link add_option">Add Another</button></li>
			</ul>
		</div>
	</div>
</div>

<div id="option-input-template" hidden>
	<li class="list-group-item">
		<div class="md-form input-group">
			<input type="text" class="form-control choices" name="" placeholder="An option">
			<div class="input-group-append">
				<button class="btn btn-danger waves-effect m-0 delete_option" type="button"><i class="fas fa-times"></i></button>
			</div>
		</div>
	</li>
</div>
