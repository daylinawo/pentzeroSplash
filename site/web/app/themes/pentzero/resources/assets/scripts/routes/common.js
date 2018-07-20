export default {
  init() {
    var btn = $(".gform_button");
    var form = $('.gform-v');
    var form1 = $('#gform_1');
    var form2 = $('#gform_2');

	form1.validate({
		rules: {
			input_12: {required: true},
			input_2: {
				required: true,
				email: true,
			},
			input_7: {required: true},
		},
		tooltip_options: {
			input_12: {placement:'right'},
			input_2: {placement:'right'},
			input_7: {placement:'right'},
		},
	});

	form2.validate({
		rules: {
			input_2: {
				required: true,
			},
			input_3: {
				required: true,
				email: true,
			},
			input_4: {required: true},
		},
		tooltip_options: {
			input_2: {placement:'right'},
			input_3: {placement:'right'},
			input_4: {placement:'right'},
		},
	});

	btn.on('click', function(){
		if(form.valid()){
			form.submit();
		}
	});

  },

  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
