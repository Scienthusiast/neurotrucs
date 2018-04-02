
$(function(){

	var nb_quest = 0;
	var answers = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
	 // console.log(JSON.stringify({answers: JSON.stringify(answers)}));


	var $form = $('.register');

	function validateEmail(email) {
		var regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		return regex.test(email);
	};


	ans_likert = function(event)
	{		
		answers[nb_quest - 1] = event.data.ans;
		if (nb_quest == 1)
		{
			
			$('input[name="answers"]').val(answers.toString());
			$('#email_confirm').modal();
			// $('#form_quiz').submit();

		}
		else
		{
			$("#q"+nb_quest).hide();
			nb_quest++;
			$("#num_question").html(nb_quest);
			$("#q"+nb_quest).show();
		}
		
	};


	$("#email-validation").click(function(){
		if(validateEmail($('#email-text').val()))
		{
			$('#email_confirm').modal('toggle');
			$('#form_quiz').submit();
		}
		else
		{
			$('#email_confirm_label').html('Le format de l\'email est incorrect, merci de le corriger !')
		}
	})

	$("#btn-quiz").click(function(){
		$("#intro-quiz").hide();
		$("#quiz-core").show();
		$("#q1").show();
		nb_quest = 1;
		console.log("START");
	})

	
	$("#likert1").on("click", null, {ans: 1}, ans_likert);
	$("#likert2").on("click", null, {ans: 2}, ans_likert);
	$("#likert3").on("click", null, {ans: 3}, ans_likert);
	$("#likert4").on("click", null, {ans: 4}, ans_likert);
	$("#likert5").on("click", null, {ans: 5}, ans_likert);
	$("#likert6").on("click", null, {ans: 6}, ans_likert);
	$("#likert7").on("click", null, {ans: 7}, ans_likert);

	
/*
	btns = 
	for (var i = 0; i < divs.length; i++) {
	    if (divs[i]) {  // Don't operate on undefined items
	        var theDiv = $(divs[i]).data("idx", i);    // Changed (from edit)

	        yep.append(theDiv);    // Changed (from edit)
	    }
	}





*/
	//m'inspirer de mes boutons orange moches de e - e1.js


});



let post_quiz = async (url, POST) => {
    try {
        let call = await fetch(url, {
            method: "POST",
            body: JSON.stringify(answers),
            headers: {
                'content-type': 'application/json'
            }
        })
        let result = await call.json()
        console.log(result) // result
        if (result.success)
        {
            location.reload();
        }
    }
    catch(error) {
        console.log(String(error))
    }
}
post_quiz("./quiz.php")

