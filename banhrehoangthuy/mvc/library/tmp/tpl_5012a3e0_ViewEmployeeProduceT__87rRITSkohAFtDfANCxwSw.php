<?php 
function tpl_5012a3e0_ViewEmployeeProduceT__87rRITSkohAFtDfANCxwSw(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
<script type="text/javascript" language="javascript" src="mvc/templates/script/jquery.dataTables.editable.js"></script>
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
		
		var id = -1;
		$('#DataTable').dataTable({			
			"bStateSave": true,
			"bFilter": false,
			"bInfo": false,
			"bSort": false,
			"bPaginate": false,
			bJQueryUI: true		
		}).makeEditable({				
                sUpdateURL: "?cmd=AjaxUpdateEmployeeProduce",
                "aoColumns": [
					null,
                    {
                	    indicator: 'Lưu số lượng...',
						tooltip: 'Click để chỉnh sửa số lượng 16(3g)'						
                    },
                    {
                	    indicator: 'Lưu số lượng...',
						tooltip: 'Click để chỉnh sửa số lượng 16 (5g)'
                    },
                    {
                	    indicator: 'Lưu số lượng...',
						tooltip: 'Click để chỉnh sửa số lượng'						
                    },
					{
                	    indicator: 'Lưu số lượng...',
						tooltip: 'Click để chỉnh sửa số lượng'						
                    },
					{
                	    indicator: 'Lưu số lượng...',
						tooltip: 'Click để chỉnh sửa số lượng'						
                    },
					{
                	    indicator: 'Lưu số lượng...',
						tooltip: 'Click để chỉnh sửa số lượng'						
                    },
					{
                	    indicator: 'Lưu số lượng...',
						tooltip: 'Click để chỉnh sửa số lượng'						
                    },
					{
                	    indicator: 'Lưu số lượng...',
						tooltip: 'Click để chỉnh sửa số lượng'						
                    }
				],
				fnOnEditing: function(input)
				{ 	
					//$("#trace").append();
					//alert("Đang cập nhật " + input.val());
					return true;
				},
            	fnOnEdited: function(status)
				{ 	
					//$("#trace").append("Edit action finished. Status - " + status);
					//alert("Cập nhật rồi" + status);
				}
			});					
	});
	/*]]>*/	
	</script>
	</head>	
<?php /* tag "body" from line 87 */; ?>
<body>	
<?php /* tag "div" from line 88 */; ?>
<div id="frame">
	<?php /* tag "div" from line 89 */; ?>
<div id="page">
		<?php 
/* tag "span" from line 90 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('macros.xhtml/HeaderModuleFactories', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "div" from line 91 */; ?>
<div id="module2">
			<?php /* tag "div" from line 92 */; ?>
<div id="nav">
				<?php /* tag "div" from line 93 */; ?>
<div id="Title">
					<?php /* tag "div" from line 94 */; ?>
<div id="Text"><?php echo phptal_escape($ctx->Title); ?>
</div>
				</div>
			</div>
			<?php /* tag "div" from line 97 */; ?>
<div id="Column1of1">
				<?php /* tag "div" from line 98 */; ?>
<div id="Title">
					<?php 
/* tag "a" from line 100 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Factory, 'getURLViewEmployeeProduceTrackingsNext')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="Tới" id="TitleButton" class="Button StateDefault ButtonIconSolo CornerAll"<?php echo $_tmp_1 ?>
>
						<?php /* tag "span" from line 101 */; ?>
<span class="ButtonIcon ButtonIconSeekNext"></span>
					</a>
					<?php 
/* tag "a" from line 104 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Factory, 'getURLViewEmployeeProduceTrackingsBefore')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="Lui" id="TitleButton" class="Button StateDefault ButtonIconSolo CornerAll"<?php echo $_tmp_1 ?>
>
						<?php /* tag "span" from line 105 */; ?>
<span class="ButtonIcon ButtonIconSeekPrev"></span>
					</a>
					<?php 
/* tag "a" from line 108 */ ;
if (null !== ($_tmp_1 = ($ctx->ParentsLinked))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="Quay lại" id="TitleButton" class="Button StateDefault ButtonIconSolo CornerAll"<?php echo $_tmp_1 ?>
>
							<?php /* tag "span" from line 109 */; ?>
<span class="ButtonIcon ButtonIconArrowreturn1-n"></span>quay lại
					</a>

					<!-- Menu In -->
					<?php 
/* tag "a" from line 114 */ ;
if (null !== ($_tmp_1 = ($ctx->PrintLinked))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="In Bảng mẫu chấm công của công nhân" target="blank" id="TitleButton" class="Button StateDefault ButtonIconSolo CornerAll"<?php echo $_tmp_1 ?>
>
							<?php /* tag "span" from line 115 */; ?>
<span class="ButtonIcon ButtonIconPrint"></span>quay lại
					</a>
				</div>
				<?php /* tag "div" from line 118 */; ?>
<div id="Table">
					<?php /* tag "table" from line 119 */; ?>
<table cellpadding="0" cellspacing="0" border="0" class="display" id="DataTable">
						<?php /* tag "thead" from line 120 */; ?>
<thead>					
							<?php /* tag "tr" from line 121 */; ?>
<tr>								
								<?php /* tag "th" from line 122 */; ?>
<th align="left" width="20%">TÊN</th>
								<?php /* tag "th" from line 123 */; ?>
<th align="center" width="10%">16x30(90g)</th>
								<?php /* tag "th" from line 124 */; ?>
<th align="center" width="10%">16x30(150g)</th>
								<?php /* tag "th" from line 125 */; ?>
<th align="center" width="10%">16calx30(150g)</th>
								<?php /* tag "th" from line 126 */; ?>
<th align="center" width="10%">18x30(180g)</th>								
								<?php /* tag "th" from line 127 */; ?>
<th align="center" width="10%">19x30(210g)</th>
								<?php /* tag "th" from line 128 */; ?>
<th align="center" width="10%">19x45(300g)</th>								
								<?php /* tag "th" from line 129 */; ?>
<th align="center" width="10%">20x30(210g)</th>
								<?php /* tag "th" from line 130 */; ?>
<th align="center" width="10%">22x30(240g)</th>
							</tr>
						</thead>
						<?php /* tag "tbody" from line 133 */; ?>
<tbody>
							<?php 
/* tag "tr" from line 134 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->EmployeeProduceTracking = new PHPTAL_RepeatController($ctx->EmployeeProduceTrackings)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->EmployeeProduceTracking as $ctx->EmployeeProduceTracking): ;
?>
<tr>
								<?php /* tag "td" from line 135 */; ?>
<td align="left"><?php echo phptal_escape($ctx->path($ctx->EmployeeProduceTracking, 'getName')); ?>
</td>
								<?php /* tag "td" from line 136 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->EmployeeProduceTracking, 'getProduct02')); ?>
</td>
								<?php /* tag "td" from line 137 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->EmployeeProduceTracking, 'getProduct04')); ?>
</td>
								<?php /* tag "td" from line 138 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->EmployeeProduceTracking, 'getProduct06')); ?>
</td>
								<?php /* tag "td" from line 139 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->EmployeeProduceTracking, 'getProduct08')); ?>
</td>
								<?php /* tag "td" from line 140 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->EmployeeProduceTracking, 'getProduct10')); ?>
</td>
								<?php /* tag "td" from line 141 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->EmployeeProduceTracking, 'getProduct11')); ?>
</td>
								<?php /* tag "td" from line 142 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->EmployeeProduceTracking, 'getProduct13')); ?>
</td>
								<?php /* tag "td" from line 143 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->EmployeeProduceTracking, 'getProduct15')); ?>
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
/* tag "span" from line 150 */ ;
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

Generated by PHPTAL from /home/a23app/public_html/bra/mvc/templates/ViewEmployeeProduceTrackings2.html (edit that file instead) */; ?>