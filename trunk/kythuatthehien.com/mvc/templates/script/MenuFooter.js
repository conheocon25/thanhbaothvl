﻿$(document).ready(function(){
	$(".menu").css("opacity",0.4);
	$("#icon_fscreen").css("opacity",0.4);
	$(".menu").mouseover(function(){
		$(this).css("opacity",1.0);
	});
	$(".menu").mouseout(function(){
		$(this).css("opacity",0.4);
	});
});