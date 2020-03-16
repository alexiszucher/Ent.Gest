$(document).ready(function(){
	$('.dropdown-trigger').dropdown({
		constrainWidth:true,
		alignment:"center",
		coverTrigger:false,
		hover:true
	});
	$('.slider').slider({
		indicators:false,
		interval:3000,
		height:400
	});
	$('.sidenav').sidenav();
	$('.collapsible').collapsible();
})


  