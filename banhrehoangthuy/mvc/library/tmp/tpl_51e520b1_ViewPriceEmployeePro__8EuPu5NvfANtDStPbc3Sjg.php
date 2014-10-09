<?php 
function tpl_51e520b1_ViewPriceEmployeePro__8EuPu5NvfANtDStPbc3Sjg(PHPTAL $tpl, PHPTAL_Context $ctx) {
$_thistpl = $tpl ;
$_translator = $tpl->getTranslator() ;
/* tag "documentElement" from line 1 */ ;
$ctx->setDocType('<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">',false) ;
?>

<?php /* tag "html" from line 2 */; ?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<?php /* tag "head" from line 3 */; ?>
<head>
		<?php /* tag "meta" from line 4 */; ?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>		
		<?php /* tag "link" from line 5 */; ?>
<link rel="icon" type="image/ico" href="mvc/templates/theme/image/favicon.ico"/>
		<?php /* tag "script" from line 6 */; ?>
<script type="text/javascript" language="javascript" src="mvc/templates/script/jquery.js"></script>			
		<?php /* tag "script" from line 7 */; ?>
<script type="text/javascript" language="javascript" src="mvc/templates/script/jquery.dataTables.js"></script>
		<?php /* tag "script" from line 8 */; ?>
<script type="text/javascript" language="javascript" src="mvc/templates/script/jquery.jeditable.js"></script>
		<?php /* tag "script" from line 9 */; ?>
<script type="text/javascript" language="javascript" src="mvc/templates/script/FixedColumns.js"></script>
		<?php /* tag "script" from line 10 */; ?>
<script type="text/javascript" language="javascript" src="mvc/templates/script/main.js"></script>
		<?php /* tag "script" from line 11 */; ?>
<script type="text/javascript" language="javascript" src="mvc/templates/script/Button.js"></script>
		<?php /* tag "script" from line 12 */; ?>
<script type="text/javascript" language="javascript" src="mvc/templates/script/KeyTable.js"></script>
				
		<?php /* tag "link" from line 14 */; ?>
<link rel="stylesheet" type="text/css" href="mvc/templates/theme/css/data_table.css"/>
		<?php /* tag "link" from line 15 */; ?>
<link rel="stylesheet" type="text/css" href="mvc/templates/theme/css/main_2.css"/>							
		<?php /* tag "link" from line 16 */; ?>
<link rel="stylesheet" type="text/css" href="mvc/templates/theme/css/ButtonTheme.css"/>
		<?php /* tag "script" from line 17 */; ?>
<script>
	/*<![CDATA[*/
	$(document).ready(function() {
						
		$('#DataTable').find('tbody tr').hover(
			function(){ $(this).find('td').addClass('table_highlighted');}, 
			function(){	$(this).find('td').removeClass('table_highlighted');}
		);
		
		var oTable = $('#DataTable').dataTable({
			"sScrollX": "100%",
			"sScrollXInner": "100%",
			"sScrollY": "100%",
			"bScrollCollapse": true,			
			"bStateSave": false,
			"bFilter": false,
			"bInfo": false,
			"bSort": false,
			"bPaginate": false			
		});		
	});
	/*]]>*/	
	</script>
	</head>	
<?php /* tag "body" from line 41 */; ?>
<body>	
<?php /* tag "div" from line 42 */; ?>
<div id="frame">
	<?php /* tag "div" from line 43 */; ?>
<div id="page">
		<?php 
/* tag "span" from line 44 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/HeaderModuleFactories', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "div" from line 45 */; ?>
<div id="module2">
			<?php /* tag "div" from line 46 */; ?>
<div id="nav">
				<?php /* tag "div" from line 47 */; ?>
<div id="Title">
					<?php /* tag "div" from line 48 */; ?>
<div id="Text"><?php echo phptal_escape($ctx->Title); ?>
</div>
				</div>				
			</div>
			<?php /* tag "div" from line 51 */; ?>
<div id="Column1of1">
				<?php /* tag "div" from line 52 */; ?>
<div id="Title">					
					<?php 
/* tag "a" from line 54 */ ;
if (null !== ($_tmp_1 = ($ctx->ParentsLinked))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="Quay lại" id="TitleButton" class="Button StateDefault ButtonIconSolo CornerAll"<?php echo $_tmp_1 ?>
>
							<?php /* tag "span" from line 55 */; ?>
<span class="ButtonIcon ButtonIconArrowreturn1-n"></span>quay lại
					</a>					
				</div>
				<?php /* tag "div" from line 58 */; ?>
<div id="Table">
					<?php /* tag "table" from line 59 */; ?>
<table cellpadding="0" cellspacing="0" border="0" class="display" id="DataTable">
						<?php /* tag "thead" from line 60 */; ?>
<thead>					
							<?php /* tag "tr" from line 61 */; ?>
<tr>								
								<?php /* tag "th" from line 62 */; ?>
<th align="left" width="12%">TÊN</th>
								<?php /* tag "th" from line 63 */; ?>
<th align="center" width="5%">16(3g)</th>
								<?php /* tag "th" from line 64 */; ?>
<th align="center" width="5%">16(5g)</th>								
								<?php /* tag "th" from line 65 */; ?>
<th align="center" width="5%">16cal5g)</th>								
								<?php /* tag "th" from line 66 */; ?>
<th align="center" width="5%">18(6g)</th>								
								<?php /* tag "th" from line 67 */; ?>
<th align="center" width="5%">19(7g)</th>								
								<?php /* tag "th" from line 68 */; ?>
<th align="center" width="5%">20(8g)</th>								
								<?php /* tag "th" from line 69 */; ?>
<th align="center" width="5%">22(9g)</th>
							</tr>
						</thead>
						<?php /* tag "tbody" from line 72 */; ?>
<tbody>
							<?php 
/* tag "tr" from line 73 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->PEPTracking = new PHPTAL_RepeatController($ctx->PEPTrackings)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->PEPTracking as $ctx->PEPTracking): ;
?>
<tr>								
								<?php /* tag "td" from line 74 */; ?>
<td align="left"><?php echo phptal_escape($ctx->path($ctx->PEPTracking, 'getName')); ?>
</td>																
								<?php /* tag "td" from line 75 */; ?>
<td align="center">
									<?php 
/* tag "a" from line 77 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PEPTracking, 'getURLUpdatePEP01')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->PEPTracking, 'getProduct01')); ?>
</a>
								</td>																
								<?php /* tag "td" from line 79 */; ?>
<td align="center">
									<?php 
/* tag "a" from line 81 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PEPTracking, 'getURLUpdatePEP03')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->PEPTracking, 'getProduct03')); ?>
</a>
								</td>								
								<?php /* tag "td" from line 83 */; ?>
<td align="center">
									<?php 
/* tag "a" from line 85 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PEPTracking, 'getURLUpdatePEP05')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->PEPTracking, 'getProduct05')); ?>
</a>
								</td>								
								<?php /* tag "td" from line 87 */; ?>
<td align="center">
									<?php 
/* tag "a" from line 89 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PEPTracking, 'getURLUpdatePEP07')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->PEPTracking, 'getProduct07')); ?>
</a>
								</td>								
								<?php /* tag "td" from line 91 */; ?>
<td align="center">
									<?php 
/* tag "a" from line 93 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PEPTracking, 'getURLUpdatePEP09')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->PEPTracking, 'getProduct09')); ?>
</a>
								</td>								
								<?php /* tag "td" from line 95 */; ?>
<td align="center">
									<?php 
/* tag "a" from line 97 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PEPTracking, 'getURLUpdatePEP12')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->PEPTracking, 'getProduct12')); ?>
</a>
								</td>								
								<?php /* tag "td" from line 99 */; ?>
<td align="center">
									<?php 
/* tag "a" from line 101 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PEPTracking, 'getURLUpdatePEP14')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->PEPTracking, 'getProduct14')); ?>
</a>
								</td>								
							</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

						</tbody>
					</table>
				</div>
			</div>
		</div>
		<?php 
/* tag "span" from line 109 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/footer', $_thistpl) ;
$ctx->popSlots() ;
?>

	</div>
</div>		

</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from /home/banhreht/public_html/mvc/templates/ViewPriceEmployeeProduceTrackings1.html (edit that file instead) */; ?>