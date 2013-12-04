$(document).ready(function() {
	
	$('#DataTable').find('tbody tr').hover(
		function(){ $(this).find('td').addClass('table_highlighted');}, 
		function(){	$(this).find('td').removeClass('table_highlighted');}
	);	
	
	$('#DataTable').dataTable({	
		"sScrollY": "1080px",
		"fnDrawCallback":
		function(oSettings ) {						
			if ( oSettings.bSorted || oSettings.bFiltered ){
				for ( var i=0, iLen=oSettings.aiDisplay.length ; i < iLen ; i++ ){
					$('td:eq(0)', oSettings.aoData[ oSettings.aiDisplay[i] ].nTr ).html( i+1 );
				}
			}
		},		
		"bStateSave": false,
		"bFilter": false,
		"bInfo": false,		
		"bPaginate": false,
		"sPaginationType": "full_numbers",
		"iDisplayLength": 20,
		"aLengthMenu": [[10,25, 50, 100, -1], [10, 25, 50, 100, "All"]],
		"oLanguage":{
			"sUrl": "../Template/script/dataTables.vietnamese.txt"
		}
	});
});