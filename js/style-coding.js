
function centerJquery(){
	$( ".center-jquery" ).css({ "margin-top" : -$( ".center-jquery" ).outerHeight() / 2, "margin-left" : -$( ".center-jquery" ).outerWidth() / 2 });
};

function verticalMiddle(){
	$( ".vertical-middle-jquery" ).css({ "margin-top" : -$( ".vertical-middle-jquery" ).outerHeight() / 2 });
};

$( document ).ready( function(){
	centerJquery();
	//verticalMiddle();
});

// $(window).bind("load", function() {
	
// });

$( window ).resize( function(){
	centerJquery();
	//verticalMiddle();
});
