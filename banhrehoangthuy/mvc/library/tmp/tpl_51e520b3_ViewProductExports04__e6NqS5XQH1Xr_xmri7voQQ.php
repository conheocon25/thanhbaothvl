<?php 
function tpl_51e520b3_ViewProductExports04__e6NqS5XQH1Xr_xmri7voQQ(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
                sUpdateURL: "?cmd=UpdateProductExport&IdCustomer=4",
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
                    }
				]
			});	
		new FixedHeader( oTable, { "top": true, "zTop": 105 } );
	});
	/*]]>*/	
	</script>
	</head>	
<?php /* tag "body" from line 55 */; ?>
<body>
<?php /* tag "div" from line 56 */; ?>
<div id="frame">
	<?php /* tag "div" from line 57 */; ?>
<div id="page">		
		<?php 
/* tag "span" from line 58 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/HeaderModuleCustomers', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "div" from line 59 */; ?>
<div id="module2">
			<?php /* tag "div" from line 60 */; ?>
<div id="nav">
				<?php /* tag "div" from line 61 */; ?>
<div id="Title">
					<?php /* tag "div" from line 62 */; ?>
<div id="Text"><?php echo phptal_escape($ctx->Title); ?>
</div>
				</div>				
			</div>
			<?php /* tag "div" from line 65 */; ?>
<div id="Column1of1">
				<?php /* tag "div" from line 66 */; ?>
<div id="Title">
					<?php 
/* tag "a" from line 68 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Customer, 'getURLViewProductExportsNextMonth')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="Tới" id="TitleButton" class="Button StateDefault ButtonIconSolo CornerAll"<?php echo $_tmp_1 ?>
>
						<?php /* tag "span" from line 69 */; ?>
<span class="ButtonIcon ButtonIconSeekNext"></span>
					</a>
					<?php 
/* tag "a" from line 72 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Customer, 'getURLViewProductExportsBeforeMonth')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="Lui" id="TitleButton" class="Button StateDefault ButtonIconSolo CornerAll"<?php echo $_tmp_1 ?>
>
						<?php /* tag "span" from line 73 */; ?>
<span class="ButtonIcon ButtonIconSeekPrev"></span>
					</a>
					<?php 
/* tag "a" from line 76 */ ;
if (null !== ($_tmp_1 = ($ctx->ParentsLinked))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="Quay lại" id="TitleButton" class="Button StateDefault ButtonIconSolo CornerAll"<?php echo $_tmp_1 ?>
>
							<?php /* tag "span" from line 77 */; ?>
<span class="ButtonIcon ButtonIconArrowreturn1-n"></span>quay lại
					</a>				
					<?php 
/* tag "a" from line 80 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Customer, 'getURLPrintProductExports')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="In" target="blank" id="TitleButton" class="Button StateDefault ButtonIconSolo CornerAll"<?php echo $_tmp_1 ?>
>
							<?php /* tag "span" from line 81 */; ?>
<span class="ButtonIcon ButtonIconPrint"></span>
					</a>
				</div>
				<?php /* tag "div" from line 84 */; ?>
<div id="Table">
					<?php /* tag "table" from line 85 */; ?>
<table cellpadding="0" cellspacing="0" border="0" class="display" id="DataTable">
						<?php /* tag "thead" from line 86 */; ?>
<thead>					
							<?php /* tag "tr" from line 87 */; ?>
<tr>								
								<?php /* tag "th" from line 88 */; ?>
<th align="left">NGÀY</th>
								<?php /* tag "th" from line 89 */; ?>
<th align="left">nhỏ x 6</th>
								<?php /* tag "th" from line 90 */; ?>
<th align="left">nhỏ x 7</th>
								<?php /* tag "th" from line 91 */; ?>
<th align="left">nhỏ x 10</th>
								<?php /* tag "th" from line 92 */; ?>
<th align="left">nhỏ x 18</th>
								<?php /* tag "th" from line 93 */; ?>
<th align="left">nhỏ x 30</th>
								<?php /* tag "th" from line 94 */; ?>
<th align="left">lớn x 8</th>
								<?php /* tag "th" from line 95 */; ?>
<th align="left">lớn x 10</th>								
								<?php /* tag "th" from line 96 */; ?>
<th align="left">Rế 16 (có cal)<?php /* tag "BR" from line 96 */; ?>
<BR/>(500g)</th>
							</tr>
						</thead>
						<?php /* tag "tbody" from line 99 */; ?>
<tbody>
							<?php 
/* tag "tr" from line 100 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->PETracking = new PHPTAL_RepeatController($ctx->PETrackings)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->PETracking as $ctx->PETracking): ;
?>
<tr>								
								<?php /* tag "td" from line 101 */; ?>
<td align="left">
									<?php /* tag "B" from line 102 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->PETracking, 'getDatePrint')); ?>
</B>
								</td>								
								<?php /* tag "td" from line 104 */; ?>
<td align="left"><?php echo phptal_escape($ctx->path($ctx->PETracking, 'getProduct01')); ?>
</td>
								<?php /* tag "td" from line 105 */; ?>
<td align="left"><?php echo phptal_escape($ctx->path($ctx->PETracking, 'getProduct02')); ?>
</td>
								<?php /* tag "td" from line 106 */; ?>
<td align="left"><?php echo phptal_escape($ctx->path($ctx->PETracking, 'getProduct03')); ?>
</td>
								<?php /* tag "td" from line 107 */; ?>
<td align="left"><?php echo phptal_escape($ctx->path($ctx->PETracking, 'getProduct04')); ?>
</td>
								<?php /* tag "td" from line 108 */; ?>
<td align="left"><?php echo phptal_escape($ctx->path($ctx->PETracking, 'getProduct08')); ?>
</td>
								<?php /* tag "td" from line 109 */; ?>
<td align="left"><?php echo phptal_escape($ctx->path($ctx->PETracking, 'getProduct22')); ?>
</td>
								<?php /* tag "td" from line 110 */; ?>
<td align="left"><?php echo phptal_escape($ctx->path($ctx->PETracking, 'getProduct23')); ?>
</td>
								<?php /* tag "td" from line 111 */; ?>
<td align="left"><?php echo phptal_escape($ctx->path($ctx->PETracking, 'getProduct30')); ?>
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
/* tag "span" from line 118 */ ;
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

Generated by PHPTAL from /home/banhreht/public_html/mvc/templates/ViewProductExports04.html (edit that file instead) */; ?>