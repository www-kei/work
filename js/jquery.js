/* url auto array */
$(document).ready(function() {
	var nav = [ "ehouse.html", "cm.html", "rent.html", "marathon.html", "process.html", "icon.html" ];
	var pathname = window.location.pathname;
	var pathname = pathname.substring(pathname.lastIndexOf('/')+1);
	var pagename = pathname.replace('/', '');
	var currentposition = $.inArray(pagename, nav);
	var nextposition = currentposition + 1;
	$('.next').click(function(e){
		e.preventDefault();		
		if (nextposition < nav.length) {
			window.location = nav[nextposition];
	   	} else {
	   		window.location = nav[0];
			//$('.next').css( "display", "none" );
	   	}
	});
	$('.prev').click(function(e){
		e.preventDefault();
		var prevposition = currentposition - 1;
		if (prevposition >= 0) {
			window.location = nav[prevposition];
	   	} else {	   	
	   		window.location = nav[nav.length-1];
	   	}
	});
	/*$( document ).ready( function() {
		if (nextposition >= nav.length) {			
			$('.next').css( "display", "none" );
	   	}
	});*/
});

/* google analytics */
/*var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-34137724-1']);
_gaq.push(['_trackPageview']);

(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();*/