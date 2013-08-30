<?php 
function tpl_5012a3e1_ViewEmployeeTracking__yZxn3zvTeAE70bPMNFKv_g(PHPTAL $tpl, PHPTAL_Context $ctx) {
$_thistpl = $tpl ;
$_translator = $tpl->getTranslator() ;
/* tag "documentElement" from line 1 */ ;
$ctx->setDocType('<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">',false) ;
?>

<?php /* tag "html" from line 2 */; ?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<?php /* tag "head" from line 3 */; ?>
<head>
		<?php 
/* tag "span" from line 4 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/IncludeBase', $_thistpl) ;
$ctx->popSlots() ;
?>
				
		<?php /* tag "script" from line 5 */; ?>
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
		new FixedHeader( oTable, { "top": true, "zTop": 105 } );
	});
	/*]]>*/	
	</script>
	</head>	
<?php /* tag "body" from line 27 */; ?>
<body>	
<?php /* tag "div" from line 28 */; ?>
<div id="frame">
	<?php /* tag "div" from line 29 */; ?>
<div id="page">
		<?php 
/* tag "span" from line 30 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/HeaderModuleFactories', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "div" from line 31 */; ?>
<div id="module2">
			<?php /* tag "div" from line 32 */; ?>
<div id="nav">
				<?php /* tag "div" from line 33 */; ?>
<div id="Title">
					<?php /* tag "div" from line 34 */; ?>
<div id="Text"><?php echo phptal_escape($ctx->Title); ?>
</div>
				</div>				
			</div>
			<?php /* tag "div" from line 37 */; ?>
<div id="Column1of1">
				<?php /* tag "div" from line 38 */; ?>
<div id="Title">					
					<?php 
/* tag "a" from line 40 */ ;
if (null !== ($_tmp_1 = ($ctx->ParentsLinked))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="Quay lại" id="TitleButton" class="Button StateDefault ButtonIconSolo CornerAll"<?php echo $_tmp_1 ?>
>
							<?php /* tag "span" from line 41 */; ?>
<span class="ButtonIcon ButtonIconArrowreturn1-n"></span>quay lại
					</a>
					<?php 
/* tag "a" from line 44 */ ;
if (null !== ($_tmp_1 = ($ctx->PrintURLEmployeeTrackings))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="In tổng kết" target="blank" id="TitleButton" class="Button StateDefault ButtonIconSolo CornerAll"<?php echo $_tmp_1 ?>
>
							<?php /* tag "span" from line 45 */; ?>
<span class="ButtonIcon ButtonIconPrint"></span>
					</a>					
				</div>
				<?php /* tag "div" from line 48 */; ?>
<div id="Table">
					<?php /* tag "table" from line 49 */; ?>
<table cellpadding="0" cellspacing="0" border="0" class="display" id="DataTable">
						<?php /* tag "thead" from line 50 */; ?>
<thead>					
							<?php /* tag "tr" from line 51 */; ?>
<tr>								
								<?php /* tag "th" from line 52 */; ?>
<th align="left">TÊN</th>																
								<?php /* tag "th" from line 53 */; ?>
<th align="left">TỔNG KẾT</th>
							</tr>
						</thead>
						<?php /* tag "tbody" from line 56 */; ?>
<tbody>
							<?php 
/* tag "tr" from line 57 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->EmployeeTracking = new PHPTAL_RepeatController($ctx->EmployeeTrackings)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->EmployeeTracking as $ctx->EmployeeTracking): ;
?>
<tr>								
								<?php /* tag "td" from line 58 */; ?>
<td align="left"><?php echo phptal_escape($ctx->path($ctx->EmployeeTracking, 'getName')); ?>
</td>
								<?php /* tag "td" from line 59 */; ?>
<td align="right">									
									<?php 
/* tag "a" from line 61 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->EmployeeTracking, 'getURLPrint')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a title="Tổng kết lương" target="blank" class="Button StateDefault ButtonIconSolo CornerAll"<?php echo $_tmp_2 ?>
>
										<?php /* tag "span" from line 62 */; ?>
<span class="ButtonIcon ButtonIconFolderOpen"></span>
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
/* tag "span" from line 71 */ ;
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

Generated by PHPTAL from /home/a23app/public_html/bra/mvc/templates/ViewEmployeeTrackings1.html (edit that file instead) */; ?>