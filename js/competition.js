var competition_tab = function(){
  "use strict";
  $('.psd-main-button').click(function(){
    var get_data = $(this).attr('data-content');
	$(this).addClass('psd-main-curr');
	$('.psd-main-button').not(this).removeClass('psd-main-curr');
	$('.psd-main-content').load('module/'+ get_data +'.php');
    return false;
  });	
};



$(document).ready(function(){
  "use strict";
  competition_tab();
});