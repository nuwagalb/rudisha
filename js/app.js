$(function() {

	//highlight the current nav
	$("#home a:contains('Home')").parent().addClass('active');
	$("#expertise a:contains('Our Expertise')").parent().addClass('active');
	$("#trends a:contains('Today's trends')").parent().addClass('active');
	$("#about a:contains('About us')").parent().addClass('active');
	$("#contact a:contains('Contact')").parent().addClass('active');
	
	//make menus drop automatically
	$('ul.nav li.dropdown').hover(function() {
		$('.dropdown-menu', this).fadeIn();
	}, function() {
		$('.dropdown-menu', this).fadeOut('fast'); 
	}); //hover function
	
	//change carousel slideshow properties
	$('.carousel').carousel({
	    interval: 10000, //changes the speed
	    pause: "false" //pause on hover
	});
	
}); //function that is called when jquery runs