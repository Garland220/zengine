String.prototype.format = function() {
	var args = arguments;
	return this.replace(/{(\d+)}/g, function(match, number) { 
		return typeof args[number] != 'undefined'
		? args[number]: '{' + number + '}';
	});
};

Function.prototype.Inherits = function(parent){
	this.prototype = new parent();
	this.prototype.constructor = this;
}