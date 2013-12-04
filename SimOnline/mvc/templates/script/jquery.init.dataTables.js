$(document).ready(function() {
	$('#DataTable').find('tbody tr').hover(
		function(){ $(this).find('td').addClass('table_highlighted');}, 
		function(){	$(this).find('td').removeClass('table_highlighted');}
	);				
	$('#DataTable').dataTable({	
		"sScrollY": "auto",		
		"bStateSave": true,
		"bFilter": false,
		"bInfo": false,
		"bPaginate": false
	});
});