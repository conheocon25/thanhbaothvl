<?php 
function tpl_51e520b3_ViewProductExports03__NVpRcqlV5v3JlgssvOgKcg(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
                sUpdateURL: "?cmd=UpdateProductExport&IdCustomer=3",
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
<?php /* tag "body" from line 91 */; ?>
<body>
<?php /* tag "div" from line 92 */; ?>
<div id="frame">
	<?php /* tag "div" from line 93 */; ?>
<div id="page">		
		<?php 
/* tag "span" from line 94 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/HeaderModuleCustomers', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "div" from line 95 */; ?>
<div id="module2">
			<?php /* tag "div" from line 96 */; ?>
<div id="nav">
				<?php /* tag "div" from line 97 */; ?>
<div id="Title">
					<?php /* tag "div" from line 98 */; ?>
<div id="Text"><?php echo phptal_escape($ctx->Title); ?>
</div>
				</div>				
			</div>
			<?php /* tag "div" from line 101 */; ?>
<div id="Column1of1">
				<?php /* tag "div" from line 102 */; ?>
<div id="Title">
					<?php 
/* tag "a" from line 104 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Customer, 'getURLViewProductExportsNextMonth')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="Tới" id="TitleButton" class="Button StateDefault ButtonIconSolo CornerAll"<?php echo $_tmp_1 ?>
>
						<?php /* tag "span" from line 105 */; ?>
<span class="ButtonIcon ButtonIconSeekNext"></span>
					</a>
					<?php 
/* tag "a" from line 108 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Customer, 'getURLViewProductExportsBeforeMonth')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="Lui" id="TitleButton" class="Button StateDefault ButtonIconSolo CornerAll"<?php echo $_tmp_1 ?>
>
						<?php /* tag "span" from line 109 */; ?>
<span class="ButtonIcon ButtonIconSeekPrev"></span>
					</a>
					<?php 
/* tag "a" from line 112 */ ;
if (null !== ($_tmp_1 = ($ctx->ParentsLinked))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="Quay lại" id="TitleButton" class="Button StateDefault ButtonIconSolo CornerAll"<?php echo $_tmp_1 ?>
>
							<?php /* tag "span" from line 113 */; ?>
<span class="ButtonIcon ButtonIconArrowreturn1-n"></span>quay lại
					</a>				
					<?php 
/* tag "a" from line 116 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Customer, 'getURLPrintProductExports')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="In" target="blank" id="TitleButton" class="Button StateDefault ButtonIconSolo CornerAll"<?php echo $_tmp_1 ?>
>
							<?php /* tag "span" from line 117 */; ?>
<span class="ButtonIcon ButtonIconPrint"></span>
					</a>
				</div>
				<?php /* tag "div" from line 120 */; ?>
<div id="Table">
					<?php /* tag "table" from line 121 */; ?>
<table cellpadding="0" cellspacing="0" border="0" class="display" id="DataTable">
						<?php /* tag "thead" from line 122 */; ?>
<thead>					
							<?php /* tag "tr" from line 123 */; ?>
<tr>								
								<?php /* tag "th" from line 124 */; ?>
<th align="left">NGÀY</th>
								<?php /* tag "th" from line 125 */; ?>
<th align="left">3g<?php /* tag "BR" from line 125 */; ?>
<BR/>dầu</th>
								<?php /* tag "th" from line 126 */; ?>
<th align="left">3g<?php /* tag "BR" from line 126 */; ?>
<BR/>mỡ</th>
								<?php /* tag "th" from line 127 */; ?>
<th align="left">3g<?php /* tag "BR" from line 127 */; ?>
<BR/>ds</th>
								<?php /* tag "th" from line 128 */; ?>
<th align="left">5g<?php /* tag "BR" from line 128 */; ?>
<BR/>dầu</th>
								<?php /* tag "th" from line 129 */; ?>
<th align="left">5g<?php /* tag "BR" from line 129 */; ?>
<BR/>mỡ</th>
								<?php /* tag "th" from line 130 */; ?>
<th align="left">5g<?php /* tag "BR" from line 130 */; ?>
<BR/>ds</th>
								<?php /* tag "th" from line 131 */; ?>
<th align="left">5.5g<?php /* tag "BR" from line 131 */; ?>
<BR/>dầu</th>
								<?php /* tag "th" from line 132 */; ?>
<th align="left">5.5g<?php /* tag "BR" from line 132 */; ?>
<BR/>mỡ</th>
								<?php /* tag "th" from line 133 */; ?>
<th align="left">6g<?php /* tag "BR" from line 133 */; ?>
<BR/>dầu</th>
								<?php /* tag "th" from line 134 */; ?>
<th align="left">6g<?php /* tag "BR" from line 134 */; ?>
<BR/>mỡ</th>
								<?php /* tag "th" from line 135 */; ?>
<th align="left">6g<?php /* tag "BR" from line 135 */; ?>
<BR/>ds</th>
								<?php /* tag "th" from line 136 */; ?>
<th align="left">6.5g<?php /* tag "BR" from line 136 */; ?>
<BR/>dầu</th>
								<?php /* tag "th" from line 137 */; ?>
<th align="left">6.5g<?php /* tag "BR" from line 137 */; ?>
<BR/>mỡ</th>
								<?php /* tag "th" from line 138 */; ?>
<th align="left">6.5g<?php /* tag "BR" from line 138 */; ?>
<BR/>ds</th>
								<?php /* tag "th" from line 139 */; ?>
<th align="left">7g<?php /* tag "BR" from line 139 */; ?>
<BR/>dầu</th>
								<?php /* tag "th" from line 140 */; ?>
<th align="left">7g<?php /* tag "BR" from line 140 */; ?>
<BR/>mỡ</th>
								<?php /* tag "th" from line 141 */; ?>
<th align="left">7g<?php /* tag "BR" from line 141 */; ?>
<BR/>ds</th>
								<?php /* tag "th" from line 142 */; ?>
<th align="left">8g<?php /* tag "BR" from line 142 */; ?>
<BR/>dầu</th>
								<?php /* tag "th" from line 143 */; ?>
<th align="left">8g<?php /* tag "BR" from line 143 */; ?>
<BR/>mỡ</th>
								<?php /* tag "th" from line 144 */; ?>
<th align="left">8g<?php /* tag "BR" from line 144 */; ?>
<BR/>ds</th>
							</tr>
						</thead>
						<?php /* tag "tbody" from line 147 */; ?>
<tbody>
							<?php 
/* tag "tr" from line 148 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->PETracking = new PHPTAL_RepeatController($ctx->PETrackings)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->PETracking as $ctx->PETracking): ;
?>
<tr>								
								<?php /* tag "td" from line 149 */; ?>
<td align="left">
									<?php /* tag "B" from line 150 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->PETracking, 'getDatePrint')); ?>
</B>
								</td>								
								<?php /* tag "td" from line 152 */; ?>
<td align="left"><?php echo phptal_escape($ctx->path($ctx->PETracking, 'getProduct05')); ?>
</td>
								<?php /* tag "td" from line 153 */; ?>
<td align="left"><?php echo phptal_escape($ctx->path($ctx->PETracking, 'getProduct06')); ?>
</td>
								<?php /* tag "td" from line 154 */; ?>
<td align="left"><?php echo phptal_escape($ctx->path($ctx->PETracking, 'getProduct07')); ?>
</td>
								<?php /* tag "td" from line 155 */; ?>
<td align="left"><?php echo phptal_escape($ctx->path($ctx->PETracking, 'getProduct08')); ?>
</td>
								<?php /* tag "td" from line 156 */; ?>
<td align="left"><?php echo phptal_escape($ctx->path($ctx->PETracking, 'getProduct09')); ?>
</td>
								<?php /* tag "td" from line 157 */; ?>
<td align="left"><?php echo phptal_escape($ctx->path($ctx->PETracking, 'getProduct10')); ?>
</td>
								<?php /* tag "td" from line 158 */; ?>
<td align="left"><?php echo phptal_escape($ctx->path($ctx->PETracking, 'getProduct27')); ?>
</td>
								<?php /* tag "td" from line 159 */; ?>
<td align="left"><?php echo phptal_escape($ctx->path($ctx->PETracking, 'getProduct28')); ?>
</td>
								<?php /* tag "td" from line 160 */; ?>
<td align="left"><?php echo phptal_escape($ctx->path($ctx->PETracking, 'getProduct12')); ?>
</td>
								<?php /* tag "td" from line 161 */; ?>
<td align="left"><?php echo phptal_escape($ctx->path($ctx->PETracking, 'getProduct13')); ?>
</td>
								<?php /* tag "td" from line 162 */; ?>
<td align="left"><?php echo phptal_escape($ctx->path($ctx->PETracking, 'getProduct14')); ?>
</td>
								<?php /* tag "td" from line 163 */; ?>
<td align="left"><?php echo phptal_escape($ctx->path($ctx->PETracking, 'getProduct15')); ?>
</td>
								<?php /* tag "td" from line 164 */; ?>
<td align="left"><?php echo phptal_escape($ctx->path($ctx->PETracking, 'getProduct16')); ?>
</td>
								<?php /* tag "td" from line 165 */; ?>
<td align="left"><?php echo phptal_escape($ctx->path($ctx->PETracking, 'getProduct17')); ?>
</td>
								<?php /* tag "td" from line 166 */; ?>
<td align="left"><?php echo phptal_escape($ctx->path($ctx->PETracking, 'getProduct18')); ?>
</td>
								<?php /* tag "td" from line 167 */; ?>
<td align="left"><?php echo phptal_escape($ctx->path($ctx->PETracking, 'getProduct19')); ?>
</td>
								<?php /* tag "td" from line 168 */; ?>
<td align="left"><?php echo phptal_escape($ctx->path($ctx->PETracking, 'getProduct20')); ?>
</td>
								<?php /* tag "td" from line 169 */; ?>
<td align="left"><?php echo phptal_escape($ctx->path($ctx->PETracking, 'getProduct24')); ?>
</td>
								<?php /* tag "td" from line 170 */; ?>
<td align="left"><?php echo phptal_escape($ctx->path($ctx->PETracking, 'getProduct25')); ?>
</td>
								<?php /* tag "td" from line 171 */; ?>
<td align="left"><?php echo phptal_escape($ctx->path($ctx->PETracking, 'getProduct26')); ?>
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
/* tag "span" from line 178 */ ;
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

Generated by PHPTAL from /home/banhreht/public_html/mvc/templates/ViewProductExports03.html (edit that file instead) */; ?>