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

        // console.log('top scroll: '+sTop,'bottom offset: '+bottomOff,'contacth: '+contactus,'footerh: '+footer,'asideh: '+asideH);
/*        
		if(
                sTop<stickyStart &&
                stickyElement.hasClass('is_sticky')
            ){  
                stickyElement.removeClass('is_sticky')
                    .addClass('is_static')
                    .css({
                        top: 0 ,
                        bottom: 'auto'
                    });
            }

            if(
                sTop>=stickyStart &&
                sTop<=stickyEnd &&
                stickyElement.hasClass('is_static')
            ){  
                stickyElement.removeClass('is_static')
                    .removeClass('is_bottom')
                    .addClass('is_sticky')
                    .css({
                        top: 60,
                        bottom: 'auto'
                    });
            }

            if(
                sTop>=stickyStart &&
                sTop<=stickyEnd &&
                stickyElement.hasClass('is_bottom')
            ){  
                stickyElement.removeClass('is_bottom')
                    .addClass('is_sticky')
                    .css({
                        top: 60,
                        bottom: 'auto'
                    });
            }

            //after container
            if(
                sTop>stickyEnd &&
                stickyElement.hasClass('is_sticky')
            ){

                stickyElement.removeClass('is_sticky')
                    .addClass('is_bottom')
                    .css({
                        bottom: stickyElementSpan.outerHeight(),
                        top: 'auto'
                    });
            }

            //back at it again
            if(
                sTop>stickyEnd &&
                stickyElement.hasClass('is_bottom')
            ){

                stickyElement.removeClass('is_sticky')
                    .css({
                        bottom: stickyElementSpan.outerHeight(),
                        top: 'auto'
                    });
            }
        }

        */


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
				toc.removeClass('stickyaside')
					.addClass('staticaside');
			}

			if(
				sTop>=topOff &&
				sTop<=bottomOff &&
				toc.hasClass('staticaside')
			){	
				toc.removeClass('staticaside')
					.removeClass('bottomaside')
					.addClass('stickyaside').css({
						top: scrollMax,
						bottom: 'auto'
					})
			}

			if(
				sTop>=topOff &&
				sTop<=bottomOff &&
				toc.hasClass('bottomaside')
			){	
				toc.removeClass('bottomaside')
					.addClass('stickyaside').css({
						top: scrollMax,
						bottom: 'auto'
					})
			}

			if(
				sTop>bottomOff &&
				toc.hasClass('stickyaside')
			){

				toc.removeClass('stickyaside')
					.addClass('bottomaside')
					.css({
						top: 'auto',
						bottom: contactus
					})
			}


			if(
				sTop>bottomOff &&
				toc.hasClass('bottomaside')
			){

				toc.removeClass('stickyaside')
					.css({
						top: 'auto',
						bottom: contactus
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

