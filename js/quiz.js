
$(function(){

	var nb_quest = 0;
	var answers = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
	ans_likert = function(event)
	{		
		answers[nb_quest - 1] = event.data.ans;
		if (nb_quest == 15)
		{
			alert("finito");
			console.log(answers);
		}
		else
		{
			$("#q"+nb_quest).hide();
			nb_quest++;
			$("#num_question").html(nb_quest);
			$("#q"+nb_quest).show();
		}
		
	};


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