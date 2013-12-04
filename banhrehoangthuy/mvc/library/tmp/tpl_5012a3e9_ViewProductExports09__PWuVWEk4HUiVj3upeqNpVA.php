<?php 
function tpl_5012a3e9_ViewProductExports09__PWuVWEk4HUiVj3upeqNpVA(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
                sUpdateURL: "?cmd=UpdateProductExport&IdCustomer=9",
                "aoColumns": [
					null,
					{ indicator: 'Lưu số lượng...',
						tooltip: 'Click để chỉnh sửa'
                    },
					{ indicator: 'Lưu số lượng...',
						tooltip: 'Click để chỉnh sửa'
                    },
					{ indicator: 'Lưu số lượng...',
						tooltip: 'Click để chỉnh sửa'
                    },
					{ indicator: 'Lưu số lượng...',
						tooltip: 'Click để chỉnh sửa'
                    },
					{ indicator: 'Lưu số lượng...',
						tooltip: 'Click để chỉnh sửa'
                    },
					{ indicator: 'Lưu số lượng...',
						tooltip: 'Click để chỉnh sửa'
                    },
					{ indicator: 'Lưu số lượng...',
						tooltip: 'Click để chỉnh sửa'
                    },
					{ indicator: 'Lưu số lượng...',
						tooltip: 'Click để chỉnh sửa'
                    },
					{ indicator: 'Lưu số lượng...',
						tooltip: 'Click để chỉnh sửa'
                    }
				]
			});	
		new FixedHeader( oTable, { "top": true, "zTop": 105 } );
	});
	/*]]>*/	
	</script>
	</head>	
<?php /* tag "body" from line 58 */; ?>
<body>
<?php /* tag "div" from line 59 */; ?>
<div id="frame">
	<?php /* tag "div" from line 60 */; ?>
<div id="page">		
		<?php 
/* tag "span" from line 61 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/HeaderModuleCustomers', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "div" from line 62 */; ?>
<div id="module2">
			<?php /* tag "div" from line 63 */; ?>
<div id="nav">
				<?php /* tag "div" from line 64 */; ?>
<div id="Title">
					<?php /* tag "div" from line 65 */; ?>
<div id="Text"><?php echo phptal_escape($ctx->Title); ?>
</div>
				</div>				
			</div>
			<?php /* tag "div" from line 68 */; ?>
<div id="Column1of1">
				<?php /* tag "div" from line 69 */; ?>
<div id="Title">
					<?php 
/* tag "a" from line 71 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Customer, 'getURLViewProductExportsNextMonth')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="Tới" id="TitleButton" class="Button StateDefault ButtonIconSolo CornerAll"<?php echo $_tmp_1 ?>
>
						<?php /* tag "span" from line 72 */; ?>
<span class="ButtonIcon ButtonIconSeekNext"></span>
					</a>
					<?php 
/* tag "a" from line 75 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Customer, 'getURLViewProductExportsBeforeMonth')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="Lui" id="TitleButton" class="Button StateDefault ButtonIconSolo CornerAll"<?php echo $_tmp_1 ?>
>
						<?php /* tag "span" from line 76 */; ?>
<span class="ButtonIcon ButtonIconSeekPrev"></span>
					</a>
					<?php 
/* tag "a" from line 79 */ ;
if (null !== ($_tmp_1 = ($ctx->ParentsLinked))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="Quay lại" id="TitleButton" class="Button StateDefault ButtonIconSolo CornerAll"<?php echo $_tmp_1 ?>
>
							<?php /* tag "span" from line 80 */; ?>
<span class="ButtonIcon ButtonIconArrowreturn1-n"></span>quay lại
					</a>				
					<?php 
/* tag "a" from line 83 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Customer, 'getURLPrintProductExports')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="In" target="blank" id="TitleButton" class="Button StateDefault ButtonIconSolo CornerAll"<?php echo $_tmp_1 ?>
>
							<?php /* tag "span" from line 84 */; ?>
<span class="ButtonIcon ButtonIconPrint"></span>
					</a>
				</div>
				<?php /* tag "div" from line 87 */; ?>
<div id="Table">
					<?php /* tag "table" from line 88 */; ?>
<table cellpadding="0" cellspacing="0" border="0" class="display" id="DataTable">
						<?php /* tag "thead" from line 89 */; ?>
<thead>					
							<?php /* tag "tr" from line 90 */; ?>
<tr>								
								<?php /* tag "th" from line 91 */; ?>
<th align="center">NGÀY</th>
								<?php /* tag "th" from line 92 */; ?>
<th align="center">5gdầux30<?php /* tag "BR" from line 92 */; ?>
<BR/>(150g)</th>
								<?php /* tag "th" from line 93 */; ?>
<th align="center">6gdầux30<?php /* tag "BR" from line 93 */; ?>
<BR/>(180g)</th>
								<?php /* tag "th" from line 94 */; ?>
<th align="center">7gdầux30<?php /* tag "BR" from line 94 */; ?>
<BR/>(210g)</th>
								
								<?php /* tag "th" from line 96 */; ?>
<th align="center">7gdầux45<?php /* tag "BR" from line 96 */; ?>
<BR/>(300g)</th>
								<?php /* tag "th" from line 97 */; ?>
<th align="center">16calx30<?php /* tag "BR" from line 97 */; ?>
<BR/>(150g)</th>
								<?php /* tag "th" from line 98 */; ?>
<th align="center">16calx90<?php /* tag "BR" from line 98 */; ?>
<BR/>(500g)</th>
								<?php /* tag "th" from line 99 */; ?>
<th align="center">18calx70<?php /* tag "BR" from line 99 */; ?>
<BR/>(500g)</th>
								<?php /* tag "th" from line 100 */; ?>
<th align="center">20calTx60<?php /* tag "BR" from line 100 */; ?>
<BR/>(500g)</th>
								<?php /* tag "th" from line 101 */; ?>
<th align="center">20calx60<?php /* tag "BR" from line 101 */; ?>
<BR/>(500g)</th>
							</tr>
						</thead>
						<?php /* tag "tbody" from line 104 */; ?>
<tbody>
							<?php 
/* tag "tr" from line 105 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->PETracking = new PHPTAL_RepeatController($ctx->PETrackings)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->PETracking as $ctx->PETracking): ;
?>
<tr>								
								<?php /* tag "td" from line 106 */; ?>
<td align="center">
									<?php /* tag "B" from line 107 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->PETracking, 'getDatePrint')); ?>
</B>
								</td>
								<?php /* tag "td" from line 109 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->PETracking, 'getProduct08')); ?>
</td>
								<?php /* tag "td" from line 110 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->PETracking, 'getProduct12')); ?>
</td>
								<?php /* tag "td" from line 111 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->PETracking, 'getProduct18')); ?>
</td>								
								<?php /* tag "td" from line 112 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->PETracking, 'getProduct21')); ?>
</td>
								<?php /* tag "td" from line 113 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->PETracking, 'getProduct29')); ?>
</td>
								<?php /* tag "td" from line 114 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->PETracking, 'getProduct30')); ?>
</td>
								<?php /* tag "td" from line 115 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->PETracking, 'getProduct32')); ?>
</td>
								<?php /* tag "td" from line 116 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->PETracking, 'getProduct33')); ?>
</td>
								<?php /* tag "td" from line 117 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->PETracking, 'getProduct34')); ?>
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
/* tag "span" from line 124 */ ;
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

Generated by PHPTAL from /home/a23app/public_html/bra/mvc/templates/ViewProductExports09.html (edit that file instead) */; ?>