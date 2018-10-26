<div class="container">
	<div class="row my-5 pb-5">
		<div class="col-12">
			<div class="card">
				<form action="<?=base_url('survey/create')?>" method="POST" id="questionnaire">
					<div class="card-header">
						New survey questionnaire
					</div>

					<div class="card-body p-5" id="questions-container">
						<!-- <div class="card my-3 question-card">
							<div class="card-body">
								<div class="form-group">
									<div class="md-form">
										<input type="text" class="form-control" id="question_" name="question_">
										<label for="form1">Question</label>
									</div>
								</div>
								<div class="form-group">
									<div class="md-form">
										<input type="text" class="form-control" id="additional_" name="additional_">
										<label for="form1">Additional Text</label>
									</div>
								</div>
								<div class="from-group">
									<div class="md-form">
										<label>Response Type</label>
										<br>
										<br>
										<select class="browser-default custom-select option-type" id="type_" name="type_">
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
						</div> -->

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
					<label for="form1">Question</label>
				</div>
			</div>
			<div class="form-group">
				<div class="md-form">
					<input type="text" name="additional" class="form-control additional">
					<label for="form1">Additional Text</label>
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
