define(function(require,exports,module) {
	var person = require("action.person")
	
	var out = {
		init: function(){
			person.updateInfo()
		}
	}
	module.exports = out;
});