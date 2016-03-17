$( function() {
	$( '#serNavButton' ).hover(
		function loadSub() {
			document.getElementById('serviceSub').style.visibility = 'visible';
		},
		function closeSub() {
			document.getElementById('serviceSub').style.visibility = 'hidden';
		}
	);	
});	

$( function() {
	$( '#serviceSub' ).hover(
		function keepSub() {
			document.getElementById('serviceSub').style.visibility = 'visible';
		},
		function closeSub() {
			document.getElementById('serviceSub').style.visibility = 'hidden';
		}
	);
});		

$(document).ready(function() {
$('#container').css('display', 'none');
$('#container').fadeIn(1000);

$('.fadeButton').click(function() {
event.preventDefault();
newLocation = this.href;
$('#container').fadeOut(1000, newpage);
});
function newpage() {
window.location = newLocation;
}
});

$(function() {  
    var pull        = $('#pull');  
        menu        = $('.fadeButton');  
        menuHeight  = menu.height();  
  
    $(pull).on('click', function(e) {  
        e.preventDefault();  
        menu.slideToggle();  
    });  
});  

$(window).resize(function(){  
    var w = $(window).width();  
    if(w > 320 && menu.is(':hidden')) {  
        menu.removeAttr('style');  
    }  
});   

var windowWidth = $(window).width();
    var windowHeight =$(window).height();
    $('body').css({'width':windowWidth ,'height':windowHeight });
