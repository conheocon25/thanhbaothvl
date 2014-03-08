<?php 
function tpl_51e520ae_ViewEmployeeLoanTrac__6wxiskZNMjYRnvxLOf0R_w(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
<?php /* tag "body" from line 38 */; ?>
<body>	
<?php /* tag "div" from line 39 */; ?>
<div id="frame">
	<?php /* tag "div" from line 40 */; ?>
<div id="page">
		<?php 
/* tag "span" from line 41 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/HeaderModuleFactories', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "div" from line 42 */; ?>
<div id="module2">
			<?php /* tag "div" from line 43 */; ?>
<div id="nav">
				<?php /* tag "div" from line 44 */; ?>
<div id="Title">
					<?php /* tag "div" from line 45 */; ?>
<div id="Text"><?php echo phptal_escape($ctx->Title); ?>
</div>
				</div>				
			</div>
			<?php /* tag "div" from line 48 */; ?>
<div id="Column1of1">
				<?php /* tag "div" from line 49 */; ?>
<div id="Title">
					<?php 
/* tag "a" from line 51 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Factory, 'getURLViewEmployeeLoanTrackingsNext')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="Tới" id="TitleButton" class="Button StateDefault ButtonIconSolo CornerAll"<?php echo $_tmp_1 ?>
>
						<?php /* tag "span" from line 52 */; ?>
<span class="ButtonIcon ButtonIconSeekNext"></span>
					</a>
					<?php 
/* tag "a" from line 55 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Factory, 'getURLViewEmployeeLoanTrackingsBefore')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="Lui" id="TitleButton" class="Button StateDefault ButtonIconSolo CornerAll"<?php echo $_tmp_1 ?>
>
						<?php /* tag "span" from line 56 */; ?>
<span class="ButtonIcon ButtonIconSeekPrev"></span>
					</a>
					<?php 
/* tag "a" from line 59 */ ;
if (null !== ($_tmp_1 = ($ctx->ParentsLinked))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="Quay lại" id="TitleButton" class="Button StateDefault ButtonIconSolo CornerAll"<?php echo $_tmp_1 ?>
>
							<?php /* tag "span" from line 60 */; ?>
<span class="ButtonIcon ButtonIconArrowreturn1-n"></span>quay lại
					</a>					
				</div>
				<?php /* tag "div" from line 63 */; ?>
<div id="Table">
					<?php /* tag "table" from line 64 */; ?>
<table cellpadding="0" cellspacing="0" border="0" class="display" id="DataTable">
						<?php /* tag "thead" from line 65 */; ?>
<thead>					
							<?php /* tag "tr" from line 66 */; ?>
<tr>								
								<?php /* tag "th" from line 67 */; ?>
<th align="left">TÊN</th>								
								<?php /* tag "th" from line 68 */; ?>
<th align="right">SỐ TIỀN</th>
							</tr>
						</thead>
						<?php /* tag "tbody" from line 71 */; ?>
<tbody>
							<?php 
/* tag "tr" from line 72 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->EmployeeLoanTracking = new PHPTAL_RepeatController($ctx->EmployeeLoanTrackings)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->EmployeeLoanTracking as $ctx->EmployeeLoanTracking): ;
?>
<tr>								
								<?php /* tag "td" from line 73 */; ?>
<td align="left"><?php echo phptal_escape($ctx->path($ctx->EmployeeLoanTracking, 'getName')); ?>
</td>																
								<?php /* tag "td" from line 74 */; ?>
<td align="right">
									<?php 
/* tag "a" from line 76 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->EmployeeLoanTracking, 'getURLUpdateEmployeeLoan')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->EmployeeLoanTracking, 'getValue')); ?>
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
/* tag "span" from line 84 */ ;
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

Generated by PHPTAL from /home/banhreht/public_html/mvc/templates/ViewEmployeeLoanTrackings.html (edit that file instead) */; ?>