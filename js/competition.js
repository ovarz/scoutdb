var competition_tab = function(){
  "use strict";
  $('.psd-ball-possession .psd-button').click(function(){
    var get_data = $(this).attr('data-active');
	$('.psd-switch-'+ get_data +'').removeClass('psd-deactive').addClass('psd-active');
	$('.psd-switch').not('.psd-switch-'+ get_data +'').removeClass('psd-active').addClass('psd-deactive');
    return false;
  });	
};



$(document).ready(function(){
  "use strict";
  competition_tab();
});