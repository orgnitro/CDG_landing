(function ($) {
	$(".contact-form").submit(function (event) {
		event.preventDefault();
		let form = $('#' + $(this).attr('id'))[0];

		// <div>'s for error messages
		let inpNameError = $(this).find('.contact-form__error_name');
		let inpEmailError = $(this).find('.contact-form__error_email');

		// <div> that will be shown after the message send
		let formDescription = $(this).find('.contact-form__description');

		let fd = new FormData(form);
		$.ajax({
			url: "/mail/php/mail.php",
			type: "POST",
			data: fd,
			processData: false,
			contentType: false,
			success: function success(res) {
				console.log(res);
				let respond = $.parseJSON(res);
				
				if (respond.name) {
					inpNameError.text(respond.name);
				} else {
					inpNameError.text('');
				}

				if (respond.email) {
					inpEmailError.text(respond.email);
				} else {
					inpEmailError.text('');
				}

				if (respond.attantion) {
					formDescription.text(respond.attantion).css('color', '#e84a66').fadeIn();
				} else {
					formDescription.text('');
				}

				if (respond.success) {
					formDescription.text(respond.success).fadeIn();
					setTimeout(() => {
						formDescription.fadeOut("slow");
					}, 4000);
					setTimeout(() => {
						formDescription.text('');
					}, 5000);
				}
			},
		});
	});
}(jQuery));