$(document).ready(function () {
	// #region CONSTANT ASSIGNMENTS
	const addFieldBtn = $('#add_field');
	const questionCardTemplate = $('#question-template').find('> div.question-card');
	const questionsContainer = $('#questions-container');
	const controlsContainer = $('#controls-container');
	const optionTemplate = $('#option-template').find('> div.options');
	const choiceTemplate = $('#option-input-template').find('> li');
	let questionNumber = 0;
	let optionStorage = [];
	// #endregion

	// initialize first card
	cloneQuestionCard();

	function cloneQuestionCard() {
		let questionCardClone = questionCardTemplate.clone(true);
		questionCardClone.attr('qid', questionNumber);
		questionCardClone.find('.question').attr('name', 'question[' + questionNumber + ']');
		questionCardClone.find('.additional').attr('name', 'additional[' + questionNumber + ']');
		questionCardClone.find('.field_type').attr('name', 'field_type[' + questionNumber + ']');
		questionCardClone.find('.require').attr('name', 'require[' + questionNumber + ']').attr('id', 'require[' + questionNumber + ']');
		questionCardClone.find('.require').siblings('label').attr('for', 'require[' + questionNumber + ']');

		questionCardClone.insertBefore(controlsContainer);
	}

	function cloneChoice(cardQID) {
		let clonedChoice = choiceTemplate.clone(true);
		if (typeof optionStorage[cardQID] === 'undefined') {
			optionStorage[cardQID] = 0;
		}
		$(clonedChoice).find('input').attr('name', 'choice[' + cardQID + '][' + optionStorage[cardQID] + ']');
		optionStorage[cardQID] += 1;
		return clonedChoice;
	}

	// #region EVENT LISTENERS

	addFieldBtn.on('click', (e) => {
		questionNumber++;
		cloneQuestionCard();
	});


	$('#questionnaire').on('click', 'button.add_option', (e) => {
		$(e.target).parent().before(cloneChoice($(e.target).parents().eq(7).attr('qid')));
	});


	$('#questionnaire').on('change', 'select.field_type', (e) => {
		let option = $(e.target).val();
		$(e.target).parents().eq(1).find('.option-container').empty();
		let cardQID = $(e.target).parents().eq(3).attr('qid');
		switch (option) {
			case '1':
				if (optionStorage[cardQID] !== 0) {
					optionStorage[cardQID] = 0;
				}
			case '2':
				if (optionStorage[cardQID] !== 0) {
					optionStorage[cardQID] = 0;
				}
				initialOptionsClone = optionTemplate.clone(true);
				initialOptionsClone.find('ul > .choice-controls').before(cloneChoice(cardQID));
				initialOptionsClone.find('ul > .choice-controls').before(cloneChoice(cardQID));
				// console.log(initialOptionsClone.find('ul > .choice-controls'));
				$(e.target).parents().eq(1).find('.option-container').append(initialOptionsClone);
				break;
			default:
		}
	});

	$('#questionnaire').on('click', '.delete_field', (e) => {
		console.log();
		$(e.target).parents().eq(1).remove();
	});

	$('#questionnaire').on('click', '.delete_option', (e) => {
		$(e.target).parents().eq(2).detach();
	});

	$('#cancel_btn').on('click', (e) => {
		swal({
			title: 'Are you sure?',
			text: "You won't be able to revert this!",
			type: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Yes, delete it!'
		}).then((result) => {
			if (result.value) {
				window.location.replace(base_url + 'pages/index');
			}
		})
	});

	$('form').on('submit', (e) => {
		e.preventDefault();

		let values = {};
		$.each($("#questions-container :input").serializeArray(), function (i, field) {
			values[field.name] = field.value;
		});

		$.post(
				base_url + 'surveys/save',
				values,
				(data) => {
					console.log(data);
				},
				'json'
			)
			.done((data) => {
				swal({
					title: 'Success!',
					text: "Your questionnaire has been saved!",
					type: 'success',
				}).then((result) => {
					window.location.replace = base_url + 'pages/index';
				})
			});
		// console.log(values);
	});

	// #endregion
});
