function Answer(text, points){
	this.text = text;
	this.points = points;
}
function Question(text){
	this.text = text;
	this.answers = [];
}
Question.prototype.AddAnswer = function(text, points){
	answer = new Answer(text, points);
	this.answers.push(answer);
} 