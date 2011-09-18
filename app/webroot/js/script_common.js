var isMSIE6 = $.browser.msie && $.browser.version == "6.0";
var isMSIE7 = $.browser.msie && $.browser.version == "7.0";

$(function() {	
	$('input.placeholder, textarea.placeholder').each(function() {
		if (!$(this).val() || $(this).val() == $(this).attr('title')) {
			$(this).val($(this).attr('title')).addClass('empty');
		}
	}).focus(function() {
		if ($(this).val() == $(this).attr('title')) {
			$(this).val('').removeClass('empty');
		}
	}).blur(function() {
		if (!$(this).val().length) {
			$(this).val($(this).attr('title')).addClass('empty');
		}
	}).parents('form').submit(function() {
		$(this).find('input.placeholder').each(function() {
				if ($(this).val() == $(this).attr('title')) {
					$(this).val('');
				}
		});
	});
	
	$('#gNav .nav > li').hover(
		function(){
			var $_t = $(this);
			var $_tAnchor = $_t.find('> a');
			
			$_t.addClass('hover');
			$_tAnchor.addClass('hover');
			$_tAnchor.next('ul').show();
		},
		function() {
			var $_t = $(this);
			var $_tAnchor = $_t.find('> a');
			
			$_t.removeClass('hover');
			$_tAnchor.removeClass('hover');
			$_tAnchor.next('ul').hide();
		}
	);
	
	/*
	//preload
	new Image().src = 'http://www.ucd.la/01JAN28_ginzaclinic/html/images/h_bg.gif';
	*/
	
	/*
	//pngfix
	if(isMSIE6) {	
		$('img[src$=png], #content > #topicPath > ol, #content h2, .png').fixPng();
	}
	*/
	
	/*
	//map
	$('#mAccess #mAccessMap > #mAccessMapInner').gmap(35.6667339, 139.7597261, {zoom: 18});
	*/
	
	/*
	//rollover
	$('.imgover').rollover();
	*/
});
