$(document).ready(function() {
	$("#UserKeyDown").keydown(function(event) 
		{
			if (event.keyCode == '13') {
				document.getElementById('frmUserInfo').submit();
			}
		}
	);
	$(".ButtonRight").addClass("StateHover");
	$(".ButtonRight").hover(
		function(){ 						
			$(this).addClass("StateBlueHover"); 
			$(this).addClass("StateActive");
		},
		function(){ 												
			$(this).removeClass("StateActive");
			$(this).removeClass("StateBlueHover");
		}
	);
	$(".Button").addClass("StateHover");
	$(".Button").hover(
		function(){ 						
			$(this).addClass("StateBlueHover"); 
			$(this).addClass("StateActive");
		},
		function(){ 												
			$(this).removeClass("StateActive");
			$(this).removeClass("StateBlueHover");
		}
	);
	$(".MenuItem").hover(
		function(){ 						
			$(this).addClass("ButtonMouseHover");						
		},
		function(){ 
			$(this).removeClass("ButtonMouseHover");						
		}
	);
	$(".MenuItemChecked").hover(
		function(){ 						
			$(this).addClass("ButtonMouseHover");						
		},
		function(){ 
			$(this).removeClass("ButtonMouseHover");						
		}
	);
});