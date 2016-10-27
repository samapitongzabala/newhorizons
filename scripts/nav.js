$(document).ready(function(){
        var menu = $('nav ul'),
        navtoggle = $('.toggle');

        navtoggle.click(function(e){
            navtoggle.toggleClass('active');
            menu.toggleClass('active');
            e.preventDefault();
        });
    })
	
   	var winWidth = window.innerWidth;
	var scrollMax;

	function checkScrollMax(){
		if(winWidth <=621){
        	scrollMax = 60;
        }else if(winWidth <= 800){          	
        	scrollMax = 70;
        }else{
        	scrollMax = 90;
        };
	}

    $(window).scroll(function(e) {
		sTop = $(window).scrollTop();

        checkScrollMax();

		var toc = $('#toc');
		var asideH = $('#toc div').outerHeight();
		var asideY = $('header').outerHeight();
		var contactus = $('aside.contact-us').outerHeight();
		var footer = $('footer').outerHeight();
		var topOff = (asideY-scrollMax);
		var bottomOff = $(document).height()-(contactus+footer+asideH+scrollMax);
		var stopStick = (contactus+footer);

        // console.log('top scroll: '+sTop,'bottom offset: '+bottomOff,'contacth: '+contactus,'footerh: '+footer,'asideh: '+asideH);
        

        if(sTop > scrollMax){  
            $('nav').addClass("stickynav");
        }
        else{
            $('nav').removeClass("stickynav");
        };

        if(winWidth>=621){
			if(
				sTop<topOff &&
				toc.hasClass('stickyaside')
			){	
				toc.removeClass('stickyaside');
				toc.addClass('staticaside');
			}

			if(
				sTop>=topOff &&
				sTop<=bottomOff &&
				toc.hasClass('staticaside')
			){	
				toc.removeClass('staticaside');
				toc.removeClass('bottomaside');
				toc.addClass('stickyaside').css({
					top: scrollMax
				})
			}

			if(
				sTop<topOff &&
				toc.hasClass('stickyaside')
			){	
				toc.removeClass('stickyaside');
				toc.addClass('staticaside');
				
			}

			if(
				sTop>bottomOff &&
				toc.hasClass('stickyaside')
			){

				toc.removeClass('stickyaside');
				toc.addClass('bottomaside').css({
					top: 'inherit',
					bottom: contactus
				})
			}

			if(
				sTop>bottomOff &&
				toc.hasClass('bottomaside')
			){

				toc.removeClass('stickyaside');
				toc.css({
					top: 'inherit',
					bottom: contactus
				})
			}

			if(
				sTop>=topOff &&
				sTop<=bottomOff &&
				toc.hasClass('bottomaside')
			){

				toc.removeClass('bottomaside');
				toc.addClass('stickyaside').css({
					top: scrollMax
				})
			}
        };
    });

$(window).resize(function(e){
	$(this).trigger('scroll');
	winWidth = window.innerWidth;
});

function offsetAnchor(){
	checkScrollMax();
    if(location.hash.length !== 0) {
        window.scrollTo(window.scrollX, window.scrollY - (scrollMax+10));
    }
}

$(window).on('hashchange',function(){
    offsetAnchor();
});

window.setTimeout(function() {
    offsetAnchor();
}, 100); 

