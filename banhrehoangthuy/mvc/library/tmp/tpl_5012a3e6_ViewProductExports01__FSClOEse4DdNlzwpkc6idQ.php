<?php 
function tpl_5012a3e6_ViewProductExports01__FSClOEse4DdNlzwpkc6idQ(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
                sUpdateURL: "?cmd=UpdateProductExport&IdCustomer=1",
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
                    }
				]
			});	
		new FixedHeader( oTable, { "top": true, "zTop": 105 } );
	});
	/*]]>*/	
	</script>
	</head>	
<?php /* tag "body" from line 49 */; ?>
<body>
<?php /* tag "div" from line 50 */; ?>
<div id="frame">
	<?php /* tag "div" from line 51 */; ?>
<div id="page">		
		<?php 
/* tag "span" from line 52 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/HeaderModuleCustomers', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "div" from line 53 */; ?>
<div id="module2">
			<?php /* tag "div" from line 54 */; ?>
<div id="nav">
				<?php /* tag "div" from line 55 */; ?>
<div id="Title">
					<?php /* tag "div" from line 56 */; ?>
<div id="Text"><?php echo phptal_escape($ctx->Title); ?>
</div>
				</div>				
			</div>
			<?php /* tag "div" from line 59 */; ?>
<div id="Column1of1">
				<?php /* tag "div" from line 60 */; ?>
<div id="Title">
					<?php 
/* tag "a" from line 62 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Customer, 'getURLViewProductExportsNextMonth')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="Tới" id="TitleButton" class="Button StateDefault ButtonIconSolo CornerAll"<?php echo $_tmp_1 ?>
>
						<?php /* tag "span" from line 63 */; ?>
<span class="ButtonIcon ButtonIconSeekNext"></span>
					</a>
					<?php 
/* tag "a" from line 66 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Customer, 'getURLViewProductExportsBeforeMonth')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="Lui" id="TitleButton" class="Button StateDefault ButtonIconSolo CornerAll"<?php echo $_tmp_1 ?>
>
						<?php /* tag "span" from line 67 */; ?>
<span class="ButtonIcon ButtonIconSeekPrev"></span>
					</a>
					<?php 
/* tag "a" from line 70 */ ;
if (null !== ($_tmp_1 = ($ctx->ParentsLinked))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="Quay lại" id="TitleButton" class="Button StateDefault ButtonIconSolo CornerAll"<?php echo $_tmp_1 ?>
>
							<?php /* tag "span" from line 71 */; ?>
<span class="ButtonIcon ButtonIconArrowreturn1-n"></span>quay lại
					</a>				
					<?php 
/* tag "a" from line 74 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Customer, 'getURLPrintProductExports')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="In" target="blank" id="TitleButton" class="Button StateDefault ButtonIconSolo CornerAll"<?php echo $_tmp_1 ?>
>
							<?php /* tag "span" from line 75 */; ?>
<span class="ButtonIcon ButtonIconPrint"></span>
					</a>
					
				</div>
				<?php /* tag "div" from line 79 */; ?>
<div id="Table">
					<?php /* tag "table" from line 80 */; ?>
<table cellpadding="0" cellspacing="0" border="0" class="display" id="DataTable">
						<?php /* tag "thead" from line 81 */; ?>
<thead>					
							<?php /* tag "tr" from line 82 */; ?>
<tr>								
								<?php /* tag "th" from line 83 */; ?>
<th align="center">NGÀY</th>
								<?php /* tag "th" from line 84 */; ?>
<th align="center">Rế 19 (kdkt ko cal)<?php /* tag "BR" from line 84 */; ?>
<BR/>(300g)</th>
								<?php /* tag "th" from line 85 */; ?>
<th align="center">Rế 16 (có cal)<?php /* tag "BR" from line 85 */; ?>
<BR/>(150g)</th>
								<?php /* tag "th" from line 86 */; ?>
<th align="center">Rế 16 (có cal)<?php /* tag "BR" from line 86 */; ?>
<BR/>(500g)</th>
								<?php /* tag "th" from line 87 */; ?>
<th align="center">Rế 18 (có cal)<?php /* tag "BR" from line 87 */; ?>
<BR/>(500g)</th>
								<?php /* tag "th" from line 88 */; ?>
<th align="center">Rế 20 (có cal có thuốc)<?php /* tag "BR" from line 88 */; ?>
<BR/>(500g)</th>
								<?php /* tag "th" from line 89 */; ?>
<th align="center">Rế 20 (có cal ko thuốc)<?php /* tag "BR" from line 89 */; ?>
<BR/>(500g)</th>
							</tr>
						</thead>
						<?php /* tag "tbody" from line 92 */; ?>
<tbody>
							<?php 
/* tag "tr" from line 93 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->PETracking = new PHPTAL_RepeatController($ctx->PETrackings)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->PETracking as $ctx->PETracking): ;
?>
<tr>								
								<?php /* tag "td" from line 94 */; ?>
<td align="center">
									<?php /* tag "B" from line 95 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->PETracking, 'getDatePrint')); ?>
</B>
								</td>								
								<?php /* tag "td" from line 97 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->PETracking, 'getProduct21')); ?>
</td>
								<?php /* tag "td" from line 98 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->PETracking, 'getProduct29')); ?>
</td>
								<?php /* tag "td" from line 99 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->PETracking, 'getProduct30')); ?>
</td>
								<?php /* tag "td" from line 100 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->PETracking, 'getProduct32')); ?>
</td>
								<?php /* tag "td" from line 101 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->PETracking, 'getProduct33')); ?>
</td>
								<?php /* tag "td" from line 102 */; ?>
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

Generated by PHPTAL from /home/a23app/public_html/bra/mvc/templates/ViewProductExports01.html (edit that file instead) */; ?>