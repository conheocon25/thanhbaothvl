<?php 
function tpl_50fa0f14_ViewPriceEmployeePro__wonnF1gk7k7yEA0DcWIA6w(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
<th align="left" width="20%">TÊN</th>
								<?php /* tag "th" from line 63 */; ?>
<th align="center" width="10%">16x30(90g)</th>
								<?php /* tag "th" from line 64 */; ?>
<th align="center" width="10%">16x30(150g)</th>
								<?php /* tag "th" from line 65 */; ?>
<th align="center" width="10%">16calx30(150g)</th>
								<?php /* tag "th" from line 66 */; ?>
<th align="center" width="10%">18x30(180g)</th>
								<?php /* tag "th" from line 67 */; ?>
<th align="center" width="10%">19x30(210g)</th>
								<?php /* tag "th" from line 68 */; ?>
<th align="center" width="10%">19x45(300g)</th>
								<?php /* tag "th" from line 69 */; ?>
<th align="center" width="10%">20x30(210g)</th>
								<?php /* tag "th" from line 70 */; ?>
<th align="center" width="10%">22x30(240g)</th>
							</tr>
						</thead>
						<?php /* tag "tbody" from line 73 */; ?>
<tbody>
							<?php 
/* tag "tr" from line 74 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->PEPTracking = new PHPTAL_RepeatController($ctx->PEPTrackings)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->PEPTracking as $ctx->PEPTracking): ;
?>
<tr>								
								<?php /* tag "td" from line 75 */; ?>
<td align="left"><?php echo phptal_escape($ctx->path($ctx->PEPTracking, 'getName')); ?>
</td>
								<?php /* tag "td" from line 76 */; ?>
<td align="center">
									<?php 
/* tag "a" from line 78 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PEPTracking, 'getURLUpdatePEP02')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->PEPTracking, 'getProduct02')); ?>
</a>
								</td>								
								<?php /* tag "td" from line 80 */; ?>
<td align="center">
									<?php 
/* tag "a" from line 82 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PEPTracking, 'getURLUpdatePEP04')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->PEPTracking, 'getProduct04')); ?>
</a>
								</td>								
								<?php /* tag "td" from line 84 */; ?>
<td align="center">
									<?php 
/* tag "a" from line 86 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PEPTracking, 'getURLUpdatePEP06')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->PEPTracking, 'getProduct06')); ?>
</a>
								</td>								
								<?php /* tag "td" from line 88 */; ?>
<td align="center">
									<?php 
/* tag "a" from line 90 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PEPTracking, 'getURLUpdatePEP08')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->PEPTracking, 'getProduct08')); ?>
</a>
								</td>								
								<?php /* tag "td" from line 92 */; ?>
<td align="center">
									<?php 
/* tag "a" from line 94 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PEPTracking, 'getURLUpdatePEP10')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->PEPTracking, 'getProduct10')); ?>
</a>
								</td>
								<?php /* tag "td" from line 96 */; ?>
<td align="center">
									<?php 
/* tag "a" from line 98 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PEPTracking, 'getURLUpdatePEP11')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->PEPTracking, 'getProduct11')); ?>
</a>
								</td>
								
								<?php /* tag "td" from line 101 */; ?>
<td align="center">
									<?php 
/* tag "a" from line 103 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PEPTracking, 'getURLUpdatePEP13')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->PEPTracking, 'getProduct13')); ?>
</a>
								</td>								
								<?php /* tag "td" from line 105 */; ?>
<td align="center">
									<?php 
/* tag "a" from line 107 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->PEPTracking, 'getURLUpdatePEP15')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->PEPTracking, 'getProduct15')); ?>
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
/* tag "span" from line 115 */ ;
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

Generated by PHPTAL from /home/a23app/public_html/banhreht/mvc/templates/ViewPriceEmployeeProduceTrackings2.html (edit that file instead) */; ?>