var practice_tutorial_toggle = function(){
  "use strict";
  $('.ptl-toggle').click(function(){
	$(this).toggleClass('ptl-minimize');
	$(this).parent().find('.ptl-list').slideToggle('fast');
    return false;
  });	
};



$(document).ready(function(){
  "use strict";
  practice_tutorial_toggle();
});