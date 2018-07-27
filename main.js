
 

function createInput() {

	var val = document.getElementById('myVal').value;

	for (var i = 0; i < val; i++) {
		var question = document.createElement("INPUT");
		var choice_a = document.createElement("INPUT");
		var choice_b = document.createElement("INPUT");
		var choice_c = document.createElement("INPUT");
		var choice_d = document.createElement("INPUT");
		var answer = document.createElement("INPUT");

		question.setAttribute("type", "text");
		question.setAttribute("name", "Question");
		question.setAttribute("placeholder", "input name");
		choice_a.setAttribute("type", "text");
		choice_a.setAttribute("name", "ChoiceA");
		choice_a.setAttribute("placeholder", "input choice");
		choice_b.setAttribute("type", "text");
		choice_b.setAttribute("name", "ChoiceB");
		choice_b.setAttribute("placeholder", "input choice");
		choice_c.setAttribute("type", "text");
		choice_c.setAttribute("name", "ChoiceC");
		choice_c.setAttribute("placeholder", "input choice");
		choice_d.setAttribute("type", "text");
		choice_d.setAttribute("name", "ChoiceD");
		choice_d.setAttribute("placeholder", "input choice");
		answer.setAttribute("type", "text");
		answer.setAttribute("name", "Answer");
		answer.setAttribute("placeholder", "input choice");

		document.getElementById('demo').appendChild(question);
		document.getElementById('demo').appendChild(choice_a);
		document.getElementById('demo').appendChild(choice_b);
		document.getElementById('demo').appendChild(choice_c);
		document.getElementById('demo').appendChild(choice_d);
		document.getElementById('demo').appendChild(answer);
	}
}