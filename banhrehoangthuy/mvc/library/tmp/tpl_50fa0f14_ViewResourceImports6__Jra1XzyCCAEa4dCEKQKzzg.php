<?php 
function tpl_50fa0f14_ViewResourceImports6__Jra1XzyCCAEa4dCEKQKzzg(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
		}).makeEditable({
                sUpdateURL: "?cmd=UpdateResourceImport",
                "aoColumns": [
					null,	
                    {
                	    indicator: 'Lưu số lượng...',
						tooltip: 'Click để chỉnh sửa số lượng DẦU ĐẶC'
                    },{
                	    indicator: 'Lưu số lượng...',
						tooltip: 'Click để chỉnh sửa số lượng BỘT NĂNG'
                    },
					{
                	    indicator: 'Lưu số lượng...',
						tooltip: 'Click để chỉnh sửa số lượng BỘT PHA'
                    },{
                	    indicator: 'Lưu số lượng...',
						tooltip: 'Click để chỉnh sửa số lượng MŨ CŨ'
                    },{
                	    indicator: 'Lưu số lượng...',
						tooltip: 'Click để chỉnh sửa số lượng THUỐC'
                    },{
                	    indicator: 'Lưu số lượng...',
						tooltip: 'Click để chỉnh sửa số lượng CAL'
                    }
				]
			});
			new FixedHeader( oTable, { "top": true, "zTop": 105 } );
	});
	/*]]>*/	
	</script>
	</head>	
<?php /* tag "body" from line 52 */; ?>
<body>	
<?php /* tag "div" from line 53 */; ?>
<div id="frame">
	<?php /* tag "div" from line 54 */; ?>
<div id="page">
		<?php 
/* tag "span" from line 55 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/HeaderModuleSuppliers', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "div" from line 56 */; ?>
<div id="module2">
			<?php /* tag "div" from line 57 */; ?>
<div id="nav">
				<?php /* tag "div" from line 58 */; ?>
<div id="Title">
					<?php /* tag "div" from line 59 */; ?>
<div id="Text"><?php echo phptal_escape($ctx->Title); ?>
</div>					
				</div>
			</div>
			<?php /* tag "div" from line 62 */; ?>
<div id="Column1of1">
				<?php /* tag "div" from line 63 */; ?>
<div id="Title">					
					<?php 
/* tag "a" from line 65 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Supplier, 'getURLResourceImportsNext')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="Tới" id="TitleButton" class="Button StateDefault ButtonIconSolo CornerAll"<?php echo $_tmp_1 ?>
>
							<?php /* tag "span" from line 66 */; ?>
<span class="ButtonIcon ButtonIconSeekNext"></span>
					</a>
					<?php 
/* tag "a" from line 69 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Supplier, 'getURLResourceImportsBefore')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="Lui" id="TitleButton" class="Button StateDefault ButtonIconSolo CornerAll"<?php echo $_tmp_1 ?>
>
							<?php /* tag "span" from line 70 */; ?>
<span class="ButtonIcon ButtonIconSeekPrev"></span>
					</a>
					<?php 
/* tag "a" from line 73 */ ;
if (null !== ($_tmp_1 = ($ctx->ParentsLinked))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="Quay lại" id="TitleButton" class="Button StateDefault ButtonIconSolo CornerAll"<?php echo $_tmp_1 ?>
>
							<?php /* tag "span" from line 74 */; ?>
<span class="ButtonIcon ButtonIconArrowreturn1-n"></span>quay lại
					</a>
										
				</div>
				<?php /* tag "div" from line 78 */; ?>
<div id="Table">
					<?php /* tag "table" from line 79 */; ?>
<table cellpadding="0" cellspacing="0" border="0" class="display" id="DataTable">
						<?php /* tag "thead" from line 80 */; ?>
<thead>					
							<?php /* tag "tr" from line 81 */; ?>
<tr>								
								<?php /* tag "th" from line 82 */; ?>
<th align="center">NGÀY</th>
								<?php /* tag "th" from line 83 */; ?>
<th align="center">Dầu đặc</th>
								<?php /* tag "th" from line 84 */; ?>
<th align="center">Bột năng</th>
								<?php /* tag "th" from line 85 */; ?>
<th align="center">Bột pha</th>
								<?php /* tag "th" from line 86 */; ?>
<th align="center">Mũ cũ</th>
								<?php /* tag "th" from line 87 */; ?>
<th align="center">Thuốc</th>
								<?php /* tag "th" from line 88 */; ?>
<th align="center">Cal</th>
							</tr>
						</thead>
						<?php /* tag "tbody" from line 91 */; ?>
<tbody>
							<?php 
/* tag "tr" from line 92 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->RIT = new PHPTAL_RepeatController($ctx->RITs)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->RIT as $ctx->RIT): ;
?>
<tr>								
								<?php /* tag "td" from line 93 */; ?>
<td align="center"><?php /* tag "b" from line 93 */; ?>
<b><?php echo phptal_escape($ctx->path($ctx->RIT, 'getDatePrint')); ?>
</b></td>								
								<?php /* tag "td" from line 94 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->RIT, 'getResource03')); ?>
</td>
								<?php /* tag "td" from line 95 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->RIT, 'getResource07')); ?>
</td>
								<?php /* tag "td" from line 96 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->RIT, 'getResource08')); ?>
</td>
								<?php /* tag "td" from line 97 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->RIT, 'getResource09')); ?>
</td>
								<?php /* tag "td" from line 98 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->RIT, 'getResource10')); ?>
</td>
								<?php /* tag "td" from line 99 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->RIT, 'getResource05')); ?>
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
/* tag "span" from line 106 */ ;
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

Generated by PHPTAL from /home/a23app/public_html/banhreht/mvc/templates/ViewResourceImports6.html (edit that file instead) */; ?>