$(function() {

	//highlight the current nav
	$("#home a:contains('HOME')").parent().addClass('active');
	$("#about-us a:contains('ABOUT US')").parent().addClass('active');
	$("#solar-flood-lights a:contains('SOLAR SOLUTIONS')").parent().addClass('active');
	$("#fleet-management a:contains('IoT SERVICES')").parent().addClass('active');
	$("#vehicle-tracking a:contains('IoT SERVICES')").parent().addClass('active');
	$("#motorcycle-tracking a:contains('IoT SERVICES')").parent().addClass('active');
	$("#generator-monitoring a:contains('IoT SERVICES')").parent().addClass('active');
	$("#razor-wire a:contains('SECURITY SOLUTIONS')").parent().addClass('active');
	$("#automated-gate a:contains('SECURITY SOLUTIONS')").parent().addClass('active');
	$("#cctv-camera a:contains('SECURITY SOLUTIONS')").parent().addClass('active');
	$("#car-alarms a:contains('SECURITY SOLUTIONS')").parent().addClass('active');
	$("#aircraft-lights a:contains('SECURITY SOLUTIONS')").parent().addClass('active');
	$("#contact a:contains('CONTACT US')").parent().addClass('active');
	
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