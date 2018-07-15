export default {
  init() {
	var $form = $("#gform_1");
    var btn = $("#gform_submit_button_1");

	$form.validate({
		rules: {
			input_12: {required: true},
			input_2: {
				required: true,
				email: true,
			},
			input_7: {
				required: true,
			},
		},
		tooltip_options: {
			input_12: {placement:'right'},
			input_2: {placement:'right'},
			input_7: {placement:'right'},
		},
	});

	btn.on('click', function(){
		if($form.valid()){
			$form.submit();
		}
	});

  },

  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
