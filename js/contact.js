$(function(){
	function validateEmail(email) {
		var regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		return regex.test(email);
	}

	$('#bouton-form').click(function(){
		if($('#message').val().trim().length < 1)
		{
			$('#mail_incorrect_lbl').html('Il n\'y a aucun message, merci d\'en ajouter un');
			$('#mail_incorrect').modal('toggle');
		}
		else
		{
			if(validateEmail($('#email').val()))
			{
				$('#form_contact').submit();
			}
			else
			{
				$('#mail_incorrect_lbl').html('L\'addresse email entrée est incorrecte, merci de la corriger');
				$('#mail_incorrect').modal('toggle');
			}
		}

	})

	$('#ok').click(function(){
		$('#mail_incorrect').modal('hide');
	})
		// if(validateEmail($('#email-text').val()))
		// {
		// 	$('#email_confirm').modal('toggle');
		// 	$('#form_quiz').submit();
		// }
		// else
		// {
		// 	$('#email_confirm_label').html('Le format de l\'email est incorrect, merci de le corriger !')
		// }


	});
