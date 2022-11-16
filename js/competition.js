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



var ball_possession_switch = function(){
  "use strict";
  $('.psd-ball-possession .psd-button').click(function(){
    var get_data = $(this).attr('data-active');
	$('.psd-switch-'+ get_data +'').removeClass('psd-deactive').addClass('psd-active');
	$('.psd-switch').not('.psd-switch-'+ get_data +'').removeClass('psd-active').addClass('psd-deactive');
    return false;
  });	
};



var show_match_round = function(){
  $('.match-link').click(function(){
	$(this).find('.vlc-match > .vlc-competition-babak').slideDown('fast');
  });	
};



var toggle_start = function(){
  $.fn.toggleText = function(t1, t2){
    if(this.text() == t1) this.text(t2);
    else this.text(t1);
    return this;
  };
  
  $('.psd-button-start').click(function(){
	$(this).toggleText('Pause Match', 'Start Match');
  });	
};



$(document).ready(function(){
  "use strict";
  competition_tab();
  ball_possession_switch();
  show_match_round();
  toggle_start();
});