function ClosePopup(){
  $('.open-popup').removeClass('show-sticky');
  $('.rancak-popup').fadeOut('fast');
};



function CopyURL(text) {
  var inputc = document.body.appendChild(document.createElement("input"));
  inputc.value = window.location.href;
  inputc.focus();
  inputc.select();
  document.execCommand('copy');
  inputc.parentNode.removeChild(inputc);
  $('.popup-copied').slideDown('fast').delay(2000).slideUp('fast');
};



function CopyLink() {
  var copyText = document.getElementById("CopyLinkField");
  copyText.select();
  copyText.setSelectionRange(0, 99999);
  document.execCommand("copy");
  $('.popup-share-note').slideDown('fast');
}



/* scroll script */
var all_scroll = function(){
  "use strict";	

  $(window).scroll(function(){
    var scroll_position = $(window).scrollTop();

    if(scroll_position >= 1){
      $('#btt').css("display","flex");	
    }

    else{
      $('#btt').hide();
    }
  });  
};
/* end scroll script */



var menu_toggle = function(){
  "use strict";
  $('.header-menu').click(function(){
	$('body').toggleClass('menu-min');
    return false;
  });	
};



var open_popup = function(){
  "use strict";
  $('.open-popup').click(function(){
    var get_popup_id = $(this).attr('title');
	$('.open-popup[title=' + get_popup_id +']').toggleClass('show-popup');
	$('.open-popup').not('.open-popup[title=' + get_popup_id +']').removeClass('show-popup');
    $('#popup-' + get_popup_id).fadeToggle('fast');
    $('.rancak-popup').not('#popup-' + get_popup_id).fadeOut('fast');
	if($('#popup-' + get_popup_id).hasClass("popup-alert-temporary")){
      setTimeout(function() {
        ClosePopup();
      },2000);
	};
    return false;
  });	
};



var open_float = function(){
  "use strict";
  $('.open-float').click(function(){
    var get_float_id = $(this).attr('title');
	$('.open-float[title=' + get_float_id +']').toggleClass('show-float');
	$('.open-float').not('.open-float[title=' + get_float_id +']').removeClass('show-float');
    $('#float-' + get_float_id).fadeToggle('fast');
    $('.rancak-float').not('#float-' + get_float_id).fadeOut('fast');
    return false;
  });	
};



$(document).ready(function(){
  "use strict";
  all_scroll();
  menu_toggle();
  open_popup();
  open_float();
});