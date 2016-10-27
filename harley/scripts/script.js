//slider

function fadeSlide(){
	//targetlast image of fadecontainer. function happens after thing
	$('#slider img:last-child').fadeOut(1000, function(){
		$(this).prependTo('#slider');
		$(this).show(); // come back bitch
		setTimeout(fadeSlide,3000);
	});
}
// fadeSlide();
setTimeout(fadeSlide,3000)