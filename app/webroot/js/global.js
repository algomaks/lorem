
$(document).ready(function() {

	$('a#show_people').click(function(){
		$('#people').show();
		$('a#show_people').hide();
		$('a#hide_people').show();
	});
	
	$('a#hide_people').click(function(){
		$('#people').hide();
		$('a#hide_people').hide();
		$('a#show_people').show();
	});
	
	$('.person').click(function(){
		
		if($(this).hasClass('selected')) { // deselect
			
		}else{ // select
			
		}
		
		$(this).toggleClass('selected');
	});
	
	
});
