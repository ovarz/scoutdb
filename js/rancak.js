function ClosePopup(){
  $('.open-sticky').removeClass('show-sticky');
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



var back_to_top = function(){
  "use strict";
  $('#btt').click(function(){
	$('body,html').scrollTop(0);
    return false;
  });	
};



var open_sticky = function(){
  "use strict";
  $('.open-sticky').click(function(){
    var get_id = $(this).attr('title');
	$('.open-sticky[title=' + get_id +']').toggleClass('show-sticky');
	$('.open-sticky').not('.open-sticky[title=' + get_id +']').removeClass('show-sticky');
    $('#popup-' + get_id).fadeToggle('fast');
    $('.rancak-popup').not('#popup-' + get_id).fadeOut('fast');
	if($('#popup-' + get_id).hasClass("popup-alert-temporary")){
      setTimeout(function() {
        ClosePopup();
      },2000);
	};
    return false;
  });	
};



var sticky_bottom_close = function(){
  "use strict";
  $(".isb-close").click(function(){
    $(".iklan-sticky-bottom").hide();
    $("footer.footer-all").css("padding-bottom", 20);
    return false;
  });
};



var close_menu = function(){
  "use strict";
  $("#popup-MainMenu").click(function(){
    ClosePopup();
  });
};



var close_share = function(){
  "use strict";
  $('.popup-share-overlay, .popup-share-close').click(function(){
	ClosePopup();
	return false;
  });
};



var updown_vote = function(){
  "use strict";
  $(".article-vote").click(function(){
    $(this).toggleClass("article-voted");
    $('.article-vote').not(this).removeClass("article-voted");
  });
};



var toggle_bookmark = function(){
  "use strict";
  $('.toggle-bookmark').click(function(){
    var get_label = $(this).attr('data-title');
	if(get_label == 'Add'){
	  $(this).attr("data-title","Remove");
	  $('.popup-toggle-bookmark').find('.popup-alert-box').html('Bookmark berhasil ditambah');
	};
	if(get_label == 'Remove'){
	  $(this).attr("data-title","Add");
	  $('.popup-toggle-bookmark').find('.popup-alert-box').html('Bookmark berhasil dihapus');
	};
	return false;
  });
};



var fbcomment = function(){
  $("body,html").bind("touchstart touchmove scroll mousedown DOMMouseScroll mousewheel keyup", function(e){
    var js = document.createElement('script');
    js.src = '//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v15.0&appId=162101040544143&autoLogAppEvents=1';
    document.body.appendChild(js);
  });
  
  $(".article-button-comment").click(function(){
    $(this).parents().eq(2).find(".article-comment").slideToggle("fast");
  });
};



$(document).ready(function(){
  "use strict";
  all_scroll();
  back_to_top();
  open_sticky();
  sticky_bottom_close();
  close_menu();
  close_share();
  updown_vote();
  toggle_bookmark();
  fbcomment();
});