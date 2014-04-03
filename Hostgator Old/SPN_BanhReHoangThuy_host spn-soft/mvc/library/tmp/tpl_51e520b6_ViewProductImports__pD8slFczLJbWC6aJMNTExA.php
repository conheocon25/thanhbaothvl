<?php 
function tpl_51e520b6_ViewProductImports__pD8slFczLJbWC6aJMNTExA(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
                sUpdateURL: "?cmd=UpdateProductImport",
                "aoColumns": [
					null,	
					{
                	    indicator: 'Lưu số lượng...',
						tooltip: 'Click để chỉnh sửa số lượng'
                    },{
                	    indicator: 'Lưu số lượng...',
						tooltip: 'Click để chỉnh sửa số lượng'
                    },{
                	    indicator: 'Lưu số lượng...',
						tooltip: 'Click để chỉnh sửa số lượng'
                    },{
                	    indicator: 'Lưu số lượng...',
						tooltip: 'Click để chỉnh sửa số lượng'
                    },{
                	    indicator: 'Lưu số lượng...',
						tooltip: 'Click để chỉnh sửa số lượng'
                    },{
                	    indicator: 'Lưu số lượng...',
						tooltip: 'Click để chỉnh sửa số lượng'
                    },{
                	    indicator: 'Lưu số lượng...',
						tooltip: 'Click để chỉnh sửa số lượng'
                    },{
                	    indicator: 'Lưu số lượng...',
						tooltip: 'Click để chỉnh sửa số lượng'
                    },{
                	    indicator: 'Lưu số lượng...',
						tooltip: 'Click để chỉnh sửa số lượng'
                    },{
                	    indicator: 'Lưu số lượng...',
						tooltip: 'Click để chỉnh sửa số lượng'
                    },{
                	    indicator: 'Lưu số lượng...',
						tooltip: 'Click để chỉnh sửa số lượng'
                    },{
                	    indicator: 'Lưu số lượng...',
						tooltip: 'Click để chỉnh sửa số lượng'
                    },{
                	    indicator: 'Lưu số lượng...',
						tooltip: 'Click để chỉnh sửa số lượng'
                    },{
                	    indicator: 'Lưu số lượng...',
						tooltip: 'Click để chỉnh sửa số lượng'
                    },{
                	    indicator: 'Lưu số lượng...',
						tooltip: 'Click để chỉnh sửa số lượng'
                    }
				]
			});
			new FixedHeader( oTable, { "top": true, "zTop": 105 } );
	});
	/*]]>*/
	</script>
	</head>	
<?php /* tag "body" from line 78 */; ?>
<body>	
<?php /* tag "div" from line 79 */; ?>
<div id="frame">
	<?php /* tag "div" from line 80 */; ?>
<div id="page">
		<?php 
/* tag "span" from line 81 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/HeaderModuleFactories', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "div" from line 82 */; ?>
<div id="module2">
			<?php /* tag "div" from line 83 */; ?>
<div id="nav">
				<?php /* tag "div" from line 84 */; ?>
<div id="Title">
					<?php /* tag "div" from line 85 */; ?>
<div id="Text"><?php echo phptal_escape($ctx->Title); ?>
</div>
				</div>
			</div>
			<?php /* tag "div" from line 88 */; ?>
<div id="Column1of1">
				<?php /* tag "div" from line 89 */; ?>
<div id="Title">
					<?php 
/* tag "a" from line 91 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Factory, 'getURLViewProductImportsNextMonth')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="Tới" id="TitleButton" class="Button StateDefault ButtonIconSolo CornerAll"<?php echo $_tmp_1 ?>
>
						<?php /* tag "span" from line 92 */; ?>
<span class="ButtonIcon ButtonIconArrowthick1-e"></span>
					</a>
					<?php 
/* tag "a" from line 95 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Factory, 'getURLViewProductImportsBeforeMonth')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="Lui" id="TitleButton" class="Button StateDefault ButtonIconSolo CornerAll"<?php echo $_tmp_1 ?>
>
						<?php /* tag "span" from line 96 */; ?>
<span class="ButtonIcon ButtonIconArrowthick1-w"></span>
					</a>
					<?php 
/* tag "a" from line 99 */ ;
if (null !== ($_tmp_1 = ($ctx->ParentsLinked))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="Quay lại" id="TitleButton" class="Button StateDefault ButtonIconSolo CornerAll"<?php echo $_tmp_1 ?>
>
							<?php /* tag "span" from line 100 */; ?>
<span class="ButtonIcon ButtonIconArrowreturn1-n"></span>quay lại
					</a>	

					<!-- Menu In -->
					<?php 
/* tag "a" from line 105 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Factory, 'getURLPrintProductImports')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="In bảng chấm công" target="blank" id="TitleButton" class="Button StateDefault ButtonIconSolo CornerAll"<?php echo $_tmp_1 ?>
>
							<?php /* tag "span" from line 106 */; ?>
<span class="ButtonIcon ButtonIconPrint"></span>
					</a>
					<?php 
/* tag "a" from line 109 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Factory, 'getURLPrintProductImports1')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="In bảng theo dõi" target="blank" id="TitleButton" class="Button StateDefault ButtonIconSolo CornerAll"<?php echo $_tmp_1 ?>
>
							<?php /* tag "span" from line 110 */; ?>
<span class="ButtonIcon ButtonIconPrint"></span>
					</a>
				</div>
				<?php /* tag "div" from line 113 */; ?>
<div id="Table">
					<?php /* tag "table" from line 114 */; ?>
<table cellpadding="0" cellspacing="0" border="0" class="display" id="DataTable">
						<?php /* tag "thead" from line 115 */; ?>
<thead>					
							<?php /* tag "tr" from line 116 */; ?>
<tr>								
								<?php /* tag "th" from line 117 */; ?>
<th align="center">NGÀY</th>
								<?php /* tag "th" from line 118 */; ?>
<th align="center">nhỏx6<?php /* tag "BR" from line 118 */; ?>
<BR/>(18g)</th>
								<?php /* tag "th" from line 119 */; ?>
<th align="center">nhỏx7<?php /* tag "BR" from line 119 */; ?>
<BR/>(21g)</th>
								<?php /* tag "th" from line 120 */; ?>
<th align="center">nhỏx10<?php /* tag "BR" from line 120 */; ?>
<BR/>(30g)</th>
								<?php /* tag "th" from line 121 */; ?>
<th align="center">nhỏx18<?php /* tag "BR" from line 121 */; ?>
<BR/>(54g)</th>
								<?php /* tag "th" from line 122 */; ?>
<th align="center">16x30<?php /* tag "BR" from line 122 */; ?>
<BR/>(90g)</th>
								<?php /* tag "th" from line 123 */; ?>
<th align="center">16x30<?php /* tag "BR" from line 123 */; ?>
<BR/>(150g)</th>								
								<?php /* tag "th" from line 124 */; ?>
<th align="center">16Cx30<?php /* tag "BR" from line 124 */; ?>
<BR/>(150g)</th>
								<?php /* tag "th" from line 125 */; ?>
<th align="center">16Cx50<?php /* tag "BR" from line 125 */; ?>
<BR/>(250g)</th>
								<?php /* tag "th" from line 126 */; ?>
<th align="center">16Cx90<?php /* tag "BR" from line 126 */; ?>
<BR/>(500g)</th>
								<?php /* tag "th" from line 127 */; ?>
<th align="center">18x30<?php /* tag "BR" from line 127 */; ?>
<BR/>(180g)</th>
								<?php /* tag "th" from line 128 */; ?>
<th align="center">19x45<?php /* tag "BR" from line 128 */; ?>
<BR/>(300g)</th>
								<?php /* tag "th" from line 129 */; ?>
<th align="center">20x30<?php /* tag "BR" from line 129 */; ?>
<BR/>(210g)</th>
								<?php /* tag "th" from line 130 */; ?>
<th align="center">22x30<?php /* tag "BR" from line 130 */; ?>
<BR/>(240g)</th>
								<?php /* tag "th" from line 131 */; ?>
<th align="center">22Cx60<?php /* tag "BR" from line 131 */; ?>
<BR/>(500g)</th>
								<?php /* tag "th" from line 132 */; ?>
<th align="center">18Cx70<?php /* tag "BR" from line 132 */; ?>
<BR/>(500g)</th>
							</tr>
						</thead>
						<?php /* tag "tbody" from line 135 */; ?>
<tbody>
							<?php 
/* tag "tr" from line 136 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->PI = new PHPTAL_RepeatController($ctx->PIs)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->PI as $ctx->PI): ;
?>
<tr>
								<?php /* tag "td" from line 137 */; ?>
<td align="center"><?php /* tag "b" from line 137 */; ?>
<b><?php echo phptal_escape($ctx->path($ctx->PI, 'getDatePrint')); ?>
</b></td>
								<?php /* tag "td" from line 138 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->PI, 'getProduct16')); ?>
</td>
								<?php /* tag "td" from line 139 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->PI, 'getProduct17')); ?>
</td>
								<?php /* tag "td" from line 140 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->PI, 'getProduct20')); ?>
</td>
								<?php /* tag "td" from line 141 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->PI, 'getProduct21')); ?>
</td>
								<?php /* tag "td" from line 142 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->PI, 'getProduct02')); ?>
</td>
								<?php /* tag "td" from line 143 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->PI, 'getProduct04')); ?>
</td>
								<?php /* tag "td" from line 144 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->PI, 'getProduct06')); ?>
</td>
								<?php /* tag "td" from line 145 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->PI, 'getProduct10')); ?>
</td>
								<?php /* tag "td" from line 146 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->PI, 'getProduct18')); ?>
</td>
								<?php /* tag "td" from line 147 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->PI, 'getProduct08')); ?>
</td>								
								<?php /* tag "td" from line 148 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->PI, 'getProduct11')); ?>
</td>					
								<?php /* tag "td" from line 149 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->PI, 'getProduct13')); ?>
</td>
								<?php /* tag "td" from line 150 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->PI, 'getProduct15')); ?>
</td>
								<?php /* tag "td" from line 151 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->PI, 'getProduct19')); ?>
</td>								
								<?php /* tag "td" from line 152 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->PI, 'getProduct22')); ?>
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
/* tag "span" from line 159 */ ;
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

Generated by PHPTAL from /home/banhreht/public_html/mvc/templates/ViewProductImports.html (edit that file instead) */; ?>