

$(document).ready(function($) {
	$("#menu a").click(function(){
 	$("#menu li.selected").removeClass('selected');
 	$(this).parent("li").addClass('selected');
	});
});

