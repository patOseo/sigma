<?php

add_filter( 'gform_required_legend_24', '__return_empty_string' );
add_filter( 'gform_confirmation_24', 'sigma_quiz_results', 10, 4 );
function sigma_quiz_results( $confirmation, $form, $entry, $ajax ) {

	$formfields = $form['fields'];
	$correct_answers = array(
		3 => 'b',
		4 => 'c',
		5 => 'a',
		6 => 'c',
		7 => 'a',
		8 => 'c',
		9 => 'a',
		10 => 'a',
		11 => 'b',
		13 => 'b',
		14 => 'c',
		15 => 'a',
		16 => 'c',
		17 => 'c',
		18 => 'a',
		20 => 'a',
		21 => 'b',
		22 => 'a',
		23 => 'b',
		24 => 'a',
		25 => 'c',
		27 => 'a',
		28 => 'b',
		29 => 'c',
		30 => 'a',
		31 => 'c',
		33 => 'b',
		35 => 'c',
		36 => 'a',
		37 => 'a'
	);
	$questions = array();
	$answers = array();
	$users_correct = array();
	$conf_output = '';
	$i = 0;

	foreach($form['fields'] as $formfield) {
		
		if($formfield->type === 'radio') {
			$questions[] = array(
				'id' => $i,
				'field_id' => $form['fields'][$i]->id,
				'type' => $form['fields'][$i]->type,
				'question' => $form['fields'][$i]->label
			);
		}
		$i++;
	}

	foreach($questions as $question) {
		$user_answer = rgar($entry, $question['field_id']);
		$choices = $form['fields'][$question['id']]->choices;

		if($correct_answers[$question['field_id']] == $user_answer[0]) {
			$correct = 'green';
			$correct_a = $user_answer;
			$users_correct[] = $user_answer[0];
		} else {
			$correct = 'red';

			switch($correct_answers[$question['field_id']]) {
				case 'a':
					$correct_a = $choices[0]['text'];
					break;
				case 'b':
					$correct_a = $choices[1]['text'];
					break;
				case 'c':
					$correct_a = $choices[2]['text'];
			}
		}

		$answers[] = array(
			'id' 		=> $question['id'],
			'field_id'	=> $question['field_id'],
			'type'		=> $question['type'],
			'question'	=> $question['question'],
			'answer'	=> rgar($entry, $question['field_id']),
			'correct'	=> $correct,
			'correct_a' => $correct_a
		);
	}

	$percentage = count($users_correct) * 100 / count($correct_answers);

	$conf_output .= '<h2>Your Results:</h2>';
	$conf_output .= '<h3>' . round($percentage, 2) . '%</h3>';
	$conf_output .= '<p>You correctly answered ' . count($users_correct) . ' out of ' . count($correct_answers) . ' questions.</p>';

	foreach($answers as $answer) {
		$conf_output .= '<h5 style="margin-bottom:2rem"><strong>' . $answer['question'] . '</strong></h5>';
		$conf_output .= '<p style="margin-bottom:0;color:' . $answer['correct'] . '"><strong>Your Answer:</strong> ' . $answer['answer'] . '</p>';
		$conf_output .= '<p style="color:green"><strong>Correct Answer:</strong> ' . $answer['correct_a'] . '</p><hr style="margin-top:2rem;margin-bottom:2rem">';
	}

	$confirmation = $conf_output;


    return $confirmation;
}