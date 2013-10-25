
var jqueryWidget = (function(){

	var datepicker = function(config){
		if(config == undefined || config == null ){
			$('input.widget-datepicker').each(function(){
					$(this).datepicker({dateFormat:'dd/mm/yy'});
			});
		}
	};
	return {
		datepicker:datepicker
	}

})();

